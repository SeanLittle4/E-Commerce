<script type="text/javascript">
			function validateForm() {
				alert("header");
				var a = document.forms['signUp']['Name'].value;
				var b = document.forms['signUp']['Email'].value;
				var c = document.forms['signUp']['Address'].value;
				var d = document.forms['signUp']['City'].value;
				var e = document.forms['signUp']['Zip'].value;
				var f = document.forms['signUp']['psw'].value;
				var g = document.forms['signUp']['psw-repeat'].value;

				if(a=='' || b=='' ||c=='' ||d=='' ||e=='' ||f=='' ||g=='') {
					alert('Please fill out all fields of the sign up form');
					return false;
				}
				var forbidden_names = '~`!@#$%^&*()_+=<>,.?/:;'[]{}0123456789'';
				var email_must = '@.';
				for(var k = 0; k < forbidden_names.length; k++) {
					if (a.includes(forbidden_names.charAt(k))) {
						alert('Please Enter a Valid Name');
						return false;
					}
				}
				for (var i = email_must.length - 1; i >= 0; i--) {
					if(!b.includes(email_must.charAt(i))) {
						alert('Please Enter a Valid Email Address');
						return false;
					}
				}
				if (typeOf(e) != 'number') {
					alert('Please Enter a Valid Zip Code');
					return false;
				}
				if(f != g) {
					alert('Passwords must match!');
					return false;
				}
				return true;
			}
			</script>

