<html>
	<head>
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
		<title>Login</title>
		
			<script type="text/javascript">
				function setStyle(x)
				{
					document.getElementById(x).style.background="#ffff99";
				}
				function setDef(x)
				{
					document.getElementById(x).style.background="white";
				}
				function popup()
				{
					warning.style.display='block';
					text("Some error").fadeIn();
					setTimeout(function()
					{
					warning.style.display='none';
					},2000);
				}
			</script>
		<link rel="stylesheet" href="css/bootstrap.css">	
		<link rel="stylesheet" href="css/style.css" />
		
	</head>
	<body>
	<!--<div id="back">--> 
<?php
	require('db.php');
	session_start();
	
	if (isset($_POST['username']))// If form submitted, insert values into the database.
	{
		$username = $_POST['username']; 
		$password = $_POST['password'];
		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
		//Checking is user existing in the database or not
		$query = "SELECT * FROM `admins` WHERE username='$username' and password='".md5($password)."'";
		$result = mysql_query($query) or die(mysql_error());
		$rows = mysql_num_rows($result);
		if($rows==1)
		{
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				header("Location: onlinetest.php"); // Redirect user to index.php
		}
		else
		{
		?>
			<html>
				<head>
					<script>
						alert('Incorrect password\nPlease login again');
						location.replace("onlinetestregister.php");
					</script>
				</head>
			</html>
		<?php
		}
	}
	else
	{
	?>
	
	</br></br>
	<div align="center" class="container" style="color:;background-color:#ffccff;">
	<h1 id="aboutus">Register here to give online test...</h1>	
		<div class="col-md-8 animate-box col-md-offset-4" align="left">
					<form action="onlinetestregister.php" method="POST">
						<div class="form-group row">
							<div class="col-md-6 field">
								<label for="username">Username</label>
								<input type="text" name="username" id="username" class="form-control">
							</div>
						</div>	

						<div class="form-group row">
							<div class="col-md-6 field">
								<label for="email">E-mail</label>
								<input type="email" name="email" id="email" class="form-control">
							</div>
						</div>
						
						<div class="form-group row">
							<div class="col-md-6 field">
								<label for="password">Password</label>
								<input type="password" name="password" id="password" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-6 field">
								<input type="checkbox" onchange="document.getElementById('password').type = this.checked ? 'text' : 'password'" class="showpass"><span font-size="25%"> Show password</span>
							</div>
						</div>
								
					
						<div class="form-group row">
							<div class="col-md-12 field">
								<input type="submit" id="submit" class="btn btn-primary" value="Login">
							</div>
						</div>
					</form>
		</div>
	</div>
<?php } ?>
	<!--</div>-->
	</body>
</html>