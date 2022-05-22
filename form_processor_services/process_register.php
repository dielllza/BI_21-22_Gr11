<?php 

session_start();

require_once("../function_utils/validation.php");
require_once("../database_services/db_register.php");

unset($_SESSION["errors"]);

unset($_SESSION["first_name"]);
unset($_SESSION["last_name"]);
unset($_SESSION["email"]);
unset($_SESSION["phone"]);
unset($_SESSION["birthday"]) ;
unset($_SESSION["country"]);
unset($_SESSION["password"]);
unset($_SESSION["confirm_password"]);

$email_regex = '/^[a-zA-Z0-9.+_-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]+$/i'; //eamil is case insensitive
$password_regex = '/^([^0-9]*|[^A-Z]*)$/';
$phone_regex = '/^\d{3}\s\d{3}\s\d{3}$/';

$errors = [];

if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true) {
	header("Location: ../home.php");
}

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$birthday = $_POST["birthday"];
$country = $_POST["country"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];

validateNotNull($first_name, "first_name", "First name");
validateNotNull($last_name, "last_name", "Last name");
validateNotNull($email, "email", "Email");
validateNotNull($phone, "phone","Phone");
validateNotNull($birthday, "birthday","Birthdate");
validateNotNull($country, "country", "Country");
validateNotNull($password, "password", "Password");
validateNotNull($confirm_password, "confirm_password", "Password confirmation");
validateEmailRegex($email_regex, $email);
validateEmailIsUnique($email);
validatePhoneRegex($phone_regex, $phone);
validateBirthdate($birthday);
valdatePasswordRegex($password_regex, $password);
validatePasswordsMatch($password, $confirm_password);
validatePasswordLength($password, "password", "Password");


function manageSession() {
   global $errors, $first_name, $last_name, $email, $phone, $birthday, $country, $password, $confirm_password;
    $_SESSION["errors"] = $errors;
    $_SESSION["first_name"] = $first_name;
    $_SESSION["last_name"] = $last_name;
    $_SESSION["email"] = $email;
    $_SESSION["phone"] = $phone;
    $_SESSION["birthday"] = $birthday;
    $_SESSION["country"] = $country;
    $_SESSION["password"] = $password;
    $_SESSION["confirm_password"] = $confirm_password;
}

if (!empty($errors)) { 
    manageSession();
    header("Location: ../register.php");
} else {
    $user_id = register($first_name, $last_name, $email, $phone, 
    $birthday, $country, $password);
    if($user_id) {
        $_SESSION["logged_in"] = true;
        $_SESSION["user_id"] = $user_id;
	$_SESSION["first_name"] = $first_name;
        // set to session name + id.
        header("Location: ../index.php");
    } else {
        $errors["register"] = array("Could not register. Please try again later");
        manageSession();
        header("Location: ../register.php");
    }
}
?>
