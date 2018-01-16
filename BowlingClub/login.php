<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Login Page</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.php">UNITEN BOWLING CLUB </a></div>
				<a href="#menu">Menu</a>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">HOME</a></li>
					<li><a href="login.php">LOGIN</a></li>
					<li><a href="registration.php">REGISTRATION</a></li>
				</ul>
			</nav>
			
<script type=text/javascript>
function check()
{
	if (document.a.id.value == "")
		{
			alert("enter student ID");
			return false;
		}
	if (document.getElementById("password").value.length == 0)
		{
			alert("Enter password");
			return false;
		}

	else
		return true;
}
</script>

		<section id="main">
				<div class="inner">
					<header>
						<h2>Login To Your Account</h2>
					</header>
					<form name=a onsubmit="return check()"; action=loginquery.php method=post>
						<div class="form-group col-lg-5">
							<label for="id">Student ID</label>
							<input type="text" name="id" id="id" />
						</div>
						<div class="form-group col-lg-5">
							<label for="password">Password</label>
							<input type="password" name="password" id="password" />
						</div>

                        <br><br>

						<center><ul class="actions">
							<li><input type="submit" value="LOGIN" class="alt" /></li>
                            <li><input type="reset" value="CANCEL" class="alt" /></li>
						</ul></center>
					</form>

					<div class="copyright">
						<center>&copy; Bowling Club 2018 <a href="registration.php">Not Registered yet ?</a></center>
					</div>
				</div>
			</section>

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