<?php

include("Connection.php");

if(isset($_REQUEST["did"]))
{
	$sql="DELETE FROM tbl_shops	 WHERE ID=".$_REQUEST["did"];
	  mysqli_query($con,$sql);
}

if(isset($_REQUEST["btn_Submit"]))
{
	 
	     $sql="INSERT INTO tbl_shops (Business_name,GSTIN,Address,City,State,Contact_Person,Contact_Email,Contact_Number,Username,isActive,Created_at) VALUES ('".$_REQUEST["txt_business_name"]."','".$_REQUEST["txt_GSTIN"]."','".$_REQUEST["txt_Address"]."','".$_REQUEST["txt_City"]."','".$_REQUEST["txt_State"]."','".$_REQUEST["txt_Contact_Person"]."','".$_REQUEST["txt_Contact_Email"]."','".$_REQUEST["txt_Contact_Number"]."','".$_REQUEST["txt_UserName"]."','".$_REQUEST["txt_IsActive"]."','".$_REQUEST["txt_Created_At"]."')";
    mysqli_query($con,$sql);
}

if(isset($_REQUEST["btn_SubmitE"]))
{
	$sql="UPDATE tbl_shops SET Business_name='".$_REQUEST["txt_business_nameE"]."',GSTIN='".$_REQUEST["txt_GSTINE"]."',Address='".$_REQUEST["txt_AddressE"]."',City='".$_REQUEST["txt_CityE"]."',State='".$_REQUEST["txt_StateE"]."',Contact_Person='".$_REQUEST["txt_Contact_PersonE"]."',Contact_Email='".$_REQUEST["txt_Contact_EmailE"]."',Contact_Number='".$_REQUEST["txt_Contact_NumberE"]."',Username='".$_REQUEST["txt_UserNameE"]."',isActive='".$_REQUEST["txt_IsActiveE"]."',Created_at='".$_REQUEST["txt_Created_AtE"]."' WHERE ID=".$_REQUEST["eid"];
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
						
						<?php
						include("PageHeader.php");
						?>
						
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
												<th><a href="Shop1.php?id=2">Add</a></th>
										
												
											  </tr>
											  <tr>
												<th>ID</th>
												<th>Business Name</th>
												<th>GSTIN</th>
												<th>Address</th>
												<th>City</th>
												<th>State</th>
												<th>Contact Person</th>
												<th>Contact Email</th>
												<th>Contact Number</th>
												<th>Username</th>
												
												<th>IS Active</th>
												<th>Created At</th>
												<th>DELETE</th>
												<th>EDIT</th>
												
											  </tr>
											</thead>
										<?php
                                          $sql="SELECT * FROM tbl_shops";
                                          $i=1;
                                          $tbl=mysqli_query($con,$sql);
                                          if($tbl)
                                          {
	                                        while($row=mysqli_fetch_array($tbl))
	                                          {
                                        ?> 
											<tbody>
											  <tr>
												<td><?php echo $row["ID"]; ?></td>
												<td><?php echo $row["Business_name"]; ?></td>
												<td><?php echo $row["GSTIN"]; ?></td>
												<td><?php echo $row["Address"]; ?></td>
												<td><?php echo $row["City"]; ?></td>
												<td><?php echo $row["State"]; ?></td>
												<td><?php echo $row["Contact_Person"]; ?></td>
												<td><?php echo $row["Contact_Email"]; ?></td>
												<td><?php echo $row["Contact_Number"]; ?></td>
												<td><?php echo $row["Username"]; ?></td>
												
												<td><?php echo $row["isActive"]; ?></td>
												
												<td><?php echo $row["Created_at"]; ?></td>
												<td><a href="Shop1.php?did=<?php echo $row["ID"]; ?>">Delete</a></td>
                                                <td><a href="Shop1.php?id=3&eid=<?php echo $row["ID"]; ?>">Edit</a></td>
												
												
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
												<form class="form-horizontal" role="form" method="post">
												  <div class="form-group">
													<label class="col-sm-3 control-label"><a href="Shop1.php?id=1">Back</a></label>
													
												  </div>
												  
												   <div class="form-group">
													<label class="col-sm-3 control-label">business_name</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" name="txt_business_name">
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">GSTIN</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" name="txt_GSTIN">
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">Address</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" name="txt_Address" >
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">City</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" name="txt_City" >
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">State</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" name="txt_State" >
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">Contact Person</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" name="txt_Contact_Person" >
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">Contact Email</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" name="txt_Contact_Email" >
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">Contact Number</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" name="txt_Contact_Number" >
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">UserName</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" name="txt_UserName" >
													</div>
												  </div>
												   
												   <div class="form-group">
													<label class="col-sm-3 control-label">IsActive</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" name="txt_IsActive" >
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">Created At</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" name="txt_Created_At">
													</div>
												  </div>
												  <div class="form-group">
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
	                                     $sql="SELECT * FROM tbl_shops where ID=".$_REQUEST["eid"];
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
												<form class="form-horizontal" role="form" method="post">
												  <div class="form-group">
													<label class="col-sm-3 control-label"><a href="Shop1.php?id=1">Back</a></label>
													
												  </div>
												  
												   <div class="form-group">
													<label class="col-sm-3 control-label">business_name</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" value="<?php echo $row["Business_name"]; ?>" name="txt_business_nameE">
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">GSTIN</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" value="<?php echo $row["GSTIN"]; ?>" name="txt_GSTINE">
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">Address</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" value="<?php echo $row["Address"]; ?>" name="txt_AddressE" >
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">City</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" value="<?php echo $row["City"]; ?>" name="txt_CityE" >
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">State</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" value="<?php echo $row["State"]; ?>" name="txt_StateE" >
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">Contact Person</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" value="<?php echo $row["Contact_Person"]; ?>" name="txt_Contact_PersonE" >
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">Contact Email</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" value="<?php echo $row["Contact_Email"]; ?>" name="txt_Contact_EmailE" >
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">Contact Number</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" value="<?php echo $row["Contact_Number"]; ?>" name="txt_Contact_NumberE" >
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">UserName</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" value="<?php echo $row["Username"]; ?>" name="txt_UserNameE" >
													</div>
												  </div>
												  
												   <div class="form-group">
													<label class="col-sm-3 control-label">IsActive</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" value="<?php echo $row["isActive"]; ?>" name="txt_IsActiveE" >
													</div>
												  </div>
												   <div class="form-group">
													<label class="col-sm-3 control-label">Created At</label>
													<div class="col-sm-9">
													  <input class="form-control" id="focusedInput" type="text" value="<?php echo $row["Created_at"]; ?>" name="txt_Created_AtE">
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