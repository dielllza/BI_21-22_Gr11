<?php
 require_once('../mysql_connection/mysql_connection.php'); 

 function login($email, $password)
 {
    global $connection;
    $esc_email= escape_this_string($email);
    $userRecord = "SELECT * FROM users WHERE email_address = '$esc_email'";
    $user = fetch_record($userRecord);

    $hashPassword = $user["password"];

    $esc_password = password_verify($password, $hashPassword);

    if (!$esc_password) {
        throw new Exception("Incorrect password");
    }

    return $user;
 }
