<?php
//Connecting to sql db.
$connect = mysqli_connect("localhost","root","","customerInfo");
//Pasword input by user in form. Hashed with MD5 to do comparison
$secret = md5('$_POST[psw]'); 
//Using Email to get password because email is uniqe
$sql = "SELECT * FROM custInfo WHERE Email LIKE '$_POST[uname]';";
$result = mysqli_query($connect, $sql);
//If email is in database
echo mysqli_num_rows($result) . "<br>";
if(mysqli_num_rows($result) != 0) {
	$row = $result->fetch_assoc();
	echo md5('$_POST[psw]');
	echo $row["Password"] . "<br>";
	echo $secret;
    if($secret == $row["Password"]) {
    	//Not quite sure if I'm doing this part right. Trying to start a session which stores a cookie on the user's computer.
    	//session_start();
    	//$_SESSION['login_user'] = $row["Name"];
    	echo "User name is " . $_SESSION['login_user'];
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

}
?>