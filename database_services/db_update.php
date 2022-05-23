<?php
session_start();
require_once('../mysql_connection/mysql_connection.php');

function update($first_name, $last_name, $phone, $birthday, $country)
{
    global $connection;
    $esc_first_name = escape_this_string($first_name);
    $esc_last_name = escape_this_string($last_name);
    $esc_birthday = escape_this_string($birthday);
    $esc_country = escape_this_string($country);
    $esc_phone = escape_this_string($phone);
    $query = "UPDATE users SET first_name = '$esc_first_name', last_name = '$esc_last_name', phone_number = '$esc_phone', birthdate = '$esc_birthday', country = '$esc_country' WHERE id = '$_SESSION[user_id]'";
    run_mysql_query($query);
}
