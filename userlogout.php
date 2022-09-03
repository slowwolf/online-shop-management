<?php

session_start();

if($_SESSION['userId']==0)
				{
					
					unset($_SESSION["userId"]);



                     header("location:index.php");
					
				}
			

?>