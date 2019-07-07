<?php

include("Connection.php");





if(isset($_REQUEST["btn_SubmitE"]))
{

	//Short Banner Upload Start
	$fn=$_FILES["fu_PhotoE1"]["name"];
	if(!($fn=="" || $fn== null))
	{	 
		$type=$_FILES["fu_PhotoE1"]["type"];
		$size=$_FILES["fu_PhotoE1"]["size"];
	
		if($type=="image/jpg" ||$type=="image/png"||$type=="image/bmp"|| $type=="image/jpeg"||$type=="image/gif")
		{
			$ext=pathinfo($_FILES["fu_PhotoE1"]["name"],PATHINFO_EXTENSION);
			$fname=$_REQUEST["eid"]."-Short.".$ext;
			
			move_uploaded_file($_FILES["fu_PhotoE1"]["tmp_name"],"Main_Offer/".$fname);
			$fn="Main_Offer/".$fname;
			
			$sql="UPDATE tbl_slider_manager_new SET Photo_Url1='".$fn."'";
			$sql=$sql."WHERE SM_ID =".$_REQUEST["eid"];
			 
			
			mysqli_query($con,$sql);
			$msg="Successfully Added";
		}	
		else 
		{
			$msg="Invalid File type or Size";
		}
	}
	
	//Short Banner Upload Start
	$fn=$_FILES["fu_PhotoE2"]["name"];
	if(!($fn=="" || $fn== null))
	{	 
		$type=$_FILES["fu_PhotoE2"]["type"];
		$size=$_FILES["fu_PhotoE2"]["size"];
	
		if($type=="image/jpg" ||$type=="image/png"||$type=="image/bmp"|| $type=="image/jpeg"||$type=="image/gif")
		{
			$ext=pathinfo($_FILES["fu_PhotoE2"]["name"],PATHINFO_EXTENSION);
			$fname=$_REQUEST["eid"]."1-Short.".$ext;
			
			move_uploaded_file($_FILES["fu_PhotoE2"]["tmp_name"],"Main_Offer/".$fname);
			$fn="Main_Offer/".$fname;
			
			$sql="UPDATE tbl_slider_manager_new SET Photo_Url2='".$fn."'";
			$sql=$sql."WHERE SM_ID =".$_REQUEST["eid"];
			 
			
			mysqli_query($con,$sql);
			$msg="Successfully Added";
		}	
		else 
		{
			$msg="Invalid File type or Size";
		}
	}
	
	//Short Banner Upload Start
	$fn=$_FILES["fu_PhotoE3"]["name"];
	if(!($fn=="" || $fn== null))
	{	 
		$type=$_FILES["fu_PhotoE3"]["type"];
		$size=$_FILES["fu_PhotoE3"]["size"];
	
		if($type=="image/jpg" ||$type=="image/png"||$type=="image/bmp"|| $type=="image/jpeg"||$type=="image/gif")
		{
			$ext=pathinfo($_FILES["fu_PhotoE3"]["name"],PATHINFO_EXTENSION);
			$fname=$_REQUEST["eid"]."2-Short.".$ext;
			
			move_uploaded_file($_FILES["fu_PhotoE3"]["tmp_name"],"Main_Offer/".$fname);
			$fn="Main_Offer/".$fname;
			
			$sql="UPDATE tbl_slider_manager_new SET Photo_Url3='".$fn."'";
			$sql=$sql."WHERE SM_ID =".$_REQUEST["eid"];
			 
			
			mysqli_query($con,$sql);
			$msg="Successfully Added";
		}	
		else 
		{
			$msg="Invalid File type or Size";
		}
	}
	
	//Short Banner Upload Start
	$fn=$_FILES["fu_PhotoE4"]["name"];
	if(!($fn=="" || $fn== null))
	{	 
		$type=$_FILES["fu_PhotoE4"]["type"];
		$size=$_FILES["fu_PhotoE4"]["size"];
	
		if($type=="image/jpg" ||$type=="image/png"||$type=="image/bmp"|| $type=="image/jpeg"||$type=="image/gif")
		{
			$ext=pathinfo($_FILES["fu_PhotoE4"]["name"],PATHINFO_EXTENSION);
			$fname=$_REQUEST["eid"]."3-Short.".$ext;
			
			move_uploaded_file($_FILES["fu_PhotoE4"]["tmp_name"],"Main_Offer/".$fname);
			$fn="Main_Offer/".$fname;
			
			$sql="UPDATE tbl_slider_manager_new SET Photo_Url4='".$fn."'";
			$sql=$sql."WHERE SM_ID =".$_REQUEST["eid"];
			 
			
			mysqli_query($con,$sql);
			$msg="Successfully Added";
		}	
		else 
		{
			$msg="Invalid File type or Size";
		}
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
	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" >
	
	
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
										<li>Offer Manager</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Offer Manager</h3>
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
							
							<div class="box border pink">
									<div class="box-title">
										<h4><i class="fa fa-table"></i>OFFER</h4>
										<div class="tools">
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
									<div class="box-body">
									
										<table class="table">
										
										
																			
									 <?php 
	                                    if(!isset($_REQUEST["id"]) || (isset($_REQUEST["id"]) && $_REQUEST["id"]=="1"))
	                                      {  
                                     ?>
									 <tr>
									  <td>
											<thead>
											  <tr>
												
										
												
											  </tr>
											  <tr>
												<th>Image 1</th>
												<th>Image 2</th>
												<th>Image 3</th>
												<th>Image 4</th>
												
												
												<th>EDIT</th>
												
											  </tr>
											</thead>
										<?php
                                          $sql="SELECT * FROM tbl_slider_manager_new ";
                                          $i=1;
                                          $tbl=mysqli_query($con,$sql);
                                          if($tbl)
                                          {
	                                        while($row=mysqli_fetch_array($tbl))
	                                          {
                                        ?> 
											<tbody>
											  <tr>
												<td><img src="<?php echo $row["Photo_Url1"]; ?>"  width="100px"/></td>
												<td><img src="<?php echo $row["Photo_Url2"]; ?>"  width="100px"/></td>
												<td><img src="<?php echo $row["Photo_Url3"]; ?>"  width="100px"/></td>
												<td><img src="<?php echo $row["Photo_Url4"]; ?>"  width="100px"/></td>
												
												
												
												
                                                <td><a href="Main_Offer.php?id=3&eid=<?php echo $row["SM_ID"]; ?>">Edit</a></td>
												
												
											  </tr>
											  
											</tbody>
											<?php
	                                          }
                                             }

                                            ?>  
											
										  
	
	
	                                  </td>
                                 </tr>
								 
								 
                                      <?php
                                         }
                                      ?>
									  
									 <!-- Add --> 
									 
									
									  
									  <!-- Edit --> 
									  
									  <?php 
	                                   if( isset($_REQUEST["id"]) && $_REQUEST["id"]=="3")
	                                    {  
	                                     $sql="SELECT * FROM tbl_slider_manager_new where SM_ID=".$_REQUEST["eid"];
                                         $tbl=mysqli_query($con,$sql);
                                         if($tbl)
                                          {
	                                       if($row=mysqli_fetch_array($tbl))
	                                        {
                                      ?>
									  
									  <tr>
									  <td>
									  
									  <div class="box border green">
											<div class="box-title">
												<h4><i class="fa fa-bars"></i>ENTRIES</h4>
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
												
												  <div class="form-group">
													<label class="col-sm-3 control-label"><a href="Main_Offer.php?id=1">Back</a></label>
													
												  </div>
												  
												   <div class="form-group">
													<label class="col-sm-3 control-label">Image1</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="file"  name="fu_PhotoE1">
													</div>
												  </div>
												   
												   <div class="form-group">
													<label class="col-sm-3 control-label">Image2</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="file"  name="fu_PhotoE2">
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">Image3</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="file"  name="fu_PhotoE3">
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">Image4</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="file"  name="fu_PhotoE4">
													</div>
												  </div>
												  
												  											   
												  <div class="form-group">
													<label class="col-sm-3 control-label"></label>
													<div class="col-sm-9">
													  <input  type="submit" name="btn_SubmitE" value="Submit">
													</div>
												  </div>
												  
												  
												
											</div>
										</div>
										
										 </td>
                                 </tr>
									    <?php
                                        }}}
                                        ?>
									  
								 </table>
									  
									
							
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
	</form>
	<!-- /JAVASCRIPTS -->
</body>
</html>