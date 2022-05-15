<?php 
session_start();
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] != true) {
	header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Title</title>
</head>
<body>
<p>Hello dear user </p>
<?php 
echo "your id is " . $_SESSION["user_id"] . " ";
?>
<a href = "form_processor_services/processs_logout.php"> Log out </a>
</body>
</html>