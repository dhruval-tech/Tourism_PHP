<?php
session_start();

$con = mysqli_connect('localhost','root');



mysqli_select_db($con, 'tours');
$uname = $_SESSION['username'];
$q = "select * from userdb where uname =  '$uname' ";

$result = mysqli_query($con, $q);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Profile</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
		<link href="static/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="static/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="static/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
		<link rel="stylesheet" type="text/css" href="static/plugins/OwlCarousel2-2.2.1/animate.css">
		<link rel="stylesheet" type="text/css" href="static/styles/main_styles.css">
		<link rel="stylesheet" type="text/css" href="static/styles/responsive.css">
		<script src="static/js/jquery.min.js"></script>
		<style>
			body {
	              background-image: url('static/images/pro.jpg');
	              background-repeat: no-repeat;
	              background-attachment: fixed;
	              background-size: cover;
            }
            h1 { 
				  display: block;
				  font-size: 2em;
				  margin-top: 8%;
				  margin-bottom: 0.67em;
				  margin-left: 1%;
				  margin-right: 0;
				  font-weight: bold;
			}
			h2 { 
				  display: block;
				  font-size: 2em;
				  margin-top: 3%;
				  margin-bottom: 0.67em;
				  margin-left: 0%;
				  margin-right: 0;
				  font-weight: bold;
			}
			h3 { 
				  display: block;
				  font-size: 2em;
				  margin-top: 5%;
				  margin-bottom: 0.67em;
				  margin-left: 0%;
				  margin-right: 0;
				  font-weight: bold;
			}

        </style>
	</head>
	<body>
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
										<li><a href="about_us.php">About us</a></li>
										<li><a href="contact_us.php">Contact</a></li>
										<li class="active"><a href="profile.php" >Hello, <?php echo $_SESSION['username']; ?></a></li>
										<li><a href="logout.php">Logout</a></li>
										<!--{% if user.is_authenticated %}
										<li><a href="#">Hello, {{user.first_name}}</a></li>
										<li><a href="logout.php">Logout</a></li>
										{% else %}
										<li><a href="registration.php">Register</a></li>
										<li><a href="login.php">Login</a></li>
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

		<h1><center><font color="black">Profile Page</font></center></h1>
		<h2><font color="black">Personal Information</font></h2>
	    <table bgcolor=gray align="center" width="700" height="30" border="3">
	    	<tr>
	    		<th><font color="black">Firstname</font></th>
	    		<th><font color="black">Lastname</font></th>
	    		<th><font color="black">username</font></th>
	    		<th><font color="black">Password</font></th>
	    		<th><font color="black">Email Id</font></th>
	    	</tr>
	    	<tr>
	    		<td><font color="black"><?php echo "".$row['fname']."" ;?></font></td>
	    		<td><font color="black"><?php echo "".$row['lname']."" ;?></font></td>
	    		<td><font color="black"><?php echo "".$row['uname']."";?></font></td>
	    		<td><font color="black"><?php echo "".$row['password']."";?></font></td>
	    		<td><font color="black"><?php echo "".$row['email']."" ;?></font></td>
	    	</tr>
	    </table>
	    <?php 
	    	$que = "select * from book where uname =  '$uname' ";
	    	$res = mysqli_query($con, $que);
			//$ro = mysqli_fetch_array($res);
			
	    ?>
	    <h3><font color="black">Booking Information</font></h3>
	    <table bgcolor=gray align="center" width="700" height="30" border="3">
	    	<tr>
	    		<th><font color="black">Place </font></th>
	    		<th><font color="black">No Of Persons</font></th>
	    	</tr>
	    	<?php while($ro = mysqli_fetch_array($res)){ ?>
	    	<tr>
	    		<td><font color="black"><?php echo "".$ro['place']."" ;?></font></td>
	    		<td><font color="black"><?php echo "".$ro['person']."" ;?></font></td>
	    		
	    	</tr>
	    <?php } ?>
	    </table>
	</body>

</html>