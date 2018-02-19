<?php
//Connecting to sql db.
$connect = mysqli_connect("localhost","root","","customerInfo");
//Sending form data to sql db.
mysqli_query($connect,"INSERT INTO custInfo (Name, Email, Address, City, State, Zip, Password)
VALUES ('$_SIGNUP[Name]', '$_SIGNUP[Email]', '$_SIGNUP[Address]', '$_SIGNUP[City]', '$_SIGNUP[State]',, '$_SIGNUP[Zip]', '$_SIGNUP[Password]')";

VALUES ('$_POST[post_cat<?php')



//Connecting to sql db.
$connect = mysqli_connect("my host","my user","my passwrod","my db");
//Sending form data to sql db.
mysqli_query($connect,"INSERT INTO posts (category, title, contents, tags)

?>egory]', '$_POST[post_title]', '$_POST[post_contents]', '$_POST[post_tags]')";
?>