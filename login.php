<?php

// Initialize the session
session_start();

if (isset($_SESSION['username'])) {
    header("location: index.php");
    exit;
}

// Include config file
require_once 'includes/config.php';
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
// Processing form data when form is submitted

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = 'Please enter username.';
    } else {
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST['password']))) {
        $password_err = 'Please enter your password.';
    } else {
        $password = trim($_POST['password']);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT username, password FROM users WHERE username = ?";
        if ($stmt = $connect->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            // Set parameters
            $param_username = $username;
            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Store result
                $stmt->store_result();
                // Check if username exists, if yes then verify password
                if ($stmt->num_rows == 1) {
                    // Bind result variables
                    $stmt->bind_result($username, $hashed_password);
                    if ($stmt->fetch()) {
                        if (password_verify($password, $hashed_password)) {
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['username'] = $username;
                            header("location: index.php");
                        } else {
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
                        }
                    }
                } else {
                    // Display an error message if username doesn't exist
                    $username_err = 'No account found with that username.';
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        // Close statement
        $stmt->close();
    }
    // Close connection
    $connect->close();
}

require_once "includes/html-head.php";

?>

    <body>
        <?php
require_once "includes/navbar.php";
?>

            <h2>Login</h2>

            <p>Please fill in your credentials to login.</p>

            <form action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]); ?>" method="post">

                <div class="<?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">

                    <label>Username</label>

                    <input type="text" name="username" value="<?php echo $username; ?>">

                    <span>
                        <?php echo $username_err; ?>
                    </span>

                </div>

                <div class="<?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">

                    <label>Password</label>

                    <input type="password" name="password">

                    <span>
                        <?php echo $password_err; ?>
                    </span>

                </div>

                <div>

                    <input type="submit" value="Login">

                </div>

                <p>Don't have an account?
                    <a href="register.php">Sign up now</a>.</p>

            </form>

    </body>

    </html>