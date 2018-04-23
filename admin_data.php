<?php

// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header("location: login.php");
    exit;
}

require_once "includes/html-head.php";

?>

<body>
    <?php
require_once "includes/navbar.php";
?>
</body>
</html>