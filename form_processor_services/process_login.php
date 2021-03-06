<?php 

session_start();

require_once("../function_utils/validation.php");
require_once("../database_services/db_login.php");
include("../login_error_log/FailedLoginLog.php");

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
$remember = $_POST["remember"];

if($remember==1){
    setcookie("email", $email, time()+60*60*24*10,"/");
    setcookie("password", $password, time()+60*60*24*10,"/");
}

validateNotNull($email, "email", "Email");
validateNotNull($password, "password", "Password");
validateEmailRegex($email_regex, $email);
//todo edit this
if (!empty($errors)) { 
    manageSession();
    header("Location: ../login.php");
}
else {
    try {
        $user = login($email, $password);
        $_SESSION["logged_in"] = true;
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["first_name"] = $user["first_name"];
        $_SESSION["role_id"] = $user["roles_id"];
        // set to session name + id.
        header("Location: ../index.php");
    }
    catch(Exception $e) {
        //echo $e->getMessage();
        $errors["login"] = array("Wrong email and password combination! " . $e->getMessage());
        $writer = new FailedLoginLog();
        date_default_timezone_set('CEST');
        $writer->writeToFile($email, date('d/m/y H:i:s'), $_SERVER['REMOTE_ADDR']);
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
