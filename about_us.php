<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<title>About us</title>
		<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
		<link href="static/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="static/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="static/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
		<link rel="stylesheet" type="text/css" href="static/plugins/OwlCarousel2-2.2.1/animate.css">
		<link rel="stylesheet" type="text/css" href="static/styles/main_styles.css">
		<link rel="stylesheet" type="text/css" href="static/styles/responsive.css">

		 <link rel="stylesheet" type="text/css" href="static/css/index.css">
		<link rel="stylesheet" type="text/css" href="static/css/about_us.css">
	</head>
    <body >
		<div class="super_container">

		<!-- Header -->

			<header class="header">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_content d-flex flex-row align-items-center justify-content-start">
								<div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
									<div class="logo"><a href="Home.html">Tourism</a></div>
									<nav class="main_nav">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li ><a href="Home.php">Home</a></li>
											<li><a href="places.php">Places</a></li>
											<li class="active"><a href="/about_us">About us</a></li>
											<li><a href="contact_us.php">Contact</a></li>
											<li><a href="#">Hello, <?php echo $_SESSION['username']; ?></a></li>
											<li><a href="logout.php">Logout</a></li>
											<!--{% if user.is_authenticated %}
											<li><a href="#">Hello, {{user.first_name}}</a></li>
											<li><a href="/logout">Logout</a></li>
											{% else %}
											<li><a href="/register">Register</a></li>
											<li><a href="/login">Login</a></li>
											{% endif %}-->
										</ul>
									</nav>
									<div class="header_phone ml-auto">Call us: 9624527667 </div>

									<!-- Hamburger -->

									<div class="hamburger ml-auto">
										<i class="fa fa-bars" aria-hidden="true"></i>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>

			</header>

		</div>
			<div class="container-fluid" style="background-color: powderblue;">

				<div class="about" 	style="background-image:url('static/images/bg1.jpg')">
					<div class="text">
						About Us
					</div>
				</div>
			</div>
			<div class="content">
				<p><font color="black">
					<b>T</b>ravel is the main thing you purchase that makes you more extravagant.
					Our focused is on bringing our custmers the best in esteem & quality travel game plans.We are anthusiastic about movement and sharing the world's marvels on the relaxation travel side , and giving corporate explorers hello there contact administrations to encourage their business travel needs.
				

				we're a worker claimed travel organization secured by our qualities , trustworthiness and commitement to client benefit.
					 This website guide for most popular Tourist places photos & information.
				Fufilled workers lead to fulfilled clients.We know the development and accomplishment of our organization relies on satisfying our customers needs each day.
				Our core value differentiator is the most trusted user experience , be it in terms of quickest search & booking.</font></p>


			</div>
		</div>

			<div class="intro">
				<h3><center><font color="black">Our team</font></center> </h3>
			<center><table align="center">
					<tr>
						<td></td>
						<td valign="middle" align="center"><img src="static/images/dhr.jpg" alt="Mr.Dhruval Gandhi" width="100"></td>
						<td> </td>
						<td></td>
						<td valign="middle" align="center"> <img src="static/images/harsh.png" alt="Mr.Harsh Gandhi" width="100"></td>
						<td></td>
						<td> </td>
						<td valign="middle" align="center" ><img src="static/images/pri.jpg" alt="Ms.Priyanka Gondaliya" width="100"></td>


					</tr>
					<tr>

						<td></td>
						<td><h4><font color="black">Dhruval</font></h4></td>
						<td> </td>
						<td></td>
						<td><h4><font color="black">Harsh </font></h4></td>
						<td> </td>
						<td></td>
						<td><h4><font color="black">Priyanka  </font></h4></td>
					</tr>

				</table></center>
			</div>



		    			<script src="static/js/jquery-3.2.1.min.js"></script>
						<script src="static/styles/bootstrap4/popper.js"></script>
						<script src="static/styles/bootstrap4/bootstrap.min.js"></script>
						<script src="static/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
						<script src="static/plugins/Isotope/isotope.pkgd.min.js"></script>
						<script src="static/plugins/scrollTo/jquery.scrollTo.min.js"></script>
						<script src="static/plugins/easing/easing.js"></script>
						<script src="static/plugins/parallax-js-master/parallax.min.js"></script>
						<script src="static/js/custom.js"></script>
	</body>
</html>
