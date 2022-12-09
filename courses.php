<?php

	require_once 'connection.php';
	$req = "SELECT * FROM cours";
	$cours = $conn ->query($req);

?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<title>Studiare</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="css/studiare-assets.min.css">
	<link rel="stylesheet" type="text/css" href="css/fonts/font-awesome/font-awesome.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/fonts/elegant-icons/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/fonts/iconfont/material-icons.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">

			<div class="top-line">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p><i class="material-icons">phone</i> <span>+01 2334 853</span></p>
							<p><i class="material-icons">email</i> <span>email@mycourse.com</span></p>
						</div>
						<div class="col-md-6">
							<div class="right-top-line">
								<ul class="top-menu">
									<li><a href="about.html">About</a></li>
									<li><a href="blog.html">News</a></li>
								</ul>
								<button class="search-icon">
									<i class="material-icons open-search">search</i> 
									<i class="material-icons close-search">close</i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<form class="search_bar">
				<div class="container">
					<input type="search" class="search-input" placeholder="What are you looking for...">
					<button type="submit" class="submit">
						<i class="material-icons">search</i>
					</button>
				</div>
			</form>

			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container">

					<a class="navbar-brand" href="index.html">
						<img src="images/logo.svg" alt="">
					</a>

					<a href="#" class="mobile-nav-toggle"> 
						<span></span>
					</a>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="drop-link">
								<a class="active" href="index.html">Home</a>
							</li>

							<li class="drop-link">
								<a href="courses.html">Courses</a>
							</li>

						</ul>
						<a href="#" class="register-modal-opener login-button"><i class="material-icons">perm_identity</i> Get Started</a>
					</div>
				</div>
			</nav>

			<div class="mobile-menu">
				<div class="search-form-box">
					<form class="search-form">
						<input type="search" class="search-field" placeholder="Enter keyword...">
						<button type="submit" class="search-submit">
							<i class="material-icons open-search">search</i> 
						</button>
					</form>
				</div>
				<div class="shopping-cart-box">
					<a class="shop-icon" href="cart.html">
						<i class="material-icons">shopping_cart</i>
						Cart
						<span class="studiare-cart-number">0</span>
					</a>
				</div>
				<nav class="mobile-nav">
					<ul class="mobile-menu-list">
						<li>
							<a href="index.html">Home</a>
						</li>
						<li class="drop-link">
							<a href="#">Pages</a>
							<ul class="drop-level">
								<li><a href="about.html">About Us</a></li>
								<li><a href="pricing.html">Pricing Packages</a></li>
								<li><a href="portfolio.html">Portfolio</a></li>
								<li><a href="single-project.html">Portfolio Single</a></li>
								<li><a href="teachers.html">Teachers</a></li>
								<li><a href="single-teacher.html">Teacher Single</a></li>
								<li><a href="cart.html">Shopping Cart</a></li>
								<li><a href="checkout.html">Checkout</a></li>
								<li><a href="single-teacher.html">Teacher Single</a></li>
								<li class="drop-link">
									<a href="#">Submenu Level 1</a>
									<ul class="drop-level">
										<li><a href="#">Submenu Level 2</a></li>
										<li class="drop-link">
											<a href="#">Submenu Level 2</a>
											<ul class="drop-level">
												<li><a href="#">Submenu Level 3</a></li>
												<li><a href="#">Submenu Level 3</a></li>
											</ul>
										</li>
										<li><a href="#">Submenu Level 2</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="drop-link">
							<a href="blog.html">Blog</a>
							<ul class="drop-level">
								<li class="drop-link">
									<a href="blog-list.html">Blog List</a>
									<ul class="drop-level">
										<li><a href="blog-list-leftsidebar.html">Blog List - Sidebar Left</a></li>
										<li><a href="blog-list-rightsidebar.html">Blog List - Sidebar Right</a></li>
										<li><a href="blog-list.html">No Sidebar</a></li>
									</ul>
								</li>
								<li class="drop-link">
									<a href="blog-grid-3.html">Blog Grid</a>
									<ul class="drop-level">
										<li><a href="blog-grid-3.html">3 Column</a></li>
										<li><a href="blog-grid-4.html">4 Column</a></li>
										<li><a href="blog-grid-leftsidebar.html">Sidebar Left</a></li>
										<li><a href="blog-grid-rightsidebar.html">Sidebar Right</a></li>
									</ul>
								</li>
								<li><a href="blog.html">Blog Classic</a></li>
								<li><a href="single-post.html">Post Single</a></li>
							</ul>
						</li>
						<li>
							<a href="courses.html">Courses</a>
						</li>
						<li>
							<a href="events.html">Events</a>
						</li>
						<li>
							<a href="contact.html">Contact</a>
						</li>
					</ul>
				</nav>
			</div>

		</header>
		<!-- End Header -->

		<!-- page-banner-section 
			================================================== -->
		<section class="page-banner-section">
			<div class="container">
				<h1>Courses</h1>
				<ul class="page-depth">
					<li><a href="index.html">Home</a></li>
					<li><a href="courses.html">Courses</a></li>
				</ul>
			</div>
		</section>
		<!-- End page-banner-section -->

		<!-- courses-section 
			================================================== -->
		<section class="courses-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="courses-top-bar">
							<div class="courses-view">
								<a href="courses.html" class="grid-btn active">
									<i class="fa fa-th-large" aria-hidden="true"></i>
								</a>
								<a href="courses-list.html" class="grid-btn">
									<i class="fa fa-bars" aria-hidden="true"></i>
								</a>
								<span>Showing all 9 results</span>
							</div>
							<form class="search-course">
								<input type="search" name="search" id="search_course" placeholder="Search Courses..." />
								<button type="submit">
									<i class="material-icons">search</i>
								</button>
							</form>
						</div>

						<div class="row">
							<?php
								while ($row = mysqli_fetch_assoc($cours)){
							?>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="course-post">
									<div class="course-thumbnail-holder">
										<a href="<?php echo $row["fichierCours"];?>">
											<img src="<?php echo $row["logoCours"];?>" width="220" alt="">
										</a>
									</div>
									<div class="course-content-holder">
										<div class="course-content-main">
											<h2 class="course-title">
												<a href="<?php echo $row["fichierCours"];?>"><?php echo $row["nomCours"];?></a>
											</h2>
											<div class="course-rating-teacher">
												<a href="#" class="course-loop-teacher">DAI</a>
											</div>
										</div>
											
									</div>
								</div>
							</div>
							<?php
								}
							?>

						</div>
					</div>

					<div class="col-lg-4">
						<div class="sidebar">
							<div class="category-widget widget">
								<h2>Les Modules DSI ( Development des Systemes informatique )</h2>
								<ul class="category-list">
									<li><a href="#">DAI</a></li>
									<li><a href="#">Conception</a></li>
									<li><a href="#">Math</a></li>
									<li><a href="#">Anglais</a></li>
									<li><a href="#"></a></li>
								</ul>
							</div>
							<div class="ads-widget widget">
								<a href="#">
									<img src="upload/blog/ad-banner.jpg" alt="">
								</a>
							</div>

						</div>
					</div>

				</div>
						
			</div>
		</section>
		<!-- End courses section -->

		<!-- footer 
			================================================== -->
		<footer>
			<div class="container">

				<div class="up-footer">
					<div class="row">

						<div class="col-lg-4 col-md-6">
							<div class="footer-widget text-widget">
								<a href="index.html" class="footer-logo"><img src="images/logo_light.svg" alt=""></a>
								<p>We named our theme Studiare because to us,<br> the best brands are simple ones. Brands thrive<br> on their ability to be understood.</p>
								<ul>
									<li>
										<div class="contact-info-icon">
											<i class="material-icons">location_on</i>
										</div>
										<div class="contact-info-value">127 Elizabeth Street, NY New York</div>
									</li>
									<li>
										<div class="contact-info-icon">
											<i class="material-icons">phone_android</i>
										</div>
										<div class="contact-info-value">+55-11-3097-0508</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="footer-widget quick-widget">
								<h2>Quick Links</h2>
								<ul class="quick-list">
									<li><a href="contact.html">Contact</a></li>
									<li><a href="pricing.html">Pricing Packages</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="courses.html">Courses</a></li>
									<li><a href="blog.html">News</a></li>
									<li><a href="index.html">Home</a></li>
									<li><a href="#">Sample Page</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="footer-widget subscribe-widget">
								<h2>Newsletter</h2>
								<p>Don’t miss anything, sign up now and keep informed about our company.</p>
								<div class="newsletter-form">
									<input class="form-control" type="email" name="EMAIL" placeholder="Enter Your E-mail" required="">
									<input type="submit" value="Subscribe">
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>

			<div class="footer-copyright copyrights-layout-default">
				<div class="container">
					<div class="copyright-inner">
						<div class="copyright-cell"> &copy; 2019 <span class="highlight">Studiare</span>. Created by CodeBean Team.</div>
						<div class="copyright-cell">
							<ul class="studiare-social-links">
								<li><a href="#" class="facebook"><i class="fa fa-facebook-f"></i></a></li>
								<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->

	
	<script src="js/studiare-plugins.min.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI&amp;sensor=false&amp;language=en"></script>
	<script src="js/gmap3.min.js"></script>
	<script src="js/script.js"></script>
	
</body>
</html>