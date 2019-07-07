
<?php

include("Connection.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Store Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<?php
		include("Header.php");
		
		?>
		<aside id="colorlib-hero" class="breadcrumbs">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cover-img-1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Harshal& Company</h1>
				   					
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<h3>Contact Information</h3>
						<?php
                                          
										  $sql="SELECT * FROM tbl_shops WHERE ID =".$_SESSION["RegId"];
                                          $i=1;
                                          $tbl=mysqli_query($con,$sql);
                                          if($tbl)
                                          {
	                                        while($row=mysqli_fetch_array($tbl))
	                                          {
                                        ?> 
						
						
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location"></i></span> <?php echo $row["Address"]; ?></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920"><?php echo $row["Contact_Number"]; ?></a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com"><?php echo $row["City"]; ?></a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="#"><?php echo $row["Business_name"]; ?></a></p>
							</div>
						</div>
						
						<?php
	                                          }
                                             }

                                            ?>  
						
						
					</div>
					<div class="col-md-10 col-md-offset-1">
						<div class="contact-wrap">
							<h3>Get In Touch</h3>
							<form action="" method="post">
								<div class="row form-group">
									<div class="col-md-6 padding-bottom">
										<label for="fname">First Name</label>
										<input type="text" id="fname" class="form-control" name="txt_FN" placeholder="Your firstname">
									</div>
									<div class="col-md-6">
										<label for="lname">Last Name</label>
										<input type="text" id="lname" class="form-control" name="txt_LN" placeholder="Your lastname">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label for="email">Email</label>
										<input type="text" id="email" class="form-control" name="txt_Email" placeholder="Your email address">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label for="subject">Subject</label>
										<input type="text" id="subject" class="form-control" name="txt_Subject" placeholder="Your subject of this message">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label for="message">Message</label>
										<textarea name="message" id="message" cols="30" rows="10" name="txt_Message" class="form-control" placeholder="Say something about us"></textarea>
									</div>
								</div>
								<div class="form-group text-center">
									<input type="submit" value="Send Message" name="btnSubmitC" class="btn btn-primary">
								</div>
							</form>		
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="map" class="colorlib-map"></div>

		<?php
		include("Footer.php");
		
		?>
	</div>


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

