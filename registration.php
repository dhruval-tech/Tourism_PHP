<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>NEW USER </title>
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
	<style>
		table, th, td {
  			border: 1px solid black;
		}

		form { 
				  display: block;
				  
				  margin-top: 3%;
				  margin-bottom: 0.67em;
				  margin-left: 1%;
				  margin-right: 0;
				  
			}
	</style>

</head>

<body text="black" class="background_image" style="background-image:url('static/images/book.jpg')">
    <div>
	<header class="header">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
								<div class="logo"><a href="/Home">Tourism</a></div>
								<nav class="main_nav">
									<ul class="d-flex flex-row align-items-start justify-content-start">
										<li ><a href="/Home">Home</a></li>
										<li><a href="#">Places</a></li>
										<li><a href="/about_us">About us</a></li>
										<li><a href="contact_us.html">Contact</a></li>
										<li class="active"><a href="registration.php">Register</a></li>
										<li ><a href="login.php">Login</a></li>
									</ul>
								</nav>
								<div class="header_phone ml-auto">Call us: 9624527667 </div>



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
    <div >
		<h1><center><font color="black">Register</font></center></h1>
		
		<center>
			<form  action="insert.php" method="POST"  >
        		
				<table bgcolor=#A3A8A7 align="center" width="500" height="400">
					<tr>
						<td height="80" ><font color="black"><b>Firstname :</b></font></td>
                		<td > <input type="text" name="first_name" placeholder="First Name" required="required"></td>
					</tr>
					<tr>
						<td height="80" ><font color="black"><b>Lastname :</b></font></td>
						<td> <input type="text" name="last_name" placeholder="Last Name"  required="required"></td>
					</tr>
            		<tr>
						<td height="80" ><font color="black"><b>Username :</b></font>
                		</td> <td> <input type="text" name="username" placeholder="User Name"  required="required"></td>
					</tr>
					<tr>
						<td height="80" ><font color="black"><b>Password : </b></font></td>
						<td><input type="password" name="password1"  pattern=".{8,11}" placeholder="minimum length of 8"    id="pass" required="required"></td>
					</tr>
					<tr>
						<td height="80" ><font color="black"><b>Confirm Password : </b></font></td>
                		<td><input type="password" name="password2" pattern=".{8,11}" placeholder="minimum length of 8"  required="required"></td>
					</tr>
					<tr>
						<td height="80" ><font color="black"><b>Email id: </b></font></td>
                		<td><input type="text" name="email"  id="email" ></td>
					</tr>
            		<tr>
						<td height="60" ><font color="black"><center><input type="submit" ></center></font></td>
					</tr>
        		</table>
			</form>
			
		</center>
	</div>
</body>
</html>

