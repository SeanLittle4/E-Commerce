<?php
//Connecting to sql db.
$connect = mysqli_connect("localhost","root","","customerInfo");
//Sending form data to sql db.
$secret = md5($_POST['Psw']);
$sql = "SELECT * FROM custInfo WHERE Email LIKE '$_POST[Email]';";
$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result) == 0) {
mysqli_query($connect,"INSERT INTO custInfo (Name, Email, Address, City, State, Zip, Password)
VALUES ('$_POST[Name]', '$_POST[Email]', '$_POST[Address]', '$_POST[City]', '$_POST[State]', '$_POST[Zip]', '$secret')");
echo "<script type = 'text/javascript'> window.location.href='generic.php';
</script>";
}
else {
	$message = "Email (Your Username) already in use";

	echo "<script type = 'text/javascript'> alert('$message');
window.location.href='SignUp.php';
</script>";

}
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
if (array_key_exists('Email', $_POST)) {
    date_default_timezone_set('Etc/UTC');
    //require '../PHPMailerAutoload.php';
    
	//CUT HERE

    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    //$mail->Host = 'localhost';
    //$mail->Port = 25;
    //https://stackoverflow.com/questions/28906487/fatal-e
    //$mail->SMTPDebug = 4;
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
    $mail->addAddress($_POST['Email'], $_POST['Name']);
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['Email'], $_POST['Name'])) {
        $mail->Subject = 'Welcome';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
		'Welcome to Pantheon!'
EOT;
        //Send the message, check for errors
	        if (!$mail->send()) {
	            //The reason for failing to send will be in $mail->ErrorInfo
	            //but you shouldn't display errors to users - process the error, log it on your server.
	            $msg = 'Sorry, something went wrong. Please try again later.';
	        } else {
	            $msg = 'Thank you! You should have recieved a welcome message from us.';
	        }
	    } else {
	        $msg = 'Invalid address, message ignored.';
	    }
	}
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


?>