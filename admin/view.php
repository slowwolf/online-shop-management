 <?php include"header.php";?>
 
 
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <center> <h2  style=color:#008B8B;"> Customer Details </h2></center> <hr/>
                </div>
                <!-- /.col-lg-12 -->
            </div>
								
								
								
								
								
						<table class="table">				
							

							<?php 
							
							if(isset($_POST["cusdetails"])){
							include "db.php";
							$id = $_POST["uid"];
							$product_query = "SELECT * FROM orders where user_id = $id limit 1";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$orderid   = $row['order_id'];
											$name   = $row['full_name'];
											
											$email = $row['email'];
											
											$adress = $row['address'];
											$city = $row['city'];
											$state = $row['state'];
											$zip = $row['zip_code'];
											
											?>
							
							
								
							
   
   
							
										  <tr>

											<td>Name</td><td><?php echo $name; ?></td></tr>
										

											<tr><td>Email</td>	<td><?php echo $email; ?></td></tr>
										<tr><td>Phone number</td>	<td><?php echo $adress; ?></td></tr>
										<tr><td>City</td>	<td><?php echo $city; ?></td></tr>
										<tr><td>Present Address</td>	<td><?php echo $state; ?></td></tr>
										<tr><td>postcode</td>	<td><?php echo $zip; ?></td></tr>
											
											
										 
										  
							
							
							<?php
		}
							}
							
							}
							?>
				
					

  </table>

            
                        <!-- /.panel-body -->
						
						
						
						 <?php include"footer.php";?>
       
