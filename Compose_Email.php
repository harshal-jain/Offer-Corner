<?php

include("Connection.php");



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['btn_Submit']))
{

// Load Composer's autoloader
require 'vendor/autoload.php';

require 'PHPMailerAutoload.php';
// require 'index.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'harshaljain19@gmail.com';                 // SMTP username
$mail->Password = 'xyzzyspoon(ABCD)';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('harshaljain19@gmail.com', 'Mailer');
$mail->addAddress($_POST['txt_Email_To'],'Harshal');     // Add a recipient
               // Name is optional
$mail->addReplyTo('harshaljain19@gmail.com');


//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $_POST['txt_Subject'];

//
 $sql="SELECT Name FROM tbl_users WHERE Email =' $selected_option '";
                                          
                                          $tbl=mysqli_query($con,$sql);
                                          if($tbl)
                                          {
	                                        while($row=mysqli_fetch_array($tbl))
	                                          {
											   $templateHTML= str_replace("{{Name}}",$row['Name'],$email_template);
											   $mail->Body    = $templateHTML;
											  }
										  }

//

// $mail->AltBody = $_POST['txt_Message'];
$message = "";
if(!$mail->send()) {
    $message = "Message could not be sent.<br />";
    $message .= 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    $message =  'Message has been sent';
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
	<script>
    function load_new_content(){
       
     var selected_option_value=$("#select1 option:selected").val(); //get the value of the current selected option.

     $.post("Selected_Template.php", {option_value: selected_option_value},
        function(data){ 
              $("#showtemplate").val(data);
			  alert(data); // just to see what it returns
         }
     );
} 
    
    </script> 
	
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
										<li>Compose Email</li>
									</ul>
									<!-- /BREADCRUMBS -->
									<div class="clearfix">
										<h3 class="content-title pull-left">Compose Email</h3>
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
								<div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="hpanel email-compose mg-b-15">
                            <div class="panel-heading hbuilt">
                                <div class="p-xs h4">
                                    New message
                                </div>
                            </div>
                            <div class="panel-heading hbuilt">
                                <div class="p-xs">
                                    <form method="post" class="form-horizontal">
									
                                        <div class="form-group">
                                            <label class="col-sm-1 control-label text-left">To:</label>
                                            <div class="col-sm-11">
                                                <input type="text" class="form-control input-sm" name="txt_Email_To" placeholder="example@email.com">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-1 control-label text-left">Cc:</label>
                                            <div class="col-sm-11">
                                                <input type="text" class="form-control input-sm">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-1 control-label text-left">Sub:</label>
                                            <div class="col-sm-11">
                                                <input type="text" class="form-control input-sm" name="txt_Subject" placeholder="Enter Email subject">
                                            </div>
                                        </div>
										
										 <div class="form-group">
                                            <label class="col-sm-1 control-label text-left">Template</label>
                                            <div class="col-sm-11">
                                                <select  class="form-control input-sm" id="select1" name="Template_Select" onChange="load_new_content()">
												
<?php
$sql="SELECT * FROM tbl_email_template_manager";
$tbl=mysqli_query($con,$sql);

if($tbl)
{
 while($row=mysqli_fetch_array($tbl))
     
	 {
	 
?>
	 <option><?php echo $row["Title"]."<br>"; ?></option>
	 
	 
	 <?php
	 
	 }




}
?>
</select>
                                            </div>
                                        </div>
										
										
                                    
                                </div>
                            </div>
                            <div class="panel-body no-padding">
                                <div class="summernote6">
								
                                    
                                    <p><textarea class="form-control" style="height:250px" id="showtemplate" size="150" name="txt_Body"></textarea></p>
                                    
                                </div>
                            </div>

                            <div class="panel-footer">
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <button class="btn btn-default"><i class="fa fa-edit"></i> Save</button>
                                        <button class="btn btn-default"><i class="fa fa-trash"></i> Discard</button>
                                    </div>
                                </div>
                                <input type="submit" name="btn_Submit" class="btn btn-primary ft-compse" value="Send Email">
                                <div class="btn-group">
                                    <button class="btn btn-default"><i class="fa fa-paperclip"></i> </button>
                                    <button class="btn btn-default"><i class="fa fa-image"></i> </button>
                                </div>
								</form>

                            </div>
							
							
                        </div>
						
                    </div>
								
								
								
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