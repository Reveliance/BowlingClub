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
					<li> <a href="editprofile.php">Edit Profile</a></li>
					<li> <a href="logout.php">Logout</a></li>
				</ul>
			</nav>
			

<?php
session_start();

$host ="localhost";
$user ="root";
$password = "";
$database ="bowlingdb";

$fullname=$_SESSION["u"];

$link = mysqli_connect($host,$user,$password,$database) or die("Error: ".mysqli_connect_error());
$s= "select * from bowlingmember where fullname='$fullname'";

$result = mysqli_query($link,$s) or die(mysqli_error($link));
 
$row=mysqli_fetch_array($result); ?>

      Full Name: <input type="text" name="name" id="name" readonly value="<?php echo "$row[0]"; ?>">
      Email: <input type="text" name="email" id="name" readonly value="<?php echo "$row[1]"; ?>">
      ID: <input type="text" name="id" id="name" readonly value="<?php echo "$row[2]"; ?>">	  
      HP Number: <input type="text" name="hp" id="name" readonly value="<?php echo "$row[3]"; ?>">
      Password: <input type="password" name="password" id="name" readonly value="<?php echo "$row[4]"; ?>">
      Roles: <input type="text" name="role" id="name" readonly value="<?php echo "$row[5]"; ?>">
      Gender: <input type="text" name="gender" id="name" readonly value="<?php echo "$row[6]"; ?>">
	  


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