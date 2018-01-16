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

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Bowling Club Registration</p>
						<h2>Registration</h2>
					</header>
				</div>
			</section>

		<!-- Main -->
			<div id="main" class="container">


<script type=text/javascript>
function check()
{
	if (document.getElementById("name").value.length == 0)
		{
			alert("enter Fullname");
			return false;
		}
	if (document.getElementById("email").value.length == 0)
		{
			alert("Enter Email");
			return false;
		}
	if (document.getElementById("id").value.length == 0)
		{
			alert("Enter student ID");
			return false;
		}		
	if (document.getElementById("hp").value.length == 0)
		{
			alert("Enter Handphone Number");
			return false;
		}	
	if (document.getElementById("password").value.length == 0)
		{
			alert("Enter Password");
			return false;
		}	
	else
		return true;
}
</script>

							<!-- Form -->
								<h3>Registration Form</h3>

								<form name=b onsubmit="return check()"; action=addregisterquery.php method=post>
									<div class="row uniform">
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="name" id="name" value="" placeholder="Full Name" />
										</div>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="email" id="email" value="" placeholder="Email" />
										</div>								
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="id" id="id" value="" placeholder="Student ID" />
										</div>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="hp" id="hp" value="" placeholder="Handphone Number" />
										</div>
										<div class="6u$ 12u$(xsmall)">
											<input type="password" name="password" id="password" value="" placeholder="Password" />
										</div>
										<div class="6u$ 12u$(xsmall)">									
											<input type="text" name="role" id="role" value="Member" readonly placeholder="Roles" />
										</div>										
										<!-- Break -->	
										
											<div class="4u 12u$(small)">								
										<h4>Gender</h4>
										<div class="4u 12u$(small)">
											<input type="radio" id="male" value="male" name="gender">
											<label for="male">Male</label>
										</div>												
										<div class="4u 12u$(small)">
											<input type="radio" id="female" value="female" name="gender">
											<label for="female">Female</label>
										</div>
											</div>	
											
										<!-- Break -->
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" value="Register" /></li>
												<li><input type="reset" value="Reset" class="alt" /></li>
											</ul>
										</div>
									</div>
								</form>

								

							
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