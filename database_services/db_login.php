<?php
 require_once('../mysql_connection/mysql_connection.php'); 

 function login($email, $password)
 {
    global $connection;
    $esc_email= escape_this_string($email);
    $esc_password = escape_this_string($password);
    $query = "SELECT * FROM users WHERE email_address = '$esc_email' AND password = '$esc_password' ";
    $user = fetch_record($query);
    return $user;
 }
