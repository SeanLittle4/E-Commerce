<?php
//Connecting to sql db.
$connect = mysqli_connect("localhost","root","","customerInfo");
//Sending form data to sql db.
mysqli_query($connect,"INSERT INTO custInfo (Name, Email, Address, City, State, Zip, Password)
VALUES ('$_POST[Name]', '$_POST[Email]', '$_POST[Address]', '$_POST[City]', '$_POST[State]',, '$_POST[Zip]', '$_POST[Password]')";
?>