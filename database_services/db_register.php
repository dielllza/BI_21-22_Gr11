<?php
 require_once('../mysql_connection/mysql_connection.php'); 
 
 function register( $first_name, $last_name, $email, $phone, $birthday, $country, $password)
 {
    global $connection;
    $esc_email= escape_this_string($email);
    $esc_password = escape_this_string($password);
    $query = "INSERT INTO app_creator.users (first_name, last_name, email_address, phone_number, birthdate, country, password, roles_id)
     VALUES ('$first_name', '$last_name', '$email', '$phone', '$birthday', '$country', '$password', 2);";
    $user = run_mysql_query($query);
    return $user;
 }