<?php

include("Connection.php");

if(!isset($_SESSION["RegId"]))
{
header("Location: login.php");
exit(); 
}

?>
<?php


if(isset($_REQUEST["btn_Submit"]))
{ 
	$sql="SELECT * FROM tbl_shops where ID='".$_SESSION["RegId"]."'";
	$tbl=mysqli_query($con,$sql);
	if($tbl)
		if(mysqli_affected_rows($con)>0)
		{
			$sql="Update tbl_shops Set Business_name='".$_REQUEST["txt_Business_name"]."',GSTIN='".$_REQUEST["txt_GSTIN"]."',City='".$_REQUEST["txt_City"]."',Address='".$_REQUEST["txt_Address"]."',Contact_Number='".$_REQUEST["txt_Contact_Number"]."' where ID='".$_SESSION["RegId"]."'";
		mysqli_query($con,$sql);
			echo "Successfully Updated";
		}
		else
		{
			//echo "Already Registered";
		}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Cloud Admin | Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="css/cloud-admin.css" >
	<link rel="stylesheet" type="text/css"  href="css/themes/default.css" id="skin-switcher" >
	<link rel="stylesheet" type="text/css"  href="css/responsive.css" >
	<!-- STYLESHEETS --><!--[if lt IE 9]><script src="js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- ANIMATE -->
	<link rel="stylesheet" type="text/css" href="css/animatecss/animate.min.css" />
	<!-- DATE RANGE PICKER -->
	<link rel="stylesheet" type="text/css" href="js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	<!-- TODO -->
	<link rel="stylesheet" type="text/css" href="js/jquery-todo/css/styles.css" />
	<!-- FULL CALENDAR -->
	<link rel="stylesheet" type="text/css" href="js/fullcalendar/fullcalendar.min.css" />
	<!-- GRITTER -->
	<link rel="stylesheet" type="text/css" href="js/gritter/css/jquery.gritter.css" />
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- HEADER -->
	
	<?php
	include("Header.php");
	?>
	
	<!--/HEADER -->
	<!-- PAGE -->
	<section id="page">
				<!-- SIDEBAR -->
				
				<?php
	            include("Sidebar.php");
	            ?>
				
				<!-- /SIDEBAR -->
		<div id="main-content">
			<!-- SAMPLE BOX CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="box-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  <h4 class="modal-title">Box Settings</h4>
					</div>
					<div class="modal-body">
					  Here goes box setting content.
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  <button type="button" class="btn btn-primary">Save changes</button>
					</div>
				  </div>
				</div>
			  </div>
			<!-- /SAMPLE BOX CONFIGURATION MODAL FORM-->
			<div class="container">
				<div class="row">
					<div id="content" class="col-lg-12">
						<!-- PAGE HEADER-->
						
						<div class="row">
							<div class="col-sm-12">
								<div class="page-header">
									<!-- STYLER -->
									
									<!-- /STYLER -->
									<!-- BREADCRUMBS -->
									<ul class="breadcrumb">
										<li>
											<i class="fa fa-home"></i>
											<a href="index.php">Home</a>
										</li>
										<li>Edit Profile</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Edit Profile</h3>
										<!-- DATE RANGE PICKER -->
										<?php
										include("DateRangePicker.php");
										?>
										<!-- /DATE RANGE PICKER -->
									</div>
									<div class="description">Overview</div>
								</div>
							</div>
						</div>
						
						<!-- /PAGE HEADER -->
						<!-- DASHBOARD CONTENT -->
						<div class="row">
							<!-- COLUMN 1 -->
							<div class="col-md-6">
								<div class="row">
								 
								  
								</div>
								<div class="row">
									
							   </div>
							</div>
							<!-- /COLUMN 1 -->
							<div class="box border green">
											<div class="box-title">
												<h4><i class="fa fa-bars"></i>Edit Profile</h4>
												<div class="tools hidden-xs">
													<a href="#box-config" data-toggle="modal" class="config">
														<i class="fa fa-cog"></i>
													</a>
													<a href="javascript:;" class="reload">
														<i class="fa fa-refresh"></i>
													</a>
													<a href="javascript:;" class="collapse">
														<i class="fa fa-chevron-up"></i>
													</a>
													<a href="javascript:;" class="remove">
														<i class="fa fa-times"></i>
													</a>
												</div>
											</div>
											<div class="box-body big">
												<form class="form-horizontal" role="form">
												
												<?php
$sql="SELECT * FROM tbl_shops where ID='".$_SESSION["RegId"]."'";
$tbl=mysqli_query($con,$sql);
if($tbl)
{
	while($row=mysqli_fetch_array($tbl))
	{
?>
												
												  <div class="form-group">
													<label class="col-sm-3 control-label">Business_name</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" name="txt_Business_name" value="<?php echo $row["Business_name"]; ?>">
													</div>
												  </div>
												  <div class="form-group">
													<label class="col-sm-3 control-label">GSTIN</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" name="txt_GSTIN" value="<?php echo $row["GSTIN"]; ?>">
													</div>
												  </div>
												  <div class="form-group">
													<label class="col-sm-3 control-label">City</label>
													<div class="col-sm-9">
														<input type="text"  title="Tooltip on focus" class="form-control tip-focus" name="txt_City" value="<?php echo $row["City"]; ?>">
													</div>
												  </div>
												  <div class="form-group">
													<label class="col-sm-3 control-label">Address</label>
													<div class="col-sm-9">
														<input type="text"  title="Tooltip on hover" class="form-control tip" name="txt_Address" value="<?php echo $row["Address"]; ?>">
													</div>
												  </div>
												  <div class="form-group has-success">
													<label class="col-sm-3 control-label">Contact_Number</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" id="inputSuccess" name="txt_Contact_Number" value="<?php echo $row["Contact_Number"]; ?>">														
													</div>
												  </div>
												  
												  
												  <?php
		
	}
}

?>

                                                  <div class="form-group has-success">
													<label class="col-sm-3 control-label"></label>
													<div class="col-sm-9">
														<input type="submit" class="form-control" id="inputSuccess" name="btn_Submit" value="UPDATE">														
													</div>
												  </div>
												  
												 </form>
											</div>
										</div>
							<!-- COLUMN 2 -->
							
							<!-- /COLUMN 2 -->
						</div>
					   <!-- /DASHBOARD CONTENT -->
					   <!-- HERO GRAPH -->
						<div class="row">
							
						</div>
						<!-- /HERO GRAPH -->
						<!-- NEW ORDERS & STATISTICS -->
						<div class="row">
							<!-- NEW ORDERS -->
							
							<!-- /NEW ORDERS -->
							<!-- STATISTICS -->
							<div class="col-md-6">
								<div class="row">
									
									
								</div>
							</div>
							<!-- /STATISTICS -->
							
						</div>
						<!-- /NEW ORDERS & STATISTICS -->
						<!-- CALENDAR & CHAT -->
						<div class="row">
							<!-- CALENDAR -->
							
							<!-- /CALENDAR -->
							<!-- CHAT -->
							<div class="col-md-6">
								<!-- BOX -->
								
								<!-- /BOX -->
							</div>
							<!-- CHAT -->
						</div>
						<!-- /CALENDAR & CHAT -->
						<div class="footer-tools">
							<span class="go-top">
								<i class="fa fa-chevron-up"></i> Top
							</span>
						</div>
					</div><!-- /CONTENT-->
				</div>
			</div>
		</div>
	</section>
	<!--/PAGE -->
	<!-- JAVASCRIPTS -->
	
	<?php
	include("JavaScript.php");
	?>
	
	<!-- /JAVASCRIPTS -->
</body>
</html>