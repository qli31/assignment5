<?php

// Initialize the session
session_start();

require_once "includes/html-head.php";

?>

	<div class="hero">
			<img src="images/background.jpg" alt="Pizza Background">
	</div>

	<body class="z-pattern">

		<header>
			
			<div class="primary">
				<!-- Primary Optical Area -->
				<a href="index.php">
				<img src="images/pizza_logo.png" alt="Pizza logo">
				</a>
			</div>
			<div class="strong">
				<!-- Strong Follow Area -->
				<p>Get a free pizza for 1 Min Survey! Yummy! </p>
			</div>
			
		</header>

		<main>
			<div class="center">
				<h1>Pizza~</h1>
				<p> There is no better feeling than a warm pizza box on your lap!</p>
			</div>
		</main>

		<footer>
			
			<div class="weak">
				<!-- Weak Visual Area -->
				<p>Let us know  you think about pizza!</p>
			</div>
			<div class="terminal">
				<!-- Terminal Area -->
				<a href="survey.php">Fill in the survey to win free pizza!</a>
			</div>
		
		</footer>

	</body>

</html>