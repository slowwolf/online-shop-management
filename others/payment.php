<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}

if (isset($_POST["submit"])) {

	# code...
	
		
		$cm_user_id = $_SESSION["uid"];
		
		
		
		
		$fullname = $_POST["fullname"];;
		$email = $_POST["email"];
		$address = $_POST["adr"];
		$city = $_POST["city"];
		$state = $_POST["state"];
			$zip = $_POST["zip"];
				$paymenttype = $_POST["payment-method"];
	

		

		include_once("db.php");
		$sql = "SELECT p_id,qty FROM cart WHERE user_id = '$cm_user_id'";
		$query = mysqli_query($con,$sql);
		if (mysqli_num_rows($query) > 0) {
			# code...
			while ($row=mysqli_fetch_array($query)) {
			$product_id[] = $row["p_id"];
			$qty[] = $row["qty"];
			$tnx_id = 963852+$cm_user_id + $row["p_id"];
			
			}

			for ($i=0; $i < count($product_id); $i++) { 
			    
				$sql = "INSERT INTO orders (user_id,product_id,tnx_id,qty,p_status,full_name,email,address,city,state,zip_code,payment_type) VALUES ('$cm_user_id','".$product_id[$i]."','".$tnx_id."','".$qty[$i]."','pending','$fullname','$email','$address','$city','$state','$zip','$paymenttype')";
				mysqli_query($con,$sql);
			}

			$sql = "DELETE FROM cart WHERE user_id = '$cm_user_id'";
			if (mysqli_query($con,$sql)) {
				?>
				

                 <?php include"header.php";?>				
							<link rel="stylesheet" href="css/bootstrap.min.css"/>
							<script src="js/jquery2.js"></script>
							<script src="js/bootstrap.min.js"></script>
							<script src="main.js"></script>
							<style>
								table tr td {padding:10px;}
							</style>
					
					
						<p><br/></p>
						<p><br/></p>
						<p><br/></p>
						<div class="container-fluid">
						
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<div class="panel panel-default">
										<div class="panel-heading"></div>
										<div class="panel-body">
											<h1>Thankyou </h1>
											<hr/>
											<p>Hello <?php echo "<b>".$_SESSION["name"]."</b>"; ?>,Your payment process is 
											successfully completed and your Transaction id is <b><?php echo $tnx_id; ?></b><br/>
											you can continue your Shopping <br/></p>
											<a href="index.php" class="btn btn-success btn-lg">Continue Shopping</a>
											<a href="index.php" class="btn btn-success btn-lg">view invoice</a>
										</div>
										<div class="panel-footer"></div>
									</div>
								</div>
								<div class="col-md-2"></div>
							</div>
						</div>
					
                         <?php include"footer.php";?>	
				<?php
			}
		}else{
			echo "connection failed";
			echo $_SESSION["uid"];
		}
		
	
}



?>

















































