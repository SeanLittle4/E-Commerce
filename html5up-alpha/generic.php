<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
	$uberPrice = 1000;
	$lyftPrice = 2000;
?>
<html>
<?php
	//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
	require("vendor/PHPMailer/PHPMailer/src/PHPMailer.php");
	require("vendor/PHPMailer/PHPMailer/src/SMTP.php");
	require("vendor/PHPMailer/PHPMailer/src/Exception.php");
	require("vendor/PHPMailer/PHPMailer/src/OAuth.php");
	require("vendor/PHPMailer/PHPMailer/src/POP3.php");

	    //Create a new PHPMailer instance
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
//echo getcwd();
	$msg = '';
//Don't run this unless we're handling a form submission
try{
if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');
    //require '../PHPMailerAutoload.php';
    
	//CUT HERE

    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    //$mail->Host = 'localhost';
    //$mail->Port = 25;
    //https://stackoverflow.com/questions/28906487/fatal-e
    $mail->SMTPDebug = 4;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->Username = 'pantheon.funding@gmail.com';
    $mail->Password = 'ecommercepantheon';
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('pantheon.funding@gmail.com', 'Pantheon Funding');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('pantheon.funding@gmail.com', 'Pantheon Funding');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = $_POST['subject'];
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
		Email: {$_POST['email']}
		Name: {$_POST['name']}
		Message: {$_POST['message']}
EOT;
        //Send the message, check for errors
	        if (!$mail->send()) {
	            //The reason for failing to send will be in $mail->ErrorInfo
	            //but you shouldn't display errors to users - process the error, log it on your server.
	            $msg = 'Sorry, something went wrong. Please try again later.';
	        } else {
	            $msg = 'Message sent! Thanks for contacting us.';
	        }
	    } else {
	        $msg = 'Invalid email address, message ignored.';
	    }
	}
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?>

	<head>
		<title>Marketplace</title>
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
							<li><a href="about_us.html">About Us</a></li> 
							<li><a href="SignUp.php" class="button">Sign Up</a>
							<li><a href="login.html" class="button">Log In</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container">
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

									?>
					<header>
						<h2>Marketplace</h2>
						<p>Welcome to the crowdsourced debtfunding marketplace!</p>
					</header>
					<div class="box">
						<span class="image featured"><img src="images/mkt.jpg" alt="" /></span>
						<h3>Listings</h3>
						<p>Looking for your next investment opportunity? Invest in crowdsourced debt! Pick a company and a bond below!</p>
						<div class="row">
							<div class="6u 12u(mobilep)">
								<a href="uber.com"><h3 align="left">Uber</h3></a>
								<img src="images/uber.jpg" height=80 align="right" />	
								<p>Uber is a p2p ridesharing, food delivery, and transportation company based in SF, CA. It operates in 633 cities worldwide.</p>
								<h4><b>8% 5 year <?php echo $uberRate ?> BTC loan, equivalent to $10,000 USD</b></h4>
								<form action="https://test.bitpay.com/checkout" method="post" >
  <input type="hidden" name="action" value="checkout" />
  <input type="hidden" name="posData" value="" />
  <input type="hidden" name="data" value="7/f26+/YTFW63Wx80y4/Fwf20/euwD6aqyriMrLnrthJWycyVMO0DJc7mIKmq4RYLzC214QejA2tnQLtf5BYQCt9KMEMdYhx9ePLuG2sf5HfHuRprnqAG9mXhfNpTbI37TrMJ2AeeXH2iXNmb/6Zm1FdzwAJou+HWg0J5l6cviXXftvv44FUQUMbFNoZuE0vmOka6UpDoq+oYLE5JTLdtX2xF3avbk4JdVn29p6cgdCWxa2WnnAFSSsB3taDcGFp" />
  <input type="image" src="https://test.bitpay.com/img/button-large.png" border="0" name="submit" alt="BitPay, the easy way to pay with bitcoins." >
</form>
							</div>
							<div class="6u 12u(mobilep)">
								<a href="Lyft.com"><h3>Lyft</h3></a>
								<img src="images/lyft.png" height=80 align="right" />
								<p>Lyft is an on-demand transportation company based in SF, CA. It develops, markets, and operates the Lyft car transportation mobile app.</p>
								<h4><b>10% 5 year <?php echo $lyftRate ?> BTC loan, equivalent to $15,000 USD</b></h4>
								<form action="https://test.bitpay.com/checkout" method="post" >
  <input type="hidden" name="action" value="checkout" />
  <input type="hidden" name="posData" value="" />
  <input type="hidden" name="data" value="7/f26+/YTFW63Wx80y4/Fwf20/euwD6aqyriMrLnrthJWycyVMO0DJc7mIKmq4RYwCF01qKNYfIRA7gYf2B8+wsfbqu9+YDwNbkUEO3XKcLNvudE514WKWdu+XK/RNHSginALdpU58wXt6yd2RSCBepVnvnsp+IyP9PUJHR6V2CQ7F8ddQFaO1BPwL6XC7etqCjbDzaUh9qu4SyINFvPQJDnEVVv7BC9g227vfNH8mvRPZ4czfj/b1O55hHtJKty" />
  <input type="image" src="https://test.bitpay.com/img/button-large.png" border="0" name="submit" alt="BitPay, the easy way to pay with bitcoins." >
</form>
							</div>
						</div>
					</div>
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