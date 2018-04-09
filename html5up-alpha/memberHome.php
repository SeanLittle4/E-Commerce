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
<?php
	$uberPrice = 1000;
	$lyftPrice = 2000;
	$blueApronPrice = 500;
	$helloFreshPrice = 250;
?>
<html>
	<head>
		<title>Member Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	
	<?php
	if($_SESSION["active"] != true) {
		?>
		<body>
			<header>
				<h2>Sign Up or Login First</h2>
			</header>
		</body>
	<?php
	}
	else {
	?>

	<body>
		<div id="page-wrapper">

			<!-- Header -->
			<?php
										/**
										 * Copyright (c) 2014-2015 BitPay
										 */
										require __DIR__ . '/vendor/autoload.php';
										$client = new \Bitpay\Client\Client();
										$client->setAdapter(new \Bitpay\Client\Adapter\CurlAdapter());
										$client->setNetwork(new \Bitpay\Network\Testnet());
										$request = new \Bitpay\Client\Request();
										$request->setHost('test.bitpay.com');
										$request->setMethod(\Bitpay\Client\Request::METHOD_GET);
										$request->setPath('rates/USD');
										$response = $client->sendRequest($request);
										$data = json_decode($response->getBody(), true);
										$bitCoinRate = $data['data']['rate'];
										$uberRate = $uberPrice/$bitCoinRate;
										$lyftRate = $lyftPrice/$bitCoinRate;
										$blueApronRate = $blueApronPrice/$bitCoinRate;
										$helloFreshRate = $helloFreshPrice/$bitCoinRate;
									?>
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


			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>Welcome Back to Pantheon</h2>
						<p>Ready to fund another idea?</p>
					</header>
					<div class="row">
						<div class="12u">

							<!-- Text -->
								<section class="box">
									<h3>Take me to the marketplace</h3>
									<p>We always have a wonderful selection of <b>new</b> listings from <strong>top</strong> companies. Find something new right now!</p>
									<span class="image featured"><img src="images/upward_stocks.jpg" alt="" /></span>
									
									<div class="row">
							<div class="6u 12u(mobilep)">
								<a href="https://www.uber.com/"><h3 align="left">Uber</h3></a>
								<img src="images/uber.jpg" height=80 align="right" />	
								<p>Uber is a p2p ridesharing, food delivery, and transportation company based in SF, CA. It operates in 633 cities worldwide.</p>
								<h4><b>8% 5 year <?php echo $uberRate ?> BTC loan, equivalent to $1,000 USD</b></h4>
								<form action="https://test.bitpay.com/checkout" method="post" >
  <input type="hidden" name="action" value="checkout" />
  <input type="hidden" name="posData" value="" />
  <input type="hidden" name="data" value="7/f26+/YTFW63Wx80y4/Fwf20/euwD6aqyriMrLnrthJWycyVMO0DJc7mIKmq4RYLzC214QejA2tnQLtf5BYQCt9KMEMdYhx9ePLuG2sf5HfHuRprnqAG9mXhfNpTbI37TrMJ2AeeXH2iXNmb/6Zm1FdzwAJou+HWg0J5l6cviXXftvv44FUQUMbFNoZuE0vmOka6UpDoq+oYLE5JTLdtX2xF3avbk4JdVn29p6cgdCWxa2WnnAFSSsB3taDcGFp" />
  <input type="image" src="https://test.bitpay.com/img/button-large.png" border="0" name="submit" alt="BitPay, the easy way to pay with bitcoins." >
</form>
							</div>
							<div class="6u 12u(mobilep)">
								<a href="https://www.lyft.com/"><h3>Lyft</h3></a>
								<img src="images/lyft.png" height=80 align="right" />
								<p>Lyft is an on-demand transportation company based in SF, CA. It develops, markets, and operates the Lyft car transportation mobile app.</p>
								<h4><b>10% 5 year <?php echo $lyftRate ?> BTC loan, equivalent to $2,000 USD</b></h4>
								<form action="https://test.bitpay.com/checkout" method="post" >
  <input type="hidden" name="action" value="checkout" />
  <input type="hidden" name="posData" value="" />
  <input type="hidden" name="data" value="7/f26+/YTFW63Wx80y4/Fwf20/euwD6aqyriMrLnrthJWycyVMO0DJc7mIKmq4RYwCF01qKNYfIRA7gYf2B8+wsfbqu9+YDwNbkUEO3XKcLNvudE514WKWdu+XK/RNHSginALdpU58wXt6yd2RSCBepVnvnsp+IyP9PUJHR6V2CQ7F8ddQFaO1BPwL6XC7etqCjbDzaUh9qu4SyINFvPQJDnEVVv7BC9g227vfNH8mvRPZ4czfj/b1O55hHtJKty" />
  <input type="image" src="https://test.bitpay.com/img/button-large.png" border="0" name="submit" alt="BitPay, the easy way to pay with bitcoins." >
</form>
							</div>
						</div>
					</div>
									<span> <a class='button' href='generic.php'>Marketplace</a></span>
								</section>

						</div>
					</div>
					<div class="row">
						<div class="12u">
							
							<!-- Form -->
								<section class="box">
									<h3>Refer a Friend</h3>
									<p>Get 0.02 bitcoin <b>on us</b> to invest on Pantheon when they sign up!</p>
									<form method="post" action="#">
										<div class="row uniform 50%">
											<div class="6u 12u(mobilep)">
												<input type="text" name="name" id="name" value="" placeholder="Name" />
											</div>
											<div class="6u 12u(mobilep)">
												<input type="email" name="email" id="email" value="" placeholder="Email" />
											</div>
										</div>
										<div class="row uniform 50%">
											<div class="12u">
												<div class="select-wrapper">
													<select name="Interested Industries" id="category">
														<option value="">- Interested Industries -</option>
														<option value="1">Technology</option>
														<option value="1">Finance</option>
														<option value="1">Energy</option>
														<option value="1">Healthcare</option>
													</select>
												</div>
											</div>
										</div>
										
										<div class="row uniform 50%">
											<div class="6u 12u(narrower)">
												<input type="checkbox" id="human" name="human" unchecked>
												<label for="human">I am a human and not a robot</label>
											</div>
										</div>
										<div class="row uniform 50%">
											<div class="12u">
												<textarea name="message" id="message" placeholder="Anything else you want to tell us about your friend?" rows="6"></textarea>
											</div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" value="Refer My Friend" /></li>
													<li><input type="reset" value="Reset" class="alt" /></li>
												</ul>
											</div>
										</div>
									</form>
									<hr />
								</section>
						</div>
					</div>
					

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
	<?php }
	?>
</html>