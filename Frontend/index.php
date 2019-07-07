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
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
				 <?php
$sql="SELECT * FROM tbl_slider_manager Where Slide_Number IN(1,2,3)";
$tbl=mysqli_query($con,$sql);
if($tbl)
{
	while($row=mysqli_fetch_array($tbl))
	{
?> 
			   	<li style="background-image: url(<?php echo '../'.$row["Photo_Url"]; ?>);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">Men's</h1>
					   					<h2 class="head-2">Jeans</h2>
					   					<h2 class="head-3">Collection</h2>
					   					<p class="category"><span>New stylish shirts, pants &amp; Accessories</span></p>
					   					<p><a href="contact.php" class="btn btn-primary">Shop Collection</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
				
				<?php
	}
}

?>

 <?php
 /*
$sql="SELECT * FROM tbl_slider_manager Where Slide_Number IN('2')";
$tbl=mysqli_query($con,$sql);
if($tbl)
{
	while($row=mysqli_fetch_array($tbl))
	{
?>
				
			   	<li style="background-image: url(<?php echo '../'.$row["Photo_Url"]; ?>);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">Huge</h1>
					   					<h2 class="head-2">Sale</h2>
					   					<h2 class="head-3">45% off</h2>
					   					<p class="category"><span>New stylish shirts, pants &amp; Accessories</span></p>
					   					<p><a href="#" class="btn btn-primary">Shop Collection</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
				
				<?php
	}
}

?>
				<?php
$sql="SELECT * FROM tbl_slider_manager Where Slide_Number IN('3')";
$tbl=mysqli_query($con,$sql);
if($tbl)
{
	while($row=mysqli_fetch_array($tbl))
	{
?>


			   	<li style="background-image: url(<?php echo '../'.$row["Photo_Url"]; ?>);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">New</h1>
					   					<h2 class="head-2">Arrival</h2>
					   					<h2 class="head-3">up to 30% off</h2>
					   					<p class="category"><span>New stylish shirts, pants &amp; Accessories</span></p>
					   					<p><a href="#" class="btn btn-primary">Shop Collection</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
				
				<?php
	}
}
*/
?>
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-featured-product">
			<div class="container">
			
			 <?php
$sql="SELECT * FROM tbl_slider_manager_new";
$tbl=mysqli_query($con,$sql);
if($tbl)
{
	if($row=mysqli_fetch_array($tbl))
	{
?>  
  

			
				<div class="row">
					<div class="col-md-6">
						<a href="contact.php" class="f-product-1" style="background-image: url(<?php echo '../'.$row["Photo_Url1"]; ?>);">
							<div class="desc">
								<h2>Fahion <br>for <br>men</h2>
							</div>
						</a>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<a href="contact.php" class="f-product-2" style="background-image: url(<?php echo '../'.$row["Photo_Url2"]; ?>);">
									<div class="desc">
										<h2>New <br>Arrival <br>Dress</h2>
									</div>
								</a>
							</div>
							<div class="col-md-6">
								<a href="contact.php" class="f-product-2" style="background-image: url(<?php echo '../'.$row["Photo_Url3"]; ?>);">
									<div class="desc">
										<h2>Sale <br>20% <br>off</h2>
									</div>
								</a>
							</div>
							<div class="col-md-12">
								<a href="contact.php" class="f-product-2" style="background-image: url(<?php echo '../'.$row["Photo_Url4"]; ?>);">
									<div class="desc">
										<h2>Shoes <br>for <br>men</h2>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				
			<?php
	}
}

?>	
			</div>
		</div>
		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>New Arrival</span></h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
				
				
							 <?php
$sql="SELECT * FROM tbl_offer";
$tbl=mysqli_query($con,$sql);
if($tbl)
{
	while($row=mysqli_fetch_array($tbl))
	{
?>  
  
				
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(<?php echo '../Member/'.$row["Image"]; ?>);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="contact.php"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="contact.php"><i class="icon-eye"></i></a></span> 
										<span><a href="contact.php"><i class="icon-heart3"></i></a></span>
										<span><a href="contact.php"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="contact.php">Floral Dress</a></h3>
								<p class="price"><span>$300.00</span></p>
							</div>
						</div>
					</div>
					
					
						<?php
	}
}

?>	
			
					 
					
				</div>
			</div>
		</div>
		
	
		
							 <?php
$sql="SELECT * FROM tbl_advertisiment_manager Where AM_ID IN('5')";
$tbl=mysqli_query($con,$sql);
if($tbl)
{
	if($row=mysqli_fetch_array($tbl))
	{
?>  
  

		
		<div id="colorlib-intro" class="colorlib-intro" style="background-image: url(<?php echo '../'.$row["Photo_Url"] ; ?>);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="intro-desc">
							<div class="text-salebox">
								<div class="text-lefts">
									<div class="sale-box">
										<div class="sale-box-top">
											<h2 class="number">45</h2>
											<span class="sup-1">%</span>
											<span class="sup-2">Off</span>
										</div>
										<h2 class="text-sale">Sale</h2>
									</div>
								</div>
								<div class="text-rights">
									<h3 class="title">Just hurry up limited offer!</h3>
									<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									<p><a href="contact.php" class="btn btn-primary">Shop Now</a> <a href="contact.php" class="btn btn-primary btn-outline">Read more</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php
	}
}

?>	
			


		

		

		
		
		<div id="colorlib-subscribe">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-6 text-center">
							<h2><i class="icon-paperplane"></i>Sign Up for a Newsletter</h2>
						</div>
						<div class="col-md-6">
							<form class="form-inline qbstp-header-subscribe">
								<div class="row">
									<div class="col-md-12 col-md-offset-0">
										<div class="form-group">
											<input type="text" class="form-control" id="email" placeholder="Enter your email">
											<button type="submit" class="btn btn-primary">Subscribe</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

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
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