<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Sign Up</title>
		<meta charset='utf-8' />
		<meta name='viewport' content='width=device-width, initial-scale=1' />
		<!--[if lte IE 8]><script src='assets/js/ie/html5shiv.js'></script><![endif]-->
		<link rel='stylesheet' href='assets/css/main.css' />
		<!--[if lte IE 8]><link rel='stylesheet' href='assets/css/ie8.css' /><![endif]-->
	</head>
	<body>
		<div id='page-wrapper'>

			<!-- Header -->
				<header id='header'>
					<h1><a href='index.html'><img src='images/pantheon.png' style = 'height: 100%' ></a></h1>
					<nav id='nav'>
						<ul>
							<li><a href='index.html'>Home</a></li>
							<li><a href="generic.php">Marketplace</a>
							<li><a href="contact.php">Contact</a></li>
							<li><a href='about_us.html'>About Us</a></li> <!-- change to about us.html when uploaded-->
							<li><a href='SignUp.php' class='button'>Sign Up</a>
							<li><a href='login.php' class='button'>Log In</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id='main' class='container 75%'>
					<header>
						<h2>Sign Up With Pantheon</h2>
						
					</header>
						<form name = 'signUp' method='POST' action="send_sign_up.php" href='generic.php'>
  								<div class='box'>
    							<h1> Sign Up</h1>
    							<p> Please fill in this form to create an account.</p>
    							<hr>	
    						<label><b>Name</b></label>
    							<input type='text' placeholder='Enter Your Name' name='Name' pattern="^([A-Za-z]+[,.]?[ ]?|[A-Za-z]+['-]?)+$" title = "Enter a valid name" required>

    						<label><b>Email</b></label>
    							<input type='text' placeholder='Enter Email' name='Email' pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" title="Enter a valid email address" required>

    						<label><b>Address</b></label>
    							<input type='text' placeholder='Enter Address' name='Address' required>

    						<label><b>City</b></label>
    							<input type='text' placeholder='Enter Your City' name='City' pattern="^([A-Za-z]+[,.]?[ ]?|[A-Za-z]+['-]?)+$" title="Enter a valid city" required>

    						<label><b>State</b></label>
								<select type = 'text' placeholder = 'Pick an Option' name='State' id='State' required>
														<option value='AL'>Alabama</option>
														<option value='AK'>Alaska</option>
														<option value='AZ'>Arizona</option>
														<option value='AR'>Arkansas</option>
														<option value='CA'>California</option>
														<option value='CO'>Colorado</option>
														<option value='CT'>Connecticut</option>
														<option value='DE'>Delaware</option>
														<option value='DC'>District Of Columbia</option>
														<option value='FL'>Florida</option>
														<option value='GA'>Georgia</option>
														<option value='HI'>Hawaii</option>
														<option value='ID'>Idaho</option>
														<option value='IL'>Illinois</option>
														<option value='IN'>Indiana</option>
														<option value='IA'>Iowa</option>
														<option value='KS'>Kansas</option>
														<option value='KY'>Kentucky</option>
														<option value='LA'>Louisiana</option>
														<option value='ME'>Maine</option>
														<option value='MD'>Maryland</option>
														<option value='MA'>Massachusetts</option>
														<option value='MI'>Michigan</option>
														<option value='MN'>Minnesota</option>
														<option value='MS'>Mississippi</option>
														<option value='MO'>Missouri</option>
														<option value='MT'>Montana</option>
														<option value='NE'>Nebraska</option>
														<option value='NV'>Nevada</option>
														<option value='NH'>New Hampshire</option>
														<option value='NJ'>New Jersey</option>
														<option value='NM'>New Mexico</option>
														<option value='NY'>New York</option>
														<option value='NC'>North Carolina</option>
														<option value='ND'>North Dakota</option>
														<option value='OH'>Ohio</option>
														<option value='OK'>Oklahoma</option>
														<option value='OR'>Oregon</option>
														<option value='PA'>Pennsylvania</option>
														<option value='RI'>Rhode Island</option>
														<option value='SC'>South Carolina</option>
														<option value='SD'>South Dakota</option>
														<option value='TN'>Tennessee</option>
														<option value='TX'>Texas</option>
														<option value='UT'>Utah</option>
														<option value='VT'>Vermont</option>
														<option value='VA'>Virginia</option>
														<option value='WA'>Washington</option>
														<option value='WV'>West Virginia</option>
														<option value='WI'>Wisconsin</option>
														<option value='WY'>Wyoming</option>
													</select>
    						<label><b>Zip Code</b></label>
    							<input type='text' placeholder='Enter Your Zip Code' name='Zip' pattern="[0-9]{5}" title="Enter a valid zip code" required>

    						<label><b>Password</b></label>
    							<input type='password' placeholder='Enter Password' name='Psw' required>

    						<p>By creating an account you agree to our <a href='#' style='color:dodgerblue'>Terms & Privacy</a>.</p>

    						<div class='clearfix'>
      						<button type='button' class='cancelbtn'>Cancel
      						</button>
      						<button type='submit' id='start' class='signupbtn'>Sign Up</button>
    						</div>
  							</div>
  							<span> <a class='button' href='login.html'>Log In</a></span>
						</form>
				</section>
				
			<!-- Footer -->
				<footer id='footer'>
					<ul class='icons'>
						<li><a href='#' class='icon fa-twitter'><span class='label'>Twitter</span></a></li>
						<li><a href='#' class='icon fa-facebook'><span class='label'>Facebook</span></a></li>
						<li><a href='#' class='icon fa-instagram'><span class='label'>Instagram</span></a></li>
						<li><a href='#' class='icon fa-github'><span class='label'>Github</span></a></li>
						<li><a href='#' class='icon fa-dribbble'><span class='label'>Dribbble</span></a></li>
						<li><a href='#' class='icon fa-google-plus'><span class='label'>Google+</span></a></li>
					</ul>
					<ul class='copyright'>
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href='http://html5up.net'>HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src='assets/js/jquery.min.js'></script>
			<script src='assets/js/jquery.dropotron.min.js'></script>
			<script src='assets/js/jquery.scrollgress.min.js'></script>
			<script src='assets/js/skel.min.js'></script>
			<script src='assets/js/util.js'></script>
			<!--[if lte IE 8]><script src='assets/js/ie/respond.min.js'></script><![endif]-->
			<script src='assets/js/main.js'></script>
			<!--Form Validation Script-->
			
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