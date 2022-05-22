<?php
session_start();
if (!isset($_SESSION["logged_in"]) || (isset($_SESSION["role_id"]) && $_SESSION["role_id"] == "2")) {
    exit("<h1>401 Unauthorized Access</h1>");
}
include("login_error_log/FailedLoginLog.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="css/failed_login_log.css"
    <title></title>
</head>
<body>
    <h1>Failed Login Attempts Log</h1>
    <div class="content">
        <?php
            $reader = new FailedLoginLog();
            try {
                $failedAttempts = $reader->readFile();

                foreach ($failedAttempts as $attempt) {
                    if (!empty($attempt)) {
                        echo "<p>$attempt</p>";
                    }
                }
            }
            catch(Exception $e) {
                echo $e->getMessage();
            }
        ?>
    </div>
</body>
</html>