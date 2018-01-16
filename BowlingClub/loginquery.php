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

//variable and value for database connection
$host ="localhost";
$user ="root";
$password = "";
$database ="bowlingdb";

session_start();

$link = mysqli_connect("localhost","root","","bowlingdb"); 
$s = "select * from bowlingmember where id='".$_POST["id"]."'";
$result = mysqli_query($link,$s) or die(mysqli_error($link));

if (mysqli_num_rows($result) > 0)
	{
		$row = mysqli_fetch_array($result);
		if ($_POST["password"] == $row[4]) 
			{
				if($row[5] == "Member")
				{
					$_SESSION["u"] = $row[0];
					$_SESSION["e"] = $row[1];
					$_SESSION["i"] = $row[2];
					$_SESSION["h"] = $row[3];
					$_SESSION["p"] = $row[4];
					$_SESSION["r"] = $row[5];
					$_SESSION["g"] = $row[6];
					header("Location:memberloginmenu.php");					
				}
				else
				{
					$_SESSION["u"] = $row[0];
					$_SESSION["e"] = $row[1];
					$_SESSION["i"] = $row[2];
					$_SESSION["h"] = $row[3];
					$_SESSION["p"] = $row[4];
					$_SESSION["r"] = $row[5];
					$_SESSION["g"] = $row[6];					
					header("Location:adminloginmenu.php");	
				}				

			}
		else 
			{
				echo "<h1>Hi $row[0]</h1>";
				echo "<font color=red>Wrong password</font>";
			}
	}
else 
	{
		echo "<h1>Hi $_POST[id]</h1>";
		echo "<font color=red>User not found</font>";
	}
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
