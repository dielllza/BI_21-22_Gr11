<?php
include_once("function_utils/ui_functions.php");
include("common/header.php");
include("mysql_connection/mysql_connection.php");

$currentUser = "SELECT * FROM users WHERE id = '$_SESSION[user_id]'";
$currentUser = fetch_record($currentUser);

?>

<!DOCTYPE html>
<html>
<head>
    <title>App Agency | Profile</title>
    <link type="text/css" rel="stylesheet" href="css/common_styling.css">
    <link rel="stylesheet" type="text/css" href="css/user-profile.css">
</head>
<body>
<main>
    <div class="form-content">
        <h1 style="letter-spacing: 1px; font-family: Times New Roman; font-weight: 500;">Your Profile</h1>
        <div class="photo">
            <!-- <h2>Welcome to <a href="index.html" style="text-decoration: none;"><span style="font-family: 'Times New Roman', cursive; color: #2e3f51;">App Creator</span></a></h2>
             <a href="images/login-img.jpg"><img src="images/login-img.jpg"></a>-->
            <img src="images/profile_image.png" width = "100"/>
        </div>
        <form method="post" action="form_processor_services/process_update.php">
            <table>
                <tbody>
                <tr>
                    <td>
                        <label for="first_name">First name:</label>
                    </td>
                    <td>
                        <input type="text" name="first_name" id="first_name"
                               value = "<?php echo $currentUser["first_name"] ?>">
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
                               value = "<?php echo $currentUser["last_name"] ?>">
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
                               value = "<?php echo $currentUser["email_address"] ?>"
                                readonly >
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
                               value = "<?php echo $currentUser["phone_number"] ?>">
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
                               value = "<?php echo $currentUser["birthdate"] ?>">
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
<!--                <tr>-->
<!--                    <td>-->
<!--                        <label for="password">New password:</label>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <input type="password" name="password" id="password"-->
<!--                               value = "">-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td></td>-->
<!--                    <td>-->
<!--                        --><?php
//                            displayErrors("password");
//                        ?>
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>-->
<!--                        <label for="confirm_password">Confirm new password:</label>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <input type="password" name="confirm_password" id="confirm_password"-->
<!--                               value = "">-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td></td>-->
<!--                    <td>-->
<!--                        --><?php
//                        displayErrors("confirm_password");
//                        ?>
<!--                    </td>-->
<!--                </tr>-->
                </tbody>
            </table>
            <?php displayErrors("register");?>
            <input type="submit" name="submit" class="btn" value="Update">
            <!-- <button class="btn">Register</button> -->
        </form>
        <!--<p>Already have an account?</p>
        <p style=" margin-top: 4px"> <a href="login.php" style="text-decoration: none; color: #16a596;">Log in</a></p>-->
    </div>
</main>
<?php
unset($_SESSION["errors"]);
?>

<?php
include("common/footer.php");
?>
</body>
</html>