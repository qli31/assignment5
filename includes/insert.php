<?php
require_once "config.php";
$sql = "INSERT INTO survey(name, email, frequency, favorite) VALUES('" . $_POST["name"] . "', '" . $_POST["email"] . $_POST["frequency"] . "', '" . $_POST["favorite"] . "')";
if (mysqli_query($connect, $sql)) {
    echo 'Data Inserted';
}
