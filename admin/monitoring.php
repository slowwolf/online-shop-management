<?php include"header.php";?>
 
 
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <center> <h2 style="background-color:#008B8B;padding:25px;color:white;"> Selling Products List </h2></center> <hr/>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			
			
			
								
								
								
								
								
								
<table class="table">
    <thead>
      <tr style="color:skyblue;">
        <th>SL</th>
		<th>Product Image</th>
        <th>Product name</th>
        <th>number of sell</th>
		
		
      </tr>
    </thead>
    <tbody>

							<?php 
							
							$product_query = "SELECT 
    product_id, 
    sum(qty)
FROM
    orders
GROUP BY product_id DESC
HAVING sum(qty) > 0";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$id   = $row['product_id'];
											$id1   = $row['sum(qty)'];
											
											?>
							
							            
										
										<?php
										
										$product_query1 = "select * from products where product_id = $id";
							$run_query1 = mysqli_query($con,$product_query1);
							if(mysqli_num_rows($run_query) > 0){
		
										while($row = mysqli_fetch_array($run_query1)){
											
											$name   = $row['product_title'];
											$image   = $row['product_image'];
											
										}
							}
										?>
							
							
										  <tr>
											<td><?php echo $sl; ?></td>
											
											<td><img src="../images/<?php echo $image; ?>" style="height:60px;width:100px;"> </td>
											<td><?php echo $name; ?></td>
											<td><?php echo $id1; ?></td>
											
											
											
										  </tr>
										  
							
							
							<?php
		}
							}
							?>
				
					
					 </tbody>
  </table>

  
  
  
  
  
  
  <div class="row">
                <div class="col-lg-12">
                   <center> <h2 style="background-color:#008B8B;padding:25px;color:white;">  Buying User </h2></center> <hr/>
                </div>
                <!-- /.col-lg-12 -->
            </div>
  
  
  								
								
								
<table class="table">
    <thead>
      <tr style="color:skyblue;">
        <th>SL</th>
		<th>Customer name</th>
        <th>Mobile</th>
        <th>Email</th>
		 <th>number of buy</th>
		
		
      </tr>
    </thead>
    <tbody>

							<?php 
							
							$product_query = "SELECT 
    user_id, 
    COUNT(user_id)
FROM
    orders
GROUP BY user_id DESC
HAVING COUNT(user_id) > 0";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$uid   = $row['user_id'];
											$uid1   = $row['COUNT(user_id)'];
											
											?>
							
							            
										
										<?php
										
										$product_query1 = "select * from user_info where user_id = $uid";
							$run_query1 = mysqli_query($con,$product_query1);
							if(mysqli_num_rows($run_query) > 0){
		
										while($row = mysqli_fetch_array($run_query1)){
											
											$first_name   = $row['first_name'];
											$mobile   = $row['mobile'];
											$email   = $row['email'];
											
										}
							}
										?>
							
							
										  <tr>
											<td><?php echo $sl; ?></td>
											
											<td><?php echo $first_name; ?></td>
											<td><?php echo $mobile; ?></td>
											<td><?php echo $email; ?></td>
											<td><?php echo $uid1; ?></td>
											
											
											
										  </tr>
										  
							
							
							<?php
		}
							}
							?>
				
					
					 </tbody>
  </table>
  
            
                        <!-- /.panel-body -->
						
						
						
						 <?php include"footer.php";?>
       
