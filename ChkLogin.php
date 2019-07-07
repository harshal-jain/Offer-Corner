<?php
include("connection.php");

session_start();

if(isset($_REQUEST["btn_Submit"]))
{ 
	$sql="SELECT * FROM tbl_users where Email='".$_REQUEST["txt_Email"]."' and Password='".$_REQUEST["txt_Password"]."'";
	$tbl=mysqli_query($con,$sql);
	if($tbl)
		if(mysqli_affected_rows($con)>0)
		{
			$_SESSION["Email"]=$_REQUEST["txt_Email"];			
			header("Location:index.php");
			//echo "";
		}
		else
		{
			header("error_404.php");
		}
}
?>
