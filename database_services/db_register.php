<?php
 require_once('../mysql_connection/mysql_connection.php'); 
 
 function register( $first_name, $last_name, $email, $phone, $birthday, $country, $password)
 {
    global $connection;
    $esc_email= escape_this_string($email);
    $esc_password = escape_this_string($password);
    $esc_first_name = escape_this_string($first_name);
    $esc_last_name = escape_this_string($last_name);
    $esc_birthday = escape_this_string($birthday);
    $esc_country = escape_this_string($country);
    $esc_phone = escape_this_string($phone);
    $query = "INSERT INTO app_creator.users (first_name, last_name, email_address, phone_number, birthdate, country, password, roles_id)
     VALUES ('$esc_first_name', '$esc_last_name', '$esc_email', '$esc_phone', '$esc_birthday', '$esc_country', '$esc_password', 2);";
    $user = run_mysql_query($query);
    return $user;
 }

 function findUserWithEmail($email) {
   global $connection;
   $esc_email= escape_this_string($email);
   $query = "SELECT * FROM users WHERE email_address = '$esc_email'";
   $user = fetch_record($query);
   return $user;
 }