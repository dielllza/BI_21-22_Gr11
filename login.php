<?php session_start();
if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true) {
	header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>App Creator | Log In</title>
	<link rel="stylesheet" type="text/css" href="css/login-register.css">
	<!-- <script type="text/javascript" src="js/login.js"></script> -->
</head>
<body>
	<?php
		include_once("function_utils/ui_functions.php");
	 ?>
	<main>
		<div class="photo">
			<h2>Welcome back to <a href="index.html" style="text-decoration: none;"><span style="font-family: 'Times New Roman', cursive; color: #2e3f51;">App Creator</span></a></h2>
			<a href="images/login-img.jpg"><img src="images/login-img.jpg"></a>
		</div>
		<div class="form-content">
			<h1 style="letter-spacing: 1px; font-family: Times New Roman; font-weight: 500;">APP CREATOR</h1>
			<form method="post" action="form_processor_services/process_login.php">
			<!-- <form method="post" action="database_services/db_login.php"> -->

				<table>
					<tbody>
						<tr>
							<td>
								<label for="email">Email address:</label>
							</td>
							<td>
								<input type="text" name="email" id="email" autofocus
								 value = "<?php if(isset($_SESSION["email"])) { echo $_SESSION["email"]; }
								 				if(isset($_COOKIE["email"])) echo $_COOKIE['email'];?>">
							</td>
						</tr>
						<tr>
						<td></td>
						<td>
							<?php 
							displayErrors("email");	 
							?>
						</td>					
						</tr>
						<tr>
							<td>
								<label for="password">Password:</label>	
							</td>
							<td>
								<input type="password" name="password" id="password"
								value = "<?php if(isset($_SESSION["password"])) { echo $_SESSION["password"]; }
											   if(isset($_COOKIE["password"])) echo $_COOKIE['password'];?>">
							</td>
						</tr>
						<tr>
						<td></td>
						<td>
							<?php 
							displayErrors("password");	 
							?>
						</td>					
						</tr>
					</tbody>
				</table>
				<?php displayErrors("login");?>
				<input type="submit" name="submit" class="btn" value="Log in">
				<div>
				<label>
					<input type="checkbox" name="remember" value="1">
						Remember me
				</label>
				</div>
			</form>
				<p>No account?</p>
				<p style=" margin-top: 4px"> <a href="register.php" style="text-decoration: none; color: #16a596;  margin-top: 4px">Register</a></p>
		</div>
	</main>
	<?php
	unset($_SESSION["errors"]);
	?>
</body>
</html>