<?php
    class FailedLoginLog {
        private $writeFilePath;
        private $readFilePath;

        function __construct() {
            $this->writeFilePath = "../login_error.txt";
            $this->readFilePath = "login_error.txt";
        }

        function writeToFile($email, $time, $ipAddress) {
            $fp = fopen($this->writeFilePath, 'a');
            fwrite($fp, 'User ' . $email . ' with IP Address ' . $ipAddress . ' attempted to log in at this time ' . $time."\n");
            fclose($fp);
        }

        function readFile() {
            if (!file_exists($this->readFilePath)) {
                throw new Exception("There are no failed attempted logins.");
            }
            return explode("\n", file_get_contents($this->readFilePath));
        }

       /* function get_writeFilePath() {
            return $this->writeFilePath;
        }

        function set_writeFilePath($writeFilePath) {
            $this->writeFilePath = $writeFilePath;
        }

        function get_readFilePath() {
            return $this->readFilePath;
        }

        function set_readFilePath($readFilePath) {
            $this->readFilePath = $readFilePath;
        }*/
    }
?>
