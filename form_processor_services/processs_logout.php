<?php 
session_start();
unset($_SESSION["logged_in"]);
var_dump($_SESSION);

header("Location: ../login.php")
?>