 <?php include"header.php";?>
 
 
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <center> <h2 style="background-color:#008B8B;padding:25px;color:white;"> Products List </h2></center> <hr/>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			
			
			
								
								
								
								
								
								
<table class="table">
    <thead>
      <tr style="color:skyblue;">
        <th>SL</th>
        <th>Product image</th>
        <th>product name</th>
		<th>category</th>
		<th>prize</th>
		<th>quantity </th>
		
		<th>Status</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>

							<?php 
							
							$product_query = "SELECT * FROM products ";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$id   = $row['product_id'];
											$product_cat   = $row['product_cat'];
											$product_title = $row['product_title'];
											$product_price = $row['product_price'];
											$product_image = $row['product_image'];
											$quantity = $row['quantity'];
											$status = $row['status'];
											?>
							
							
							
							
										  <tr>
											<td><?php echo $sl; ?></td>
											<td><img src="../images/<?php echo $product_image; ?>" style="height:60px;width:100px;"></td>
											<td><?php echo $product_title; ?></td>
											<td>
											<?php
											
											if($product_cat==1)
											{
												echo" Men";
											}
											if($product_cat==2)
											{
												echo" Women";
											}
											if($product_cat==3)
											{
												echo" Kids";
											}
											
											
											
											
											?></td>
											<td><?php echo $product_price; ?></td>
											<td><?php echo $quantity; ?></td>
											<td>
										
											<?php 
											if($status==1)
											{
												echo"<a class='btn btn-success'> Available</a>";
											}
											else
											{
												echo"<a class='btn btn-warning'> Unavailable</a>";
											}
											
											
											
											?></td>
											
											<td>
											<form action="insertpro.php" method="post">
											<input type="hidden" name="prodid" class="btn btn-danger" value="<?php echo $id;?>">
											<input type="submit" name="delete" class="btn btn-danger" value="Delete">
											</form>
											
											<a href="edit.php?peid=<?php echo $id;?>"class="btn btn-info"> Edit   </a>
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
       
