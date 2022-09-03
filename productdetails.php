<?php include"header.php";?>
	
	
	
	
	
	<?php
								
		include "db.php";				



						$proid = $_GET['id'];
								
								
								$product_query = "SELECT * FROM products where product_id = $proid  ";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		
	
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];

			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			$description = $row['product_desc'];
			$qty = $row['quantity'];
			?>
			
		
  <!---product detailsa---->
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h3 class="hl1">Product Image</h3>			
			<div class="productimage">
				<img src="images/<?php echo $pro_image;?>">
			</div>
		</div>
		<div class="col-md-6">
			<h3 class="hl1"><?php echo $pro_title;?></h3>
			<h4 style="color:#FF8C00;"> Price tk <?php echo $pro_price;?></h4>
		<b>	<p>Product Name : <?php echo $pro_title;?></p>
			<p>Product description : <?php echo $description;?> </p>
		 <p> Return: 7 Day Return </p>
                         <p> Quantity : 1 (increase quantity of product through cart) </p> 
		<!--	  <p>Quantity :  <input type="number" name="quantity" value="1"> </p>    -->
			<p class="fa fa-phone">01937084470</p><br>
			<p class="fa fa-phone">01976615775</p><br></b>
		    <div class="social-icons">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
					<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                </div><br>

			<?php 
                       if($qty >0)


					   { ?>
			<a class="btn btn-success"href="#" pid="<?php echo $pro_id ; ?>" id="product" >Add To Cart</a>
			
				<?php	 }


						   
					?>
					
					<?php 
                       if($qty <1)


					   {
						 echo "<a style='color:red;'> Out of stock </a>";  
					   }


						   
					?>
		</div>	
	</div>
	<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				
				
				<div class="row" style="margin-top:100px;">
				
				
					<center> 
					<br><h5 style="color:#FF8C00;">Product Review  </h5></br>
					
					<form action="" method="post">
					<h5 style="color:#FF8C00;">Name:</h5>
					<input type="text" name="name" value=""><br><br>
					<h5 style="color:#FF8C00;">Coments:</h5>
					<input type="text" name="msg" value=""><br><br>
					<input type="submit" class="btn btn-success"name="cmnd" value="submit">
					
					</form>
					
					
					<?php 
					
					if(isset($_POST["cmnd"]))
						
						{
							$c_name= $_POST["name"];
							$c_cmd= $_POST["msg"];
					
					$sql = "INSERT INTO comments
			(name, comments, prod_id) 
			VALUES ('$c_name','$c_cmd','$pro_id')";
			if (mysqli_query($con,$sql)) {
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Your comments is Added Successfully..!</b>
					</div>
				";
				exit();
			}
					
					?>
					</center>
				</div>
								</div>

</div>



	<?php }}}


?>





























