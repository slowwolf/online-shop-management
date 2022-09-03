

<?php 
//session_start();
include"header.php";
if (!isset($_SESSION["uid"])) {
	header("location:login_form.php");
}
//include"header.php";?>
<!--header part 2 end-->
<!--Menu-->
<div class="container">
	<div class="row">
 <style>
.headcente { text-align:center; color:#008B8B;  }
.mlt { color:#008B8B;  }

</style>

	
	      <center><br> <h3 class="mlt">Hi, &nbsp <?php echo $_SESSION["name"];?> Welcome to your profile <br/></h3> </center>
        <h3 class="headcente"><br><br><br>Your order details</h3></br></br></br>
	
	         
			 <hr/>
			 				
								
								
							<table class="table">  
    <thead>
      <tr>
        <th>SL</th>
        <th>Customer name</th>
        <th>product Id</th>
		<th>quantity</th>
		<th>email</th>
		<th>payment type</th>
		<th>Phone</th>
		<th style="color:black;">Status</th>
		
      </tr>
    </thead>
    <tbody>

							<?php 
							include "db.php";
							$id = $_SESSION["uid"];
							$product_query = "SELECT * FROM orders where user_id = $id ";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$orderid   = $row['order_id'];
											$id   = $row['full_name'];
											$fname   = $row['product_id'];
											$lname = $row['qty'];
											$service = $row['email'];
											$date = $row['payment_type'];
											$mobile = $row['address'];
											$email = $row['p_status'];
											?>
							
							
							
							
										  <tr>
											<td><?php echo $sl; ?></td>
											<td><?php echo $id; ?></td>
											<td><?php echo $fname; ?></td>
											<td><?php echo $lname; ?></td>
											<td><?php echo $service; ?></td>
											<td><?php echo $date; ?></td>
											<td><?php echo $mobile; ?></td>
											<td><?php 
                                          if($email== 'pending')
										  {
											  echo"<a class='btn btn-success'>pending</a>";
										  }
										  if($email== 'processing')
										  {
											  echo"<a class='btn btn-warning'>processing</a>";
										  }
										  if($email== 'delivered')
										  {
											  echo"<a class='btn btn-success'>delivered</a>";
										  }
										  
											
											 ?></td>
											
										  </tr>
										  
							
							
							<?php
		}
							}
							?>
				
					
					 </tbody>
  </table>
		
		</div>
	</div>
</div>
<!--Slider END-->






<?php include"footer.php";?>