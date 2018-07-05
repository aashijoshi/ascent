<?php include("auth.php"); ?>
<?php
require('db.php');
$src1;
$src2;
$src3;
$src4;
$src5;
$src6;

?>
<html>
	<head>
		<title>Enquiries</title>
		<link rel="stylesheet" href="css/bootstrap.css">	
		<link rel="stylesheet" href="css/style.css" />
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
										<li><a href="viewqueries.php">View messages</a></li>
										<li><a href="viewadmin.php">View Admin</a></li>
										<li class="active"><a href="admingallery.php">Gallery</a></li>
										<li><a href="logout.php">Logout</a></li>
									</ul>
								</div>
							</div>
						</nav>
				  </div>
				</header>
		</div>

		<div style="text-align:center">
			<h2 id="aboutus">Existing events in gallary</h2>
		</div>
		<div class="table-responsive container" style="border:5px solid black; align:center; margin:0px auto;">
			<table class="table">
				<thead><tr><th>&oslash</th><th>ID</th><th>Event Name</th><th>Delete Event</th></tr><thead>
					<?php

						$query="SELECT * FROM `events`";
						$result=mysql_query($query);
						$no=mysql_num_rows($result);

						for ($i=0; $i < $no ; $i++)
						{ 
							 $row = mysql_fetch_array( $result );
							 $id=$row['id'];
							 $eventname=$row['eventname'];
							 echo "<tr><td>&oslash </td><td>$id</td><td>$eventname</td>
							 <td>
							 <form action='deleteevent.php' method='post' align='center'>
										<input type='hidden' value='".$eventname."' name='eventname' />
										<button type='submit' class='btn btn-danger btn-sm'>Delete</button>
								</form>
							 </td></tr><br>";
						}
					?>
			</table>
		</div>
		<br><br>
		


	</body>
</html>
