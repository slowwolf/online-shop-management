 <?php include"header.php";?>
 
 
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <center> <h2 style="background-color:#008B8B;padding:25px;color:white;"> Category List </h2></center> <hr/>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			
			
			
								
								
								
								
								
								
							<table class="table">
    <thead>
      <tr style="color:skyblue;">
        <th>SL</th>
        <th>Category name</th>
        
		
		<th>Status</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>

							<?php 
							
							$product_query = "SELECT * FROM categories ";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$id= $row['cat_id'];;
											$product_cat   = $row['cat_title'];
											
											$status = $row['status'];
											?>
							
							
							
							
										  <tr>
											<td><?php echo $sl; ?></td>
											
											<td><?php echo $product_cat; ?></td>
											<td>
											<?php
											
											if($status==1)
											{
												echo" <a class='btn btn-success'> Available</a>";
											}
											else
											{
												echo"<a class='btn btn-warning'> Unavailable</a>";
											}
											
											
											
											?></td>
											
											<td>
											<form action="insertpro.php" method="post">
											<input type="hidden" name="prodid" class="btn btn-danger" value="<?php echo $id;?>">
											<input type="submit" name="catdelete" class="btn btn-danger" value="Delete">
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
       
