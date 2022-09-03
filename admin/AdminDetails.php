<?php include"header.php";?>
 
<?php

if (isset($_POST["btnDltAdmin"])){
    $user_id = $_POST["user_id"];

 
    
    
    $sql = "delete from `user_info` where user_id = '$user_id'";
            if (mysqli_query($con,$sql)) {
                echo "
                    <center> <div class='alert alert-success'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <b>Admin has been removed Successfully..!</b>
                    </div></center>
                ";
                
               
            }
    
    
    
}

?>
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <center> <h2 style="background-color:#008B8B;padding:25px;color:white;">Customer List </h2></center> <hr/>
                </div>
                <!-- /.col-lg-12 -->
            </div>						
								
								
<table class="table">
    <thead>
      <tr style="color:skyblue;">
        <th>SL</th>
        <th>First Name</th>
        <th>Last Name</th>		
		<th>Email</th>
		<th>Mobile</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>

							<?php 
							
							$product_query = "SELECT * FROM user_info ";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$user_id= $row['user_id'];
											$first_name   = $row['first_name'];
											$last_name   = $row['last_name'];											
											$email = $row['email'];
											$mobile = $row['mobile'];
											?>
							
							
							
							
										  <tr>
											<td><?php echo $sl; ?></td>
											
											<td><?php echo $first_name; ?></td>
											<td><?php echo $last_name; ?></td>
											<td><?php echo $email; ?></td>
											<td><?php echo $mobile; ?></td>
										
											
											<td>
											<form action="#" method="post">
											<input type="hidden" name="user_id" class="btn btn-danger" value="<?php echo $user_id;?>">
											<input type="submit" name="btnDltAdmin" class="btn btn-danger" value="Delete">
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
       
