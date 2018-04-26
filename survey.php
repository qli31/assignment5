<?php

// Initialize the session
session_start();

// Include config file
require_once "includes/config.php";

// Define variables and initialize with empty values
$name = $email = $frequency = $favorite = "";
$name_err = $email_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Name & email not empty
    if (empty(trim($_POST["name"]))) {
        $name_err = "Please enter your name.";
    }

    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email.";
    }

    //Other fields
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $frequency = trim($_POST['frequency']);
    $favorite = trim($_POST['favorite']);

    // Set parameters
    $param_name = $name;
    $param_email = $email;
    $param_frequency = $frequency;
    $param_favorite = $favorite;

    // Check input errors before inserting in database
    if (empty($name_err) && empty($email_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO survey (name, email, frequency, favorite) VALUES (?, ?, ?, ?)";
        if ($stmt = $connect->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssss", $param_name, $param_email, $param_frequency, $param_favorite);
            // Set parameters
            $param_name = $name;
            $param_email = $email;
            $param_frequency = $frequency;
            $param_favorite = $favorite;

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Redirect to thank you page
                header("location: thanks.php");
            } else {
                echo "Something went wrong. Please try again later.";
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

		<div class="container">

			<h1>Yummy Pizza, Yummy Survey!</h1>

			<form action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]); ?>" method="POST">

				<div class="nameArea">
					<label for="name">Name: </label>
					<input type="text" name="name" id="name">
				</div>

				<div class="emailArea">
					<label for="email">Email: </label>
					<input type="email" name="email" id="email">
				</div>

				<div class="frequencyArea">
					<label>How often do you eat pizza?</label>
					<input type="radio" name="frequency" id="daily" value="daily">
					<label for="daily">Daily</label>
					<input type="radio" name="frequency" id="weekly" value="weekly">
					<label for="weekly">Weekly</label>
					<input type="radio" name="frequency" id="biweekly" value="biweekly">
					<label for="biweekly">Bi-Weekly</label>
					<input type="radio" name="frequency" id="monthly" value="monthly">
					<label for="monthly">Monthly</label>
				</div>

				<div class="favoriteArea">
					<label for="favorite">What's your favorite type of pizza?</label>
					<input type="text" name="favorite" id="favorite">
				</div>

				<input type="submit" name="submit" id="submit" value="submit">

			</form>
		</div>

	</body>

	</html>