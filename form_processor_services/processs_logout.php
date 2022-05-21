<?php 
session_start();
unset($_SESSION["logged_in"]);
unset($_SESSION["user_id"]);
var_dump($_SESSION);

header("Location: ../index.php")
?>