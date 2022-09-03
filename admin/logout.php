<?php 


session_start();
unset($_SESSION["uid"]);
if($_SESSION['type'] ==1)
				{
					unset($_SESSION["userId"]);
					unset($_SESSION["type"]);
					unset($_SESSION["usrname"]);



                    header("location:../login1.php");
					
				}
				
				

				else{
					
					unset($_SESSION["userId"]);
					unset($_SESSION["type"]);
					unset($_SESSION["usrname"]);



                     header("location:../index.php");
					
				}
			
			
			



?>