<?php

// Initialize the session
session_start();

require_once "includes/html-head.php";

?>

<body>
    <?php
require_once "includes/navbar.php";

if (isset($_SESSION['username'])) {
    echo "<h1>Hello, " . $_SESSION['username'] . "!</h1>";
}
?>



</body>
</html>