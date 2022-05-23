<?php
include("FailedLoginLog.php");
    class PaginationFailedLogin extends FailedLoginLog {
        private $numLines = -2;

        function readFile() {
            $allRecords = parent::readFile();
            return array_slice($allRecords, -$this->getNumLines() - 1);
        }

        public function getNumLines()
        {
            return $this->numLines;
        }

        public function setNumLines($numLines)
        {
            $this->numLines = $numLines;
        }

        function __destruct() {
            echo "<p><br>No more records to show.</p>";
        }
    }
