<div class="logo">
    <a href="index.php">
        <img src="images/pizza_logo.png" alt="Pizza logo">
    </a>
</div>

<nav class="menu">
    <ul>
        <li>
            <a href="survey.php">Survey</a>
        </li>
        <?php
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    echo "
        <li>
            <a href='login.php'>Login</a>
        </li>
        <li>
            <a href='register.php'>Register</a>
        </li>
        ";
} else {
    echo "
    <li>
    <a href='admin_data.php'>Admin</a>
</li>
<li>
    <a href='logout.php'>Logout</a>
</li>
    ";
}
?>
    </ul>
</nav>