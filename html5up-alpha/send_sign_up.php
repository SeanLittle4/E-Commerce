<?php
//Connecting to sql db.
$connect = mysqli_connect("localhost","root","","customerInfo");
//Sending form data to sql db.
$secret = md5('$_POST[Psw]');
//$unique = $_POST[Email];
$sql = "SELECT * FROM custInfo WHERE Email LIKE '$_POST[Email]';";
$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result) == 0) {
mysqli_query($connect,"INSERT INTO custInfo (Name, Email, Address, City, State, Zip, Password)
VALUES ('$_POST[Name]', '$_POST[Email]', '$_POST[Address]', '$_POST[City]', '$_POST[State]', '$_POST[Zip]', '$secret')");
}
else {
	$message = "Email (Your Username) already in use";

	echo "<script type = 'text/javascript'> alert('$message');
window.location.href='SignUp.php';
</script>";

}
?>