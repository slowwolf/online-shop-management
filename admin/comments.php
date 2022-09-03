 <?php include"header.php";?>
 
 
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <center> <h2 style="background-color:#008B8B;padding:25px;color:white;">Comments List </h2></center> <hr/>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			
			
			
								
								
								
								
								
								
							<table class="table">
    <thead>
      <tr style="color:skyblue;">
        <th>SL</th>
       
        <th>Customer name</th>
		<th>comments</th>
		
		<th>Action</th>
      </tr>
    </thead>
    <tbody>

							<?php 
							
							$product_query = "SELECT * FROM comments ";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$id   = $row['id'];
											$name   = $row['name'];
											$comments = $row['comments'];
											$proid = $row['prod_id'];
											
											?>
							
							
							
							
										  <tr>
											<td><?php echo $sl; ?></td>
											<td><?php echo $name; ?></td>
											<td><?php echo $comments; ?></td>
											

											
											<td>
											<form action="insertpro.php" method="post">
											<input type="hidden" name="prodid" class="btn btn-danger" value="<?php echo $id;?>">
											<input type="submit" name="codelete" class="btn btn-danger" value="Delete">
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
       
