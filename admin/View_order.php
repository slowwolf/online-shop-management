 <?php include"header.php";?>
 
 
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <center> <h2 style="background-color:#008B8B;padding:30px;color:white;"> Order List </h2></center> <hr/>
                </div>
                <!-- /.col-lg-12 -->
            </div>
								
								
								
								
								
								
							<table class="table">
    <thead>
      <tr style="color: skyblue;">
        <th>Date</th>
        <th>Customer name</th>
        <th>product name</th>
		<th>quantity</th>
		<th>email</th>
		<th>payment type</th>
		<th>Transaction Id </th>
		<th>image</th>
		<th>Status</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>

							<?php 
							
							$product_query = "select orders.order_id,orders.product_id,orders.date,orders.tnx_id,orders.qty,orders.full_name,orders.email,orders.payment_type,orders.p_status,products.product_title,products.product_image from orders INNER JOIN products on orders.product_id = products.product_id ORDER BY orders.order_id DESC";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$orderid   = $row['order_id'];
											$id   = $row['full_name'];
											$fname   = $row['product_title'];
											$lname = $row['qty'];
											$service = $row['email'];
											$date = $row['payment_type'];
											$mobile = $row['tnx_id'];
											$email = $row['p_status'];
											$image = $row['product_image'];
											$date = $row['date'];
											?>
							
							
							
							
										  <tr>
											<td><?php echo $date; ?></td>
											<td><?php echo $id; ?></td>
											<td><?php echo $fname; ?></td>
											<td><?php echo $lname; ?></td>
											<td><?php echo $service; ?></td>
											<td><?php echo $date; ?></td>
											<td><?php echo $mobile; ?></td>
											
											<td><img src="../images/<?php echo $image; ?>" style="height:80px;width:80px;" ></td>
											
											<td><?php echo $email; ?></td>
											<td>
											<form action="insertpro.php" method="post">
											<input type="hidden" name="prodid" class="btn btn-danger" value="<?php echo $orderid;?>">
											<input type="submit" name="orderdelete" class="btn btn-danger" value="Delete">
								 <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle"
          type="button" id="dropdownMenu1" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
    Confirm
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu1" style="color: red;">
    <a class="dropdown-item" href="edit_orders.php?pid= <?php echo $orderid;?>" style="color:red;">Proccessing</a><br>
    <a class="dropdown-item" href="edit_orders.php?did= <?php echo $orderid;?>"style="color:green;">Delivered</a>
  </div>
</div>
											</form>

                      
											<a class="btn btn-success"  href="Invoice.php?id= <?php echo $row['tnx_id'];?>"style="color:while;">View Order</a>
											
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
       
