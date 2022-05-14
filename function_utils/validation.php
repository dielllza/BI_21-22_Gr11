<?php
function validateNotNull($input, $inputName, $inputMessageText) {
    if (empty($input)) {
        // echo("$inputMessageText is empty");
        $errorText = " $inputMessageText cannot be empty.";
        appendToErrors($inputName, $errorText);
    }
}

function validatePasswordLength($input, $inputName, $inputMessageText) {
    if (strlen($input) < 8) {
        $errorText = "$inputMessageText must have at least 8 characters";
        appendToErrors($inputName, $errorText);
    }
}

function validateEmailRegex($email_regex, $email) {
    if (preg_match($email_regex, $email) != 1) {
        appendToErrors("email", "Invalid email");
    }
}

function validateEmailIsUnique() {
 // todo via db
}

function validatePhoneRegex($phone_regex, $phone) {
    if (preg_match($phone_regex, $phone) != 1) {
        appendToErrors("phone", "Not a valid phone number");
    }
}

function validateBirthdate($birthday) {
    $age = (date("Y-m-d") - $birthday);
    if ($age < 17) {
        appendToErrors("birthday", "User must be 18 or older");
    }

}

function valdatePasswordRegex($password_regex, $password) {
    if (preg_match($password_regex, $password)) {
        appendToErrors("password", "Must contain a number and an uppercase character");
    }
}

function validatePasswordsMatch($password, $confirm_password) {
    if ($password != $confirm_password) {
        appendToErrors("confirm_password", "Passwords don't match");
    }
}


function appendToErrors($inputName, $errorText) {
    global $errors;
    if(!isset($errors[$inputName])) {
        $errors[$inputName] = array($errorText);
    } else {
        $errors[$inputName][] = $errorText;
    }
}
?>