<?php 
	session_start(); 
	if(isset($_SESSION['active'])) {

	} else {
		$_SESSION['active'] = false;
	}
?>

<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Pantheon</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="index.php"><img src="images/pantheon.png" style = "height: 100%" ></a></h1>
					<nav id="nav">
						<?php
							if($_SESSION["active"] == true) {
						?>
						<ul>
							<li><a href="memberHome.php">Home</a></li>
							<li><a href="generic.php">Marketplace</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="about_us.php">About Us</a></li>
							<li><a href="logout.php" class="button">Log Out</a></li>
						</ul>
						<?php } else { ?>

						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="generic.php">Marketplace</a>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="about_us.php">About Us</a></li> 
							<li><a href="SignUp.php" class="button">Sign Up</a></li>
							<li><a href="login.php" class="button">Log In</a></li>
						</ul>
						<?php }			?>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<h2><img src="images/pantheon.png" height="350" width="800"></h2>
					<p><font size="+3">A Different Way to Invest</font></p>
					<ul class="actions">
						<li><a href="SignUp.html" class="button special">Sign Up</a></li>
						<li><a href="about_us.html" class="button">About Us</a></li>
					</ul>
				</section>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>For the people.
							<br />
							By the people.</h2>
							<p>Pantheon looks to provide sustainable crowdfuning solutions for small business owners and investors<br />
							</p>
						</header>
						<span class="image featured"><iframe width="560" height="315" src="https://www.youtube.com/embed/hIO0KH9JfsE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

					<section class="box special features">
						<div class="features-row">
							<section>
								<span class="icon major fa-bolt accent2"></span>
								<h3>Fast Solutions</h3>
								<p>Pantheon's processing power has the ability to provide rapid solutions to both angel investors as well as small businesses looking to source private bonds.</p>
							</section>
							<section>
								<span class="icon major fa-area-chart accent3"></span>
								<h3>Real Time Updates</h3>
								<p>Our world class communications system will allow investors to monitor the status of their bonds, recieve weekly stakeholder updates, and a way to contact the small businesses directly</p>
							</section>
						</div>
						<div class="features-row">
							<section>
								<span class="icon major fa-cloud accent4"></span>
								<h3>Community Focused</h3>
								<p>We strive to promote businesses in low income, low capital deadzones. Pantheon is dedicated to promoting the small business owner with easy access to the private bond market.</p>
							</section>
							<section>
								<span class="icon major fa-lock accent5"></span>
								<h3>Safe and Secure Investments</h3>
								<p>Pantheon guarantees safer investments than competing equity crowdfunding platforms by offering installment and short term bonds. Recieve a return on your investment before maturity. </p>
							</section>
						</div>
					</section>

					<div class="row">
						<div class="6u 12u(narrower)">

							<section class="box special">
								<span class="image featured"><img src="images/pic02.jpg" alt="" /></span>
								<h3>Sign Up for Pantheon</h3>
								<p></p>
								<ul class="actions">
									<li><a href="SignUp" class="button alt">Sign Up</a></li>
								</ul>
							</section>

						</div>
						<div class="6u 12u(narrower)">

							<section class="box special">
								<span class="image featured"><img src="images/pic03.jpg" alt="" /></span>
								<h3>Learn more about us</h3>
								<p></p>
								<ul class="actions">
									<li><a href="about_us.html" class="button alt">About Us</a></li>
								</ul>
							</section>

						</div>
					</div>

				</section>

			<!-- CTA -->
				<section id="cta">

					<h2>Sign up for our newsletter!</h2>
					<p></p>

					<form>
						<div class="row uniform 50%">
							<div class="8u 12u(mobilep)">
								<input type="email" name="email" id="email" placeholder="Email Address" />
							</div>
							<div class="4u 12u(mobilep)">
								<input type="submit" value="Sign Up" class="fit" />
							</div>
						</div>
					</form>

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
</html>