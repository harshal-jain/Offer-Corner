<?php
include("Connection.php");


                                          $selected_option=$_POST['option_value'];
                                          $sql="SELECT Template FROM tbl_email_template_manager WHERE Title =' $selected_option '";
                                          
                                          $tbl=mysqli_query($con,$sql);
                                          if($tbl)
                                          {
	                                        while($row=mysqli_fetch_array($tbl))
	                                          {
											   echo $row['Template'] ;
											  }
										  }
                                        

?>