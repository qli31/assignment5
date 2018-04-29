<?php
require_once "config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$frequency = $_POST['frequency'];
$favorite = $_POST['favorite'];

$sql = "INSERT INTO survey(name, email, frequency, favorite) VALUES('$name', '$email', '$frequency', '$favorite')";
if (mysqli_query($connect, $sql)) {
    echo 'Data Inserted';
}
