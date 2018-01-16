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
					<li> <a href="memberloginmenu.php">Member Menu Page</a></li>
					<li> <a href="userprofile.php">View Profile</a></li>
					<li> <a href="logout.php">Logout</a></li>
				</ul>
			</nav>
			
<?php
session_start();

$host ="localhost";
$user ="root";
$password = "";
$database ="bowlingdb";

$link = mysqli_connect($host,$user,$password,$database) or die("Error: ".mysqli_connect_error());

$fullname=$_SESSION["u"];
$Fullname =$_POST["name"];
$Email =$_POST["email"];
$ID =$_POST["id"];
$HP =$_POST["hp"];
$Pass =$_POST["password"];
$Role =$_POST["role"];
$Gender =$_POST["gender"];

$updatequery= "UPDATE bowlingmember SET fullname ='$Fullname', email = '$Email', id = '$ID', hp = '$HP' ,password = '$Pass' ,roles = '$Role' ,Gender = '$Gender' WHERE fullname='$fullname'";

$result = mysqli_query($link,$updatequery) or die(mysqli_error($link));

 
if($result)
  echo "Successfully update the data.";  	
else
 	 echo "Error in updating the data";
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
