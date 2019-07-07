<?php

include("Connection.php");

if(isset($_REQUEST["did"]))
{
	$sql="DELETE FROM tbl_advertisiment_manager	 WHERE AM_ID=".$_REQUEST["did"];
	  mysqli_query($con,$sql);
}

if(isset($_REQUEST["btn_Submit"]))
{
    $sql="SELECT MAX(AM_ID) as Id FROM tbl_advertisiment_manager ";
    $tbl=mysqli_query($con,$sql);
	
	if($row=mysqli_fetch_array($tbl))
	{
		$id= $row["Id"];
		
		$fn=$_FILES["fu_Photo"]["name"];
		$spath=$_FILES["fu_Photo"]["tmp_name"];
		
		$ext=pathinfo($fn, PATHINFO_EXTENSION);
		//echo $ext;
		
		if($ext== 'jpg' ||$ext== 'gif' ||$ext== 'dmg' || $ext== 'jfif')
		{
		$dpath="Advertisiment_Img/".$id.".".$ext; 
		//echo $dpath;
		move_uploaded_file($spath,$dpath);
	
	 
	     $sql="INSERT INTO tbl_advertisiment_manager (Photo_Url,Link,Description,offer,Is_Active) VALUES ('".$dpath."','".$_REQUEST["txt_Link"]."','".$_REQUEST["txt_Description"]."','".$_REQUEST["txt_Offer"]."','".$_REQUEST["txt_Is_Active"]."')";
    mysqli_query($con,$sql);
	
	}
	else
	echo "Format is wrong";
		
	}
}

if(isset($_REQUEST["btn_SubmitE"]))
{
	$sql="UPDATE tbl_advertisiment_manager SET Photo_Url='".$_REQUEST["fu_PhotoE"]."',Link='".$_REQUEST["txt_LinkE"]."',Description='".$_REQUEST["txt_DescriptionE"]."',offer='".$_REQUEST["txt_offerE"]."',Is_Active='".$_REQUEST["txt_Is_ActiveE"]."' WHERE AM_ID=".$_REQUEST["eid"];
    mysqli_query($con,$sql);
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
										<li>Advertisiment Manager</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Advertisiment Manager</h3>
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
										<h4><i class="fa fa-table"></i>SHOPS</h4>
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
												<th>AM ID</th>
												<th>Photo Url</th>
												<th>Link</th>
												<th>Description</th>
												<th>offer</th>
												
												<th>IS Active</th>
												<th>DELETE</th>
												<th>EDIT</th>
												
											  </tr>
											</thead>
										<?php
                                          $sql="SELECT * FROM tbl_advertisiment_manager";
                                          $i=1;
                                          $tbl=mysqli_query($con,$sql);
                                          if($tbl)
                                          {
	                                        while($row=mysqli_fetch_array($tbl))
	                                          {
                                        ?> 
											<tbody>
											  <tr>
												<td><?php echo $row["AM_ID"]; ?></td>
												<td><img src="<?php echo $row["Photo_Url"]; ?>"  width="100px"/></td>
												<td><?php echo $row["Link"]; ?></td>
												<td><?php echo $row["Description"]; ?></td>
												<td><?php echo $row["offer"]; ?></td>
												<td><?php echo $row["Is_Active"]; ?></td>
												
												
												<td><a href="Advertisement_Manager.php?did=<?php echo $row["AM_ID"]; ?>">Delete</a></td>
                                                <td><a href="Advertisement_Manager.php?id=3&eid=<?php echo $row["AM_ID"]; ?>">Edit</a></td>
												
												
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
									 
									 <?php 
	                                
									 if( isset($_REQUEST["id"]) && $_REQUEST["id"]=="2")
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
												<form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" >
												  <div class="form-group">
													<label class="col-sm-3 control-label"><a href="Advertisement_Manager.php?id=1">Back</a></label>
													
												  </div>
												  
												   <div class="form-group">
													<label class="col-sm-3 control-label">Photo_Url</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="file" name="fu_Photo">
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">Link</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" name="txt_Link">
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">Description</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" name="txt_Description" >
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">offer</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" name="txt_Offer" >
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">Is_Active</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" name="txt_Is_Active" >
													</div>
												  </div>
												   											   
													<label class="col-sm-3 control-label"></label>
													<div class="col-sm-9">
													  <input  type="submit" name="btn_Submit" value="ADD">
													</div>
												  </div>
												  
												  
												 </form>
											</div>
											
										</div>
										
										 </td>
                                 </tr>
									  <?php
                                       }
                                      ?> 
									  
									  <!-- Edit --> 
									  
									  <?php 
	                                   if( isset($_REQUEST["id"]) && $_REQUEST["id"]=="3")
	                                    {  
	                                     $sql="SELECT * FROM tbl_advertisiment_manager where AM_ID=".$_REQUEST["eid"];
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
												<form class="form-horizontal" role="form" enctype="multipart/form-data" >
												  <div class="form-group">
													<label class="col-sm-3 control-label"><a href="Advertisement_Manager.php?id=1">Back</a></label>
													
												  </div>
												  
												   <div class="form-group">
													<label class="col-sm-3 control-label">Photo_Url</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="file" value="<?php echo $row["Photo_Url"]; ?>" name="fu_PhotoE">
													</div>
												  </div>
												   
												   <div class="form-group">
													<label class="col-sm-3 control-label">Link</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" value="<?php echo $row["Link"]; ?>" name="txt_LinkE" >
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">Description</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" value="<?php echo $row["Description"]; ?>" name="txt_DescriptionE" >
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">offer</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" value="<?php echo $row["offer"]; ?>" name="txt_offerE" >
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">Is_Active</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" value="<?php echo $row["Is_Active"]; ?>" name="txt_Is_ActiveE" >
													</div>
												  </div>
												  											   
												  <div class="form-group">
													<label class="col-sm-3 control-label"></label>
													<div class="col-sm-9">
													  <input  type="submit" name="btn_SubmitE" value="Submit">
													</div>
												  </div>
												  
												  
												 </form>
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
	
	<!-- /JAVASCRIPTS -->
</body>
</html>