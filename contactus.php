<?php
	session_start();
?>
<?php
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$mobile=$_POST['mob'];
	$message=$_POST['message'];
	require 'db.php';

	$sql = "INSERT INTO contact (first_name,last_name,email,Mobile,message)
			VALUES ('$fname', '$lname', '$email','$mobile','$message');";
	$enquiry=mysql_query($sql);
	header("location:index.html");
?>