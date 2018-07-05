<?php
	session_start();
?>

<html>
	<head>
		<title>ENQUIRY FORM</title>
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">

		<script type="text/javascript">
			function setStyle(x)
			{
				document.getElementById(x).style.background="#ffcc66";
			}
			function setDef(x)
			{
				document.getElementById(x).style.background="white";
			}
		</script>
	</head>
	<div class="box-wrap">
	<header role="banner" id="fh5co-header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="row">
						<div class="col-md-3">
							<div class="fh5co-navbar-brand">
								<a class="fh5co-logo" href="index.html">ASCENT SCHOOL</a>
							</div>
						</div>
						<div class="col-md-9 main-nav">
							<ul class="nav text-right">
								<li><a href="index.html"><span>Home</span></a></li>
								<li class="active"><a href="courses.html">Courses</a></li>
								<li><a href="faculty.html">Faculties</a></li>
								<li><a href="about.html">About Us</a></li>
								<li><a href="contact.html">Contact Us</a></li>
								<li><a href="adminlogin.php">Admin Login</a></li>
							</ul>
						</div>
					</div>
				</nav>
		  </div>
		</header>
	</div>
	<body>
		<h1 align="center" id="enquiryform">Enquiry Form</h1>

	<div id="fh5co-intro-section" class="outerenquirybox animate-box" data-animate-effect="fadeIn" align="center">
		<div id="fh5co-intro-cover" class="innerenquirybox animate-box" data-animate-effect="fadeIn" align="center">
			<form action="formsubmit.php" method="POST" align="center">
				
			
					
				Name:<input type="text" id="name" pattern="[A-Z a-zs]*" name="name" onfocus="setStyle(this.id)" onblur="setDef(this.id)" title="Name can contain only alphabets..." class="form-control" required/>
				
					
				
				
				Father's Name:	<input type="text" id="fname" pattern="[A-Z a-zs]*" name="fname" onfocus="setStyle(this.id)" onblur="setDef(this.id)" title="Name can contain only alphabets..." class="form-control" required/>
				

				
				
				E-mail:<input type="e-mail" id="mail" name="email" onfocus="setStyle(this.id)" onblur="setDef(this.id)" title="You must provide a valid e-mail address..." class="form-control" required/>
				
				
				
				
				Mobile no.:<input type="integer" id="mobno" pattern="[0-9s]*" name="number" minlength="10" maxlength="10" onfocus="setStyle(this.id)" onblur="setDef(this.id)" title="You must provide a valid mobile number..." class="form-control" required/>
					

				<br>
				<label>GENDER</label><br>
					<label class="radio-inline" required>
  							<input type="radio" name="gender"  value="male">Male
					</label>
					<label class="radio-inline">
 				 		<input type="radio" name="gender"  value="female">Female
					</label>
				
				
				<br>
				<label>COURSE </label><br>
					<select class="form-control-static" name="course" required>
  						<option value="1">IIT DROPPER</option>
  						<option value="2">IIT 11th</option>
  						<option value="3">IIT 12th</option>
  						<option value="4">PMT DROPPER</option>
 						<option value="5">PMT 11th</option>
  						<option value="6">PMT 12th</option>
  						<option value="7">CRASH COURSE</option>
  						<option value="8">SUMMER COURSE</option>
					</select><br></br>
				
				
				<button class="btn btn-primary btn-sm">Submit</button>
			</form>
		</div>
	</div>	
	</body>
</html>