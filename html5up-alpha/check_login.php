<?php
//Connecting to sql db.
$connect = mysqli_connect("localhost","root","","customerInfo");
//Pasword input by user in form. Hashed with MD5 to do comparison 
$secret = md5($_POST['login_password']);
//Using Email to get password because email is uniqe
$sql = "SELECT * FROM custInfo WHERE Email LIKE '$_POST[uname]';";
$result = mysqli_query($connect, $sql);
//If email is in database
if(mysqli_num_rows($result) != 0) {
	$row = $result->fetch_assoc();
    if($secret == $row["Password"]) {
    	session_start();
    	$_SESSION['email'] = $_POST['uname'];
    	$_SESSION['active'] = true;

    	echo "<script >
			window.location.href='memberHome.php';
			</script>";

	} else {
		$message = "Your email or password is incorrect";
		echo "<script type = 'text/javascript'> alert('$message');
		window.location.href='login.php';
		</script>";
	}
} else {
	$message = "Your email or password is incorrect";

	echo "<script type = 'text/javascript'> alert('$message');
	window.location.href='login.php';
	</script>";
}


?>