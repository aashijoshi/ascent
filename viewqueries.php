<?php include("auth.php"); ?>
<html>
	<head>
		<title>Enquiries</title>
		<link rel="stylesheet" href="css/bootstrap.css">	
		<link rel="stylesheet" href="css/style.css" />
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
		<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	</head>
	<body>
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
										<li><a href="admin.php"><span>Home</span></a></li>
										<li><a href="viewenquiry.php">View enquiries</a></li>
										<li class="active"><a href="viewqueries.php">View messages</a></li>
										<li><a href="viewadmin.php">View admin</a></li>
										<li><a href="admingallery.php">Gallery</a></li>
										<li><a href="logout.php">Logout</a></li>
									</ul>
								</div>
							</div>
						</nav>
				  </div>
				</header>
			</div>

		<div style="text-align:center">
			<h2 id="aboutus">Messages Sent With Details</h2>
		</div>
		<div class="table-responsive container" style="border:5px solid black; align:center; margin:0px auto;">
			<table class="table">
				<thead><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Mobile</th><th>Message</th></tr><thead>
					<?php
						require'db.php';
						$query= "SELECT * FROM `contact`";
						$sql=mysql_query($query);
						
					
						while($row = mysql_fetch_array($sql))
						{   
							echo "<tr><td>" . $row['first_name'] . "</td><td>" . $row['last_name'] . "</td><td>". $row['email'] . "</td><td>". $row['Mobile'] . "</td><td>" . $row['message'] . "</td></tr>"; echo"<br>";  
						}
					?>
			</table>
		</div>
		<br><br>
	</body>
</html>
