<?php
session_start();
$user=$_GET["name"];
$pass=$_GET["pass"];
$_SESSION["username"]=$user;

$valid=mysql_connect("localhost","root","");
mysql_select_db("base",$valid);
$query="select * from game where user='".$user."' and password='".$pass."'";
$result=mysql_query($query);

$count=mysql_num_rows($result);

if ($count==1){
	$_SESSION['username'] = $user;
	echo"login successful";
        header("location: homepage.php");
	
	      }
else {
	
	header("location: register.html");
     }

?>
?>