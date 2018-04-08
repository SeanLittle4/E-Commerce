<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>
	<head>
		<title>Log In</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="index.html"><img src="images/pantheon.png" style = "height: 100%" ></a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="generic.php">Marketplace</a>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="about_us.html">About Us</a></li> <!-- change to about us.html when uploaded-->
							<li><a href="SignUp.php" class="button">Sign Up</a>
							<li><a href="login.php" class="button">Log In</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container 75%">
					<header>
						<h2>Sign into Pantheon!</h2>
						
					</header>
						<form name = 'login' method='POST' action="check_login.php" href='generic.php'>
  							<div class="box">
    							<label><b>Username</b></label>
    								<input type="text" placeholder="Enter Email" name="uname" required>
								<label><b>Password</b></label>
    								<input type="password" placeholder="Enter Password" name="psw" required>
								<button type="submit">Login</button>
  							</div>
						</form>
						<span> <a class="button" href="SignUp.html">Sign Up</a></span>
					</div> -->
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>

	
<?php
	$link = mysqli_connect('localhost', 'root', '', 'customerInfo');

	if (!$link) {
	    echo 'Error: Unable to connect to MySQL.' . PHP_EOL;
	    echo 'Debugging errno: ' . mysqli_connect_errno() . PHP_EOL;
	    echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	echo 'Success: A proper connection to MySQL was made! The my_db database is great.' . PHP_EOL;
	echo 'Host information: ' . mysqli_get_host_info($link) . PHP_EOL;

	mysqli_close($link);
?>
</html>