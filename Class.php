<?php

class homeModel
{
	
   function chk_Login()
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
			     header("Location:login.php");
			      
		       }
			       
      }
	  
	  function add_Shops()
	  {
	  		global $con;
	     $sql="INSERT INTO tbl_shops (Business_name,GSTIN,Address,City,State,Contact_Person,Contact_Email,Contact_Number,Username,Email,isActive,Created_at) VALUES ('".$_REQUEST["txt_business_name"]."','".$_REQUEST["txt_GSTIN"]."','".$_REQUEST["txt_Address"]."','".$_REQUEST["txt_City"]."','".$_REQUEST["txt_State"]."','".$_REQUEST["txt_Contact_Person"]."','".$_REQUEST["txt_Contact_Email"]."','".$_REQUEST["txt_Contact_Number"]."','".$_REQUEST["txt_UserName"]."','".$_REQUEST["txt_Email"]."','".$_REQUEST["txt_IsActive"]."','".$_REQUEST["txt_Created_At"]."')";
    mysqli_query($con,$sql);
	
	  }
	  
	  function edit_Shops()
	  {
	    $sql="UPDATE tbl_shops SET Business_name='".$_REQUEST["txt_business_nameE"]."',GSTIN='".$_REQUEST["txt_GSTINE"]."',Address='".$_REQUEST["txt_AddressE"]."',City='".$_REQUEST["txt_CityE"]."',State='".$_REQUEST["txt_StateE"]."',Contact_Person='".$_REQUEST["txt_Contact_PersonE"]."',Contact_Email='".$_REQUEST["txt_Contact_EmailE"]."',Contact_Number='".$_REQUEST["txt_Contact_NumberE"]."',Username='".$_REQUEST["txt_UserNameE"]."',Email='".$_REQUEST["txt_EmailE"]."',isActive='".$_REQUEST["txt_IsActiveE"]."',Created_at='".$_REQUEST["txt_Created_AtE"]."' where ID=".$_REQUEST["eid"];
    mysqli_query($con,$sql);
	  }
	  
	  function del_Shops()
	  {
	  $sql="DELETE FROM tbl_shops	 WHERE ID=".$_REQUEST["did"];
	  mysqli_query($con,$sql);
	  }
}

?>