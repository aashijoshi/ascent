<?php
	session_start();
?>

<?php
	$name=$_POST['name'];
	$fname=$_POST['fname'];
	$email=$_POST['email'];
	$mobile=$_POST['number'];
	$gender=$_POST['gender'];
	$course=$_POST['course'];
	require 'db.php';

	$sql = "INSERT INTO enquiry (Name, Father_name,Course,Mobile,Email)
			VALUES ('$name', '$fname', '$course','$mobile','$email');";
	$enquiry=mysql_query($sql);
	
?>