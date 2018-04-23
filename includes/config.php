<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'urcscon3_medell');
define('DB_PASSWORD', 'coffee1N');
define('DB_NAME', 'urcscon3_medell');

/* Connect to MySQL database */
$connect = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if (!$connect) {
    die("ERROR: Connection f. " . $mysqli->connect_error);
}
