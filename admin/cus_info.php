 <?php include"header.php";?>
 
 
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <center> <h2 style="background-color:#008B8B;padding:25px;color:white;">All Buyers History </h2></center> <hr/>
                </div>
                <!-- /.col-lg-12 -->
            </div>
								
								
								
								
								
								
							<table class="table">
    <thead>
      <tr style="color:skyblue;">
        <th>SL</th>
        <th>Customer name</th>
        <th>Email</th>
		<th>Phone</th>
		<th>City</th>
		<th>Address</th>
		<th>Zip</th>

		<th>Action</th>
      </tr>
    </thead>
    <tbody>

							<?php 
							
							$product_query = "SELECT * FROM orders ";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$uid   = $row['user_id'];
											$name   = $row['full_name'];
											$email   = $row['email'];
											$address = $row['address'];
											$city = $row['city'];
											$state = $row['state'];
											$zip = $row['zip_code'];
											
											?>
							
							
							
							
										  <tr>
											<td><?php echo $sl; ?></td>
											
											<td><?php echo $name; ?></td>
											<td><?php echo $email; ?></td>
											<td><?php echo $address; ?></td>
											<td><?php echo $city; ?></td>
											<td><?php echo $state; ?></td>
											<td><?php echo $zip; ?></td>
											<td>
											<form action="view.php" method="post">
											<input type="hidden" name="uid" class="btn btn-danger" value="<?php echo $uid;?>">
											<input type="submit" name="cusdetails" class="btn btn-info" value="View">
								
											</form>

                      

											
											</td>
										  </tr>
										  
							
							
							<?php
		}
							}
							?>
				
					
					 </tbody>
  </table>

            
                        <!-- /.panel-body -->
						
						
						
						 <?php include"footer.php";?>
       
