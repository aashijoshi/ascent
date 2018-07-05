<?php
	require('db.php');
	// If form submitted, insert values into the database.
	if (isset($_POST['newadmin']))
	{
		$username = $_POST['newadmin'];
		$password = $_POST['newpassword'];
		$confirm = $_POST['confirmnewpassword'];
		
		if($password!=$confirm)
		{
?>

<html>
	<script>
		alert('Password Mismatch\nConfirm password correctly');	
		window.setTimeout(function(){ document.location = "admin.php"; },0);	
	</script>
</html>

<?php
		}
	
	$check="SELECT * FROM `admins` WHERE username ='".$username."'";
	$duplicate=mysql_query($check);
	$no=mysql_num_rows($duplicate);
	
	
	$username = stripslashes($username);
	$username = mysql_real_escape_string($username);
	$password = stripslashes($password);
	$password = mysql_real_escape_string($password);
	$query = "INSERT into `admins` (username, password) VALUES ('$username', '".md5($password)."')";
	
	
		if(($no>0))
		{
		?>
			<html>
				<script>
					alert('Username already registered as admin\nPlease try another username');	
					window.setTimeout(function(){ document.location = "admin.php"; },0);	
				</script>
			</html>
		<?php
		}

		else
		{
		$result = mysql_query($query);
			if($result)
			{
			?>
				<html>
					<script>
						alert('Admin created sucessfully');	
						window.setTimeout(function(){ document.location = "admin.php"; },0);	
					</script>
				</html>
			<?php
			}
		}
	
	
	}
?>