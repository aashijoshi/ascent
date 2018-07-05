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
	<div id="headercover">
		<header role="banner" id="fh5co-header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="row">
						<div class="col-md-3">
							<div class="fh5co-navbar-brand">
								<a class="fh5co-logo" href="index.html">ASCENT UDAIPUR</a>
							</div>
						</div>
						<div class="col-md-9 main-nav">
							<ul class="nav text-right">
								<li><a href="index.html"><span>Home</span></a></li>
								<li><a href="courses.html">Courses</a></li>
								<li><a href="faculty.html">Faculties</a></li>
								<li><a href="about.html">About Us</a></li>
								<li><a href="contact.html">Contact Us</a></li>
								<li class="active"><a href="adminlogin.php">Admin Login</a></li>
							</ul>
						</div>
					</div>
				</nav>
		  </div>
		</header>
	</div>
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
		$query = "SELECT * FROM `login` WHERE username='$username' and password='".md5($password)."'";
		$result = mysql_query($query) or die(mysql_error());
		$rows = mysql_num_rows($result);
		if($rows==1)
		{
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				header("Location: admin.php"); // Redirect user to index.php
		}
		else
		{
		?>
			<html>
				<head>
					<script>
						alert('Incorrect username or password\nPlease login again');
						location.replace("login.php");
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

	<div align="center" id="fh5co-intro-section"  class="container animate-box" data-animate-effect="fadeIn" style="float:bottom">

	<h1 id="aboutus">Admin Login</h1>	
		<div class="col-md-8 animate-box col-md-offset-4" align="left" style="float:bottom">
					<form action="adminlogin.php" method="POST">
						<div class="form-group row">
							<div class="col-md-6 field">
								<label for="username">Username</label>
								<input type="text" name="username" pattern="[A-Za-z_s]*" id="username" class="form-control"  onfocus="setStyle(this.id)" onblur="setDef(this.id)" required />
							</div>
						</div>	
						
						<div class="form-group row">
							<div class="col-md-6 field">
								<label for="password">Password</label>
								<input type="password" name="password" id="password" class="form-control"  onfocus="setStyle(this.id)" onblur="setDef(this.id)" required />
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