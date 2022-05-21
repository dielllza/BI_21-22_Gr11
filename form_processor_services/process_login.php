<?php 

session_start();

require_once("../function_utils/validation.php");
require_once("../database_services/db_login.php");

unset($_SESSION["errors"]);

unset($_SESSION["email"]);
unset($_SESSION["password"]);

$email_regex = '/^[a-zA-Z0-9.+_-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]+$/i'; //email is case insensitive

$errors = [];

if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true) {
	header("Location: ../index.php");
}

$email = $_POST["email"];
$password = $_POST["password"];

validateNotNull($email, "email", "Email");
validateNotNull($password, "password", "Password");
validateEmailRegex($email_regex, $email);
//todo edit this
if (!empty($errors)) { 
    manageSession();
    header("Location: ../login.php");
}
else {
    $user = login($email, $password);
    if($user) {
        $_SESSION["logged_in"] = true;
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["first_name"]=$user["first_name"];
        // set to session name + id.
        header("Location: ../index.php");
    } else {
        $errors["login"] = array("Wrong email and password combination!");
        manageSession();
        header("Location: ../login.php");
    }
}

function manageSession() {
    global $errors, $email, $password;
    $_SESSION["errors"] = $errors;
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
}
?>