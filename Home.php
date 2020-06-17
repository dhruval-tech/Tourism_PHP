<?php
session_start();
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'tours');
//$q = "select * from places";
//$val=mysqli_query($con,$q);
$result = mysqli_query($con, "SELECT * FROM places");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	
	<title>Tourism</title>
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
								<div class="logo"><a href="Home.php">Tourism</a></div>
								<nav class="main_nav">
									<ul class="d-flex flex-row align-items-start justify-content-start">
										<li class="active"><a href="Home.php">Home</a></li>
										<li><a href="places.php">Places</a></li>
										<li><a href="about_us.php">About us</a></li>
										<li><a href="contact_us.php">Contact</a></li>
										<li><a href="profile.php">Hello, <?php echo $_SESSION['username']; ?></a></li>
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

		<!-- Menu -->

		<div class="menu">
			<div class="menu_header d-flex flex-row align-items-center justify-content-start">
				<div class="menu_logo"><a href="Home.html">Tourism</a></div>
				<div class="menu_close_container ml-auto">
					<div class="menu_close">
						<div></div>
						<div></div>
					</div>
				</div>
			</div>
			<div class="menu_content">
				<ul>
					<li><a href="Home.php">Home</a></li>
					<li><a href="places.php">Places</a></li>
					<li><a href="about_us.php">About us</a></li>
					<li><a href="contact_us.php">Contact Us</a></li>
					<li><a href="registration.php">Register</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>

		<!-- Home -->


		<div class="home">

			<!-- Home Slider -->
			<div class="home_slider_container">
				<div class="owl-carousel owl-theme home_slider">

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image"
							style="background-image:url('static/images/home.jpg')"></div>
						<div class="home_slider_content_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_slider_content">
											<div class="home_title">
												<h2>Let us take you away</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
		<div class="home_search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_search_container">
						<div class="home_search_title">Search for your trip</div>
						<div class="home_search_content">
							<form action="search.php" class="home_search_form" id="home_search_form">
								<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
									<h4> Search Any Place</h4>
									<input type="text" class="search_input search_input_1" placeholder="City or State" required="required">
									<!--<input type="text" class="search_input search_input_2" placeholder="Departure" required="required">
									<input type="text" class="search_input search_input_3" placeholder="Arrival" required="required">
									<input type="text" class="search_input search_input_4" placeholder="Budget" required="required">-->
									<button class="home_search_button">search</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	    </div>
		<div class="destinations" id="destinations">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_subtitle">simply amazing places</div>
						<div class="section_title">
							<h2>Popular Destinations</h2>
						</div>
					</div>
				</div>
				<div class="row destinations_row">
					<div class="col">
						<div class="destinations_container item_grid">
							<!-- EDIT THIS REMAIN-->

							 <?php while($row = mysqli_fetch_array($result)) { ?>
							  <!-- Destination -->
								<div class="destination item">
									<div class="destination_image">
										
										<?php echo "<img src='images/".$row['image']."' >";?>

										
											<div class="spec_offer text-center">
												 

												  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ModalLoginForm">Book Now</button>
												  <div id="ModalLoginForm" class="modal fade">
													 <div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h1 class="modal-title">Book Now</h1>
																</div>
																<div class="modal-body">

																	<form role="form" method="POST" action="mail.php">
																		
																		<input type="hidden" name="_token" value="">
																		<div class="form-group">
																			<label class="control-label">username</label>
																		    <div>
																				<input type="text" class="form-control input-lg" name="username" value="">
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="control-label">Placename</label>
																		    <div>
																				<input type="name" class="form-control input-lg" name="place" value="">
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="control-label">E-Mail Address</label>
																		    <div>
																				<input type="email" class="form-control input-lg" name="email" value="">
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="control-label">Total persons</label>
																			<div>
																				<input type="number" class="form-control input-lg" name="number">
													            			</div>
												            			</div>
																		
																		<div class="form-group">
																			<label class="control-label">Date</label>
																		    <div>
																				<input type="date" class="form-control input-lg" name="date" value="">
																			</div>
																		</div>
																		<div class="form-group">
																		    <div>
																				<input type="submit" class="form-control input-lg" >
																			</div>
																		</div>
																	</form>
																</div>
															</div><!-- /.modal-content -->
													 </div><!-- /.modal-dialog -->
												  </div><!-- /.modal -->
											    
												    <!--<a href="login.php">special offer Book</a>-->
											   
									        </div>
										

									</div>
									<div class="destination_content">
										<div class="destination_title"><a href="destinations.html"><?php echo "".$row['name']."";; ?></a>
										</div>
										<div class="destination_subtitle">
											<p><?php echo "".$row['description'].""; ?></p>
										</div>
										<div class="destination_price">Package <?php echo "".$row['price']."";; ?>/-</div>

									</div>
								</div>

							<?php } ?>

						 </div>
					</div>
				</div>
			</div>
		</div>

		<div class="news" id="news">
			<div class="container">
				<div class="row">
					<div class="col-xl-8">
						<div class="news_container">

							<!-- News Post -->
							<div
								class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
								<div class="news_post_image"><img src="static/images/news_1.jpg" alt=""></div>
								<div class="news_post_content">
									<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
										<div>02</div>
										<div>june</div>
									</div>
									<div class="news_post_title"><a href="#">Best tips to travel light</a>
									</div>
									<div class="news_post_category">
										<ul>
											<li><a href="#">lifestyle & travel</a></li>
										</ul>
									</div>
									<div class="news_post_text">
										<p>Kids need a lot of carrots element ccumsan carrots; but sad Lion. Live massa.Tempor mass and et.</p>
									</div>
								</div>
							</div>

							<!-- News Post -->
							<div
								class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
								<div class="news_post_image"><img src="static/images/news_2.jpg" alt=""></div>
								<div class="news_post_content">
									<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
										<div>01</div>
										<div>june</div>
									</div>
									<div class="news_post_title"><a href="#">Best tips to travel light</a>
									</div>
									<div class="news_post_category">
										<ul>
											<li><a href="#">lifestyle & travel</a></li>
										</ul>
									</div>
									<div class="news_post_text">
										<p>Over time, mass and laoreet libero. Nutrition carrots element ccumsan need a lot of carrots, but sad lion.
										</p>
									</div>
								</div>
							</div>

							<!-- News Post -->
							<div
								class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
								<div class="news_post_image"><img src="static/images/news_3.jpg" alt=""></div>
								<div class="news_post_content">
									<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
										<div>29</div>
										<div>may</div>
									</div>
									<div class="news_post_title"><a href="#">Best tips to travel light</a>
									</div>
									<div class="news_post_category">
										<ul>
											<li><a href="#">lifestyle & travel</a></li>
										</ul>
									</div>
									<div class="news_post_text">
										<p>Live massa.Tempor mass lacus libero. The latest zero airports, layer carrots real estate.</p>
									</div>
								</div>
							</div>

						</div>
					</div>

					<!-- News Sidebar -->
					<div class="col-xl-4">
						<div class="travello">
							<div class="background_image"
								style="background-image:url('static/images/travello.jpg')"></div>
							<div class="travello_content">
								<div class="travello_content_inner">
									<div></div>
									<div></div>
								</div>
							</div>
							<div class="travello_container">
								<a href="#">
									<div class="d-flex flex-column align-items-center justify-content-end">
										<span class="travello_title">Get a 20% Discount</span>
										<span class="travello_subtitle">Buy Your Vacation Online Now</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->

		<footer class="footer">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="static/images/footer_1.jpg" data-speed="0.8">
							</div>
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="newsletter">
											<div class="newsletter_title_container text-center">
												<div class="newsletter_title">Subscribe to our newsletter to
													get the latest
													trends &
													news</div>
												<div class="newsletter_subtitle">Join our database NOW!
												</div>
											</div>
											<div class="newsletter_form_container">
												<form action="Home.php"
													class="newsletter_form d-flex flex-md-row flex-column align-items-start justify-content-between"
													id="newsletter_form">
													<div
														class="d-flex flex-md-row flex-column align-items-start justify-content-between">
														<div><input type="text"
																class="newsletter_input newsletter_input_name"
																id="newsletter_input_name" placeholder="Name"
																required="required">
															<div class="input_border"></div>
														</div>
														<div><input type="email"
																class="newsletter_input newsletter_input_email"
																id="newsletter_input_email" placeholder="Your e-mail"
																required="required">
															<div class="input_border"></div>
														</div>
													</div>
													<div><button class="newsletter_button">subscribe</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="row footer_contact_row">
									<div class="col-xl-10 offset-xl-1">
										<div class="row">

											<!-- Footer Contact Item -->
											<div class="col-xl-4 footer_contact_col">
												<div
													class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
													<div class="footer_contact_icon"><img
															src="static/images/sign.svg" alt="">
													</div>
													<div class="footer_contact_title">give us a call</div>
													<div class="footer_contact_list">
														<ul>
															<li>Mobile: 9624527667</li>
														</ul>
													</div>
												</div>
											</div>

											<!-- Footer Contact Item -->
											<div class="col-xl-4 footer_contact_col">
												<div
													class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
													<div class="footer_contact_icon"><img
															src="static/images/trekking.svg" alt="">
													</div>
													<div class="footer_contact_title">come & drop by</div>
													<div class="footer_contact_list">
														<ul style="max-width:190px">
															<li>College Road, Nadiad</li>
														</ul>
													</div>
												</div>
											</div>

											<!-- Footer Contact Item -->
											<div class="col-xl-4 footer_contact_col">
												<div
													class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
													<div class="footer_contact_icon"><img
															src="static/images/around.svg" alt="">
													</div>
													<div class="footer_contact_title">send us a message
													</div>
													<div class="footer_contact_list">
														<ul>
															<li>dhruvalgandhi2000@gmail.com</li>
															<li>harshgandhi2000@gmail.com.com</li>
														</ul>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>

							</footer>

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