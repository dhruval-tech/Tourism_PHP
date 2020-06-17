<?php
session_start();
?>
<!DOCTYPE html>
<html len="en">

<head>
	<title>Places</title>


    <link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
  <link href="static/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="static/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="static/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="static/plugins/OwlCarousel2-2.2.1/animate.css">
  <link rel="stylesheet" type="text/css" href="static/styles/main_styles.css">
  <link rel="stylesheet" type="text/css" href="static/styles/responsive.css">

  	<link rel="stylesheet" type="text/css" href="static/styles/Places.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


	<script src="static/js/jquery.min.js"></script>


  <style>
            table, th, td {
                border: 1px #00ffff;
                text-align:center;
            }
            th, td {
                padding: 20px;
                background-color:none;
            }

            h1 {
            color:red;
            }
            h2{
              color: green;
            }
            body {
              background-color: #3A4D55 ;
            }

        </style>

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
									<div class="logo"><a href="Home.php">Tourism</a></div>
									<nav class="main_nav">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li ><a href="Home.php">Home</a></li>
											<li class="active"><a href="places.php">Places</a></li>
											<li ><a href="about_us.php">About us</a></li>
											<li><a href="contact_us.php">Contact</a></li>
											
											<li><a href="#">Hello, <?php echo $_SESSION['username']; ?></a></li>
											<li><a href="logout.php">Logout</a></li>
											<!--
											<li><a href="/register">Register</a></li>
											<li><a href="/login">Login</a></li>-->
											
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
 <div class="body">

    <div class="container-fluid">
  <h2><center><I>Places</I></center></h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
       <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img class="block img-fluid" src="static/images/manali.jpg" alt="Manali" style="width:100%">
       <div class="carousel-caption">

        <h3>Manali</h3>
      </div>
      </div>

      <div class="item">
        <img class="block img-fluid" src="static/images/dar.jpg" alt="Darjeeling" style="width:100%">

      <div class="carousel-caption">

        <h3>Darjeeling </h3>
      </div>

      </div>

      <div class="item">
        <img class="block img-fluid" src="static/images/south.jpg" alt="Ooty" style="width:100%">

        <div class="carousel-caption">

        <h3>Ooty </h3>
      </div>
      </div>

      <div class="item">
        <img class="block img-fluid" src="static/images/kut.jpg" alt="Kutch" style="width:100%">

        <div class="carousel-caption">

        <h3>Kutch </h3>
      </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>

<form>
    <center><h2><i><u>Travel the India</u></i></h2></center>

    <table  style="width: 100%" align="center">
      <tr>
        <td>
        <img src="static/images/jammu.jpg" align="center"><br>

         <a class="link" href="north.php"  ><h1>  North India</h1></a><br>


      </td>
      <td>
        <img src="static/images/boat.jpg" align="center"><br><br>

        <a class="link" href="south.php"  ><h1>South India</h1></a><br>





        </td>
      </tr>
      <tr>
        <td>
         <img src="static/images/darjeeling.jpg" align="center">
        <br><br>

          <a class="link" href="east.php" ><h1>East India</h1></a><br>



              </td>
      <td>
        <img src="static/images/unity.jpg"  align="center"><br><br>

        <a class="link" href="west.php"  ><h1>West India  </h1></a><br>


        </td>
        </tr>
      </table>
      </form>


</div>


</body>
</html>
