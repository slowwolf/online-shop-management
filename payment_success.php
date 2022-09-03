<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}

if(isset($_POST["submit"])){	

	# code...
	    
		$userid = $_POST["userid"];
		
		
		
		$prodid = $_POST["prodid"];
		$qty1  = $_POST["qty1"];
		$total = $_POST["total"];
		$fullname = $_POST["fullname"];;
		$email = $_POST["email"];
		$address = $_POST["adr"];
		$city = $_POST["city"];
		$state = $_POST["state"];
			$zip = $_POST["zip"];
				$paymenttype = $_POST["payment-method"];
					
						
						
		
	

		

		include_once("db.php");
		$sql = "SELECT p_id,qty FROM cart WHERE user_id = '$userid'";
		$query = mysqli_query($con,$sql);
		if (mysqli_num_rows($query) > 0) {
			
			# code...
			while ($row=mysqli_fetch_array($query)) {
			$product_id[] = $row["p_id"];
			
			
			}

			for ($i=0; $i < count($product_id); $i++) { 
				$sql = "INSERT INTO orders (user_id,product_id,qty,trx_id,p_status,full_name,email,address,city,state,zip_code,payment_type,total_prize) VALUES ('$userid','$prodid','$qty1','none','pending','$fullname','$email','$address','$city','$state','$zip','$paymenttype','$total')";
				mysqli_query($con,$sql);
			}

			$sql = "DELETE FROM cart WHERE user_id = $userid";
			if (mysqli_query($con,$sql)) {
				
				include "header.php";
				
				?>
					
					
						
							<center>
							
											<h1>Thankyou </h1>
											<hr/>
											<p>Hello <?php echo "<b>".$_SESSION["name"]."</b>"; ?>,Your payment process is 
											successfully completed and your Transaction id is <b><?php echo "PENDING"; ?></b><br/>
											you can continue your Shopping <br/></p>
											<a href="t.php" class="btn btn-success btn-lg">Continue Shopping</a>
									</center>	
					
					
				

				<?php
			}
		}else{
			header("location:t.php");
		}
		
	
}



?>

















































