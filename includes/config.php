<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'urcscon3_zabaziz');
define('DB_PASSWORD', 'zabaziz1');
define('DB_NAME', 'urcscon3_zabaziz');

/* Connect to MySQL database */
$connect = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if (!$connect) {
    die("ERROR: Connection f. " . $mysqli->connect_error);
}
