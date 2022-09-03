 <?php include"header.php";?>
 
 
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <h2 style="background-color:#008B8B;padding:25px;color:white;text-align:center;"> Account </h2><hr/>
                </div>
                <!-- /.col-lg-12 -->
				<span style="float:right;"> <a href="report.php"class="btn btn-success"> Monthly Selling report</a></span>
					<span style="float:right;"> <a href="check.php?week=1"class="btn btn-success"> Weekly Selling report</a></span>
				<span style="float:right;"> <a href="check.php?date=1"class="btn btn-success"> date wise Selling report</a></span>
				
            </div>
            <!-- /.row -->
			
			
			
			 <div class="row">
                <div class="col-md-12">
				
				<div class="panel-info">
							<div class="panel-heading" style="text-align:center;font-size:20px;">
							<b> Profit from selling </b>
						    </div>
							<div class="panel-body">
                		
								
							<table class="table">
    <thead>
      <tr style="color:skyblue;">
        <th>SL</th>
        <th>Product image</th>
        <th>product name</th>
		<th>quantity</th>
		<th>cost</th>
		<th>prize </th>
		
		<th>Profit</th>
		
      </tr>
    </thead>
    <tbody>

							<?php 
							


							$product_query = "select  products.product_image,products.product_title,orders.product_id,orders.qty,products.product_price,products.product_cost from orders INNER JOIN products on orders.product_id=products.product_id;";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
		$netprofit= 0;
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$product_image = $row['product_image'];
											
											$product_title = $row['product_title'];
											$quantity = $row['qty'];
											$product_cost = $row['product_cost'];
											
											
											$product_price = $row['product_price'];
											
											?>
							
							
							
							
										  <tr>
											<td><?php echo $sl; ?></td>
											<td><img src="../images/<?php echo $product_image; ?>" style="height:60px;width:100px;"></td>
											<td><?php echo $product_title; ?></td>
											<td><?php echo $quantity; ?></td>
											<td><?php echo $product_cost; ?></td>
											<td><?php echo $product_price; ?></td>
											
											<td>
										
											<?php 
											$profit = ($row['product_price'] - $row['product_cost'])*$row['qty'];
											
											$netprofit = $netprofit + $profit;
											echo $profit."TK";
											
											?></td>
											
											
										  </tr>
										  
							
							
							<?php
		}
							}
							?>
				
					
					 </tbody>
  </table>
    <center> <h3> <b>Total profit: <?php echo $netprofit;?>TK <b> </h3> </center>
                </div>
				 </div>
				  </div>
				
				
                <!-- /.col-lg-12 -->
            </div>
			
			
			
			<div class="row">		
				<div class="col-md-12">
					<div class="panel-info">
						<div class="panel-heading" style="text-align:center;">
			
			                Revenue
					    </div>
						
						<div class="panel-body" style="text-align:center;font-size:20px;">
							 <b> Total profit: <?php echo $netprofit;?>TK <b>  <br>
						
								 <b>Total Earning: <?php echo $a=$netprofit;?>TK <b>  
								 
								
								
								<?php
								if($a>0)
								{
									?>
									<div class="panel-info">
									<div class="panel-heading">
			
			                You are in profit. Your total revenue <?php echo $a;?> TK
					    </div>
							</div>		
									<?php
								}
							else
							{
								?>
								
								<div class="panel-danger">
								<div class="panel-heading">
			
			                You are in loss. Your total revenue <?php echo $a;?> TK
					    </div>
						</div>
								<?php
								
							}
								?>
		                 

		
	
								 
					    </div>
			
			
					</div>
			    </div>
			
			</div>
			
			
			
			
			
			
			
			
								
								
			
            
                        <!-- /.panel-body -->
						
						
						
						 <?php include"footer.php";?>
       
