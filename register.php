<?php session_start();
if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true) {
	header("Location: home.php");
}
include_once("function_utils/ui_functions.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>App Creator | Register</title>
	<link rel="stylesheet" type="text/css" href="css/login-register.css">
</head>
<body>
	<main>
		<div class="photo">
			<h2>Welcome to <a href="index.html" style="text-decoration: none;"><span style="font-family: 'Times New Roman', cursive; color: #2e3f51;">App Creator</span></a></h2>
			<a href="images/login-img.jpg"><img src="images/login-img.jpg"></a>
		</div>
		<div class="form-content">
			<h1 style="letter-spacing: 1px; font-family: Times New Roman; font-weight: 500;">APP CREATOR</h1>
			<form method="post" action="form_processor_services/process_register.php">
				<table>
					<tbody>
						<tr>
							<td>
								<label for="first_name">First name:</label>
							</td>
							<td>
								<input type="text" name="first_name" id="first_name" autofocus
								 value = "<?php if(isset($_SESSION["first_name"])) { echo $_SESSION["first_name"]; }?>">
							</td>
						</tr>
						<tr>
						<td></td>
						<td>
							<?php 
							displayErrors("first_name");	 
							?>
						</td>					
						</tr>
						<tr>
							<td>
								<label for="last_name">Last name:</label>
							</td>
							<td>
								<input type="text" name="last_name" id="last_name" 
								value = "<?php if(isset($_SESSION["last_name"])) { echo $_SESSION["last_name"]; }?>"/>
							</td>
						</tr>
						<tr>
						<td></td>
						<td>
							<?php 
							displayErrors("last_name");	 
							?>
						</td>					
						</tr>
						<tr>
							<td>
								<label for="email">Email address:</label>
							</td>
							<td>
								<input type="text" name="email" id="email"
								 value = "<?php if(isset($_SESSION["email"])) { echo $_SESSION["email"]; }?>">
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
								<label for="phone">Phone number:</label>
							</td>
							<td>
								<input type="tel" name="phone" id="phone" placeholder="045 957 214" 
								 value = "<?php if(isset($_SESSION["phone"])) { echo $_SESSION["phone"]; }?>"/>
							</td>
						</tr>
						<tr>
						<td></td>
						<td>
							<?php 
							displayErrors("phone");	 
							?>
						</td>					
						</tr>
						<tr>
							<td>
								<label for="birthday">Birthdate:</label>
							</td>
							<td>
								<input type="date" name="birthday" id="birthday"
								 value = "<?php if(isset($_SESSION["birthday"])) { echo $_SESSION["birthday"]; }?>">
							</td>
						</tr>
						<tr>
						<td></td>
						<td>
							<?php 
							displayErrors("birthday");	 
							?>
						</td>					
						</tr>
						<tr>
							<td>
								<label for="country">Country:</label>
							</td>
							<td>
								<select name = "country" id="country">
									<option selected value="Kosovo">Kosovo</option>
									<option value="Albania">Albania</option>
									<option value="US">US</option>
									<option value="France">France</option>
									<option value="Italy">Italy</option>
									<option value="Germany">Germany</option>
									<option value="England">England</option>
									<option value="Turkey">Turkey</option>
									<option value="Japan">Japan</option>
									<option value="Brazil">Brazil</option>
									<option value="Peru">Peru</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<label for="password">Password:</label>	
							</td>
							<td>
								<input type="password" name="password" id="password"
								value = "<?php if(isset($_SESSION["password"])) { echo $_SESSION["password"]; }?>">
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
						<tr>
							<td>
								<label for="confirm_password">Confirm password:</label>		
							</td>
							<td>
								<input type="password" name="confirm_password" id="confirm_password"
								value = "<?php if(isset($_SESSION["confirm_password"])) { echo $_SESSION["confirm_password"]; }?>">
							</td>
						</tr>
						<tr>
						<td></td>
						<td>
							<?php 
							displayErrors("confirm_password");	 
							?>
						</td>					
						</tr>
					</tbody>
				</table>
				<?php displayErrors("register");?>
				<input type="submit" name="submit" class="btn" value="Register">
				<!-- <button class="btn">Register</button> -->
			</form>
				<p>Already have an account?</p>
				<p style=" margin-top: 4px"> <a href="login.php" style="text-decoration: none; color: #16a596;">Log in</a></p>
		</div>
	</main>
	<?php 
		unset($_SESSION["errors"]);
	?>
</body>
</html>