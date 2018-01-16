<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>BOWLING CLUB</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.php">BOWLING CLUB <span>by UNITEN</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">HOME</a></li>
					<li><a href="login.php">LOGIN</a></li>
					<li><a href="registration.php">REGISTRATION</a></li>
				</ul>
			</nav>

<?php 
$con=mysqli_connect("localhost", "root", "","bowlingdb") or die("Cannot connect to server.".mysqli_error($con)); 
 	
	$fullname=$_POST["name"];
	$email=$_POST["email"];
	$studentid=$_POST["id"];
	$hpnumber=$_POST["hp"];
	$pass=$_POST["password"];
	$roles=$_POST["role"];
	$gender=$_POST["gender"];

 	 	 
 	 
 	$insert_sql="INSERT INTO bowlingmember VALUES('$fullname', '$email', '$studentid', '$hpnumber', '$pass', '$roles', '$gender')";
	
	$sql_result =mysqli_query($con,$insert_sql) or die("Error in inserting data due to ".mysql_error()); 
 
if($sql_result) 
 	 	echo "Successfully insert new data."; 
 	else 
 	 	echo "Error in inserting new data"; 
?> 



		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="https://twitter.com/unitenbowlers?lang=en" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/unitenbowlingclubmembers/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; BOWLING CLUB by UNITEN. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</body> 
</html> 
