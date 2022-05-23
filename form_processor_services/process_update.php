<?php

session_start();

require_once("../function_utils/validation.php");
require_once("../database_services/db_update.php");

unset($_SESSION["errors"]);

unset($_SESSION["first_name"]);
unset($_SESSION["last_name"]);
unset($_SESSION["email"]);
unset($_SESSION["phone"]);
unset($_SESSION["birthday"]) ;
unset($_SESSION["country"]);
unset($_SESSION["password"]);
unset($_SESSION["confirm_password"]);

$email_regex = '/^[a-zA-Z0-9.+_-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]+$/i'; //email is case insensitive
$password_regex = '/^([^0-9]*|[^A-Z]*)$/';
$phone_regex = '/^\d{3}\s\d{3}\s\d{3}$/';

$errors = [];

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
//$email = $_POST["email"];
$phone = $_POST["phone"];
$birthday = $_POST["birthday"];
$country = $_POST["country"];

validateNotNull($first_name, "first_name", "First name");
validateNotNull($last_name, "last_name", "Last name");
validateNotNull($phone, "phone","Phone");
validateNotNull($birthday, "birthday","Birthdate");
validateNotNull($country, "country", "Country");
validatePhoneRegex($phone_regex, $phone);
validateBirthdate($birthday);


function manageSession() {
    global $errors, $first_name, $last_name, $email, $phone, $birthday, $country;
    $_SESSION["errors"] = $errors;
    $_SESSION["first_name"] = $first_name;
    $_SESSION["last_name"] = $last_name;
    $_SESSION["email"] = $email;
    $_SESSION["phone"] = $phone;
    $_SESSION["birthday"] = $birthday;
    $_SESSION["country"] = $country;
}

if (!empty($errors)) {
    manageSession();
    header("Location: ../user_profile.php");
} else {
    try {
        update($first_name, $last_name, $phone, $birthday, $country);
        $_SESSION["first_name"] = $first_name;
        // set to session name + id.
        header("Location: ../index.php");
    } catch (Exception $e) {
        $errors["update"] = array("Could not update. Please try again later");
        manageSession();
        header("Location: ../user_profile.php");
    }
}
?>
