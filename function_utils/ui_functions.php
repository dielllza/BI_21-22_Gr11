<?php 
    function displayErrors($errorName) {
        if (isset($_SESSION["errors"]) && isset($_SESSION["errors"][$errorName]))
        {
            foreach($_SESSION["errors"][$errorName] as $error)
            {
                echo '<p style="color: red; font-size: 12px; font-family: sans-serif;">'. $error. "</p>";
            }
        }		 
    }
?>