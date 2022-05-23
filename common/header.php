<?php
session_start();
?>
<header>
        <a href="index.php">
            <div class="header-title">
                <h1>App Agency</h1>
                <h4>Agjenci e aplikacioneve</h4>
            </div>
        </a>
        <nav>
        <?php if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) :?>
            <ul>
                <li> <span style="color:white"><a href="../user_profile.php"><?php echo " ". $_SESSION["first_name"] .""?></span></li>
                <li><a href="form_processor_services/processs_logout.php" style="color:white;">Logout</a>  </li>
            </ul>
        <?php else : ?>
            <ul>
                <li><a href = "login.php"> Login </a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        <?php endif; ?>
        </nav>
        <nav>

        </nav>
        <nav>
            <ul>
                <li><a href="projects.php">Projektet</a></li>
                <li><a href="#">Shërbimet</a></li>
                <li><a href="#">Procesi</a></li>
                <li><a href="about.php">Për Ne</a></li>
                <li><a href="contact.php">Kontakt</a></li>
            </ul>
        </nav>
        </header>
