<?php
require_once "config.php";
$sql = "INSERT INTO survey(first_name, last_name) VALUES('" . $_POST["first_name"] . "', '" . $_POST["last_name"] . "')";
if (mysqli_query($connect, $sql)) {
    echo 'Data Inserted';
}
