<?php
	require('auth.php');
	$username=$_POST['username'];
	require('db.php');
	echo"$username";
	$query="DELETE  FROM `admins` WHERE  username ='".$username."'";
	$sql=mysql_query($query);
	echo "value is : $sql";
	if($sql)
	{
		echo"Admin Deleted Successfully";
	}
	else
	{
		echo"delete admin failed";
	}

?>