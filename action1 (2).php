<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";
if(isset($_POST["category"])){
	$category_query = "SELECT * FROM categories";
	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));
	echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Categories</h4></a></li>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$cid = $row["cat_id"];
			$cat_name = $row["cat_title"];
			echo "
					<li><a href='#' class='category' cid='$cid'>$cat_name</a></li>
			";
		}
		echo "</div>";
	}
}
if(isset($_POST["brand"])){
	$brand_query = "SELECT * FROM brands";
	$run_query = mysqli_query($con,$brand_query);
	echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Brands</h4></a></li>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$bid = $row["brand_id"];
			$brand_name = $row["brand_title"];
			echo "
					<li><a href='#' class='selectBrand' bid='$bid'>$brand_name</a></li>
			";
		}
		echo "</div>";
	}
}
if(isset($_POST["page"])){
	$sql = "SELECT * FROM products";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	$pageno = ceil($count/9);
	for($i=1;$i<=$pageno;$i++){
		echo "
			<li><a href='#' page='$i' id='page'>$i</a></li>
		";
	}
}
if(isset($_POST["getProduct"])){
	$limit = 2;
	if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno * $limit) - $limit;
	}else{
		$start = 0;
	}
	$product_query = "SELECT * FROM products LIMIT $start,$limit";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		
		
		?>
		

              

		
		<?php
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			?>
			
				<div class="col pb-20 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <a href="single-product.html" class="img"><img src="product_images/shortname.jpg"  ></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="#" class="cat">Laptop</a>
                                                <h5 class="title"><a href="single-product.html">Zeon Zen 4 Pro</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                                <h5 class="price">$295.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>
						<?php
			
		}
		
		?>
		
               
		
		<?php
	}
}
if(isset($_POST["get_seleted_Category"]) || isset($_POST["selectBrand"]) || isset($_POST["search"])){
	if(isset($_POST["get_seleted_Category"])){
		$id = $_POST["cat_id"];
		$sql = "SELECT * FROM products WHERE product_cat = '$id'";
	}else if(isset($_POST["selectBrand"])){
		$id = $_POST["brand_id"];
		$sql = "SELECT * FROM products WHERE product_brand = '$id'";
	}else {
		$keyword = $_POST["keyword"];
		$sql = "SELECT * FROM products WHERE product_keywords LIKE '%$keyword%'";
	}
	
	$run_query = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			echo "
				<div class='col-md-4'>
							<div class='panel panel-info'>
								<div class='panel-heading'>$pro_title</div>
								<div class='panel-body'>
									<img src='product_images/$pro_image' style='width:160px; height:250px;'/>
								</div>
								<div class='panel-heading'>$.$pro_price.00
									<button pid='$pro_id' style='float:right;' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
								</div>
							</div>
						</div>	
			";
		}
	}
	


	if(isset($_POST["addToCart"])){
		

		$p_id = $_POST["proId"];
		

		if(isset($_SESSION["uid"])){

		$user_id = $_SESSION["uid"];

		$sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		if($count > 0){
			echo "
				<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is already added into the cart Continue Shopping..!</b>
				</div>
			";//not in video
		} else {
			$sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','$user_id','1')";
			if(mysqli_query($con,$sql)){
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is Added..!</b>
					</div>
				";
			}
		}
		}else{
			$sql = "SELECT id FROM cart WHERE ip_add = '$ip_add' AND p_id = '$p_id' AND user_id = -1";
			$query = mysqli_query($con,$sql);
			if (mysqli_num_rows($query) > 0) {
				echo "
					<div class='alert alert-warning'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<b>Product is already added into the cart Continue Shopping..!</b>
					</div>";
					exit();
			}
			$sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','-1','1')";
			if (mysqli_query($con,$sql)) {
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Your product is Added Successfully..!</b>
					</div>
				";
				exit();
			}
			
		}
		
		
		
		
	}

//Count User cart item
if (isset($_POST["count_item"])) {
	//When user is logged in then we will count number of item in cart by using user session id
	if (isset($_SESSION["uid"])) {
		$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE user_id = $_SESSION[uid]";
	}else{
		//When user is not logged in then we will count number of item in cart by using users unique ip address
		$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE ip_add = '$ip_add' AND user_id < 0";
	}
	
	$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query);
	echo $row["count_item"];
	exit();
}
//Count User cart item

//Get Cart Item From Database to Dropdown menu
if (isset($_POST["Common"])) {

	if (isset($_SESSION["uid"])) {
		//When user is logged in this query will execute
		$sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.user_id='$_SESSION[uid]'";
	}else{
		//When user is not logged in this query will execute
		$sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.ip_add='$ip_add' AND b.user_id < 0";
	}
	$query = mysqli_query($con,$sql);
	if (isset($_POST["getCartItem"])) {
		//display cart item in dropdown menu
		if (mysqli_num_rows($query) > 0) {
			$n=0;
			while ($row=mysqli_fetch_array($query)) {
				$n++;
				$product_id = $row["product_id"];
				$product_title = $row["product_title"];
				$product_price = $row["product_price"];
				$product_image = $row["product_image"];
				$cart_item_id = $row["id"];
				$qty = $row["qty"];
				
				?>
				
				
				 <li>
            <a class="image"><img src="images/<?php echo $product_image;?>"  style="width:100px;height:120px;" ></a>
            <div class="content">
                <a href="single-product.html" class="title"><?php echo $product_title;?></a>
                <span class="price">Price: <?php echo $product_price;?>TK</span>
                <span class="qty">Qty: <?php echo $qty;?></span>
            </div>
           
        </li>
				
				<?php
			}
			?>
				<a style="float:right;" href="cart.php" class="btn btn-warning">Edit&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></span></a>
			<?php
			exit();
		}
	}
	if (isset($_POST["checkOutDetails"])) {
		if (mysqli_num_rows($query) > 0) {
			//display user cart item with "Ready to checkout" button if user is not login
			?>
			<form method="post" action="login_form.php">
			
			<div class="cart-table table-responsive mb-40">
                        <table class="table">
						 <thead>
											<tr>
											<th class="pro-remove">Action</th>
											<th class="pro-thumbnail">Image</th>
											 <th class="pro-title">Product Name</th>
											 <th class="pro-quantity">Quantity</th>
											 <th class="pro-price">Price</th>
											<th class="pro-subtotal">Total</th>
											
											
										
											
											</tr>
											</thead><tbody>
											<?php
				$n=0;
				while ($row=mysqli_fetch_array($query)) {
					$n++;
					$product_id = $row["product_id"];
					$product_title = $row["product_title"];
					$product_price = $row["product_price"];
					$product_image = $row["product_image"];
					$cart_item_id = $row["id"];
					$qty = $row["qty"];

					?>
					
					<tr>
					<td>
					
										<a href="#" remove_id="<?php echo $product_id;?>" class="btn btn-danger remove"><span style="color:white;">remove</span></a></br>
										<a href="#" update_id="<?php echo $product_id;?>" class="btn btn-info update"><span style="color:white;">update</span></span></a>
									
					
					</td>
					
					<input type="hidden" name="product_id[]" value="<?php echo $product_id;?>"/>
								<input type="hidden" name="" value="<?php echo $cart_item_id;?>"/>
					<td><img class="img-responsive" src="images/<?php echo $product_image;?>" style="width:100px; height:100px;"></td>
					<td><?php echo $product_title;?></td>
					<td><input type="number" class="form-control qty" value="<?php echo $qty;?>" ></td>
					<td><input type="text" class="form-control price" value="<?php echo $product_price;?>" readonly="readonly"></td>
					<td><input type="text" class="form-control total" value="<?php echo $product_price;?>" readonly="readonly"></td>
					
					</tr>
					
					<?php
					
				}
				?>
				</tbody>
						</table> </div>		
						
						<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								
								<?php
								
								if(isset($_SESSION["uid"]))
									
									{
									
									$id = $_SESSION["uid"];

										$product_query = "SELECT cart.p_id,cart.user_id,cart.qty,products.product_id,products.product_price from cart INNER JOIN products on cart.p_id = products.product_id where cart.user_id = $id";
								$run_query = mysqli_query($con,$product_query);
														if(mysqli_num_rows($run_query) > 0){
										
									$ttl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$pro_id    = $row['product_id'];
											
											
											$qty = $row['qty'];
											$pro_price = $row['product_price'];
											
											$ttl = $ttl + ($pro_price*$qty);
											
											
											
										}
										
										echo"<b> Total = ".$ttl."TK </b> <br>";
		
						}

									
										
									}
									
									else
									{
										
										
										$product_query = "SELECT cart.p_id,cart.user_id,cart.qty,products.product_id,products.product_price from cart INNER JOIN products on cart.p_id = products.product_id where cart.user_id = -1";
								$run_query = mysqli_query($con,$product_query);
														if(mysqli_num_rows($run_query) > 0){
										
									$ttl = 0;
										while($row = mysqli_fetch_array($run_query)){
											$pro_id    = $row['product_id'];
											
											
											$qty = $row['qty'];
											$pro_price = $row['product_price'];
											
											$ttl = $ttl + ($pro_price*$qty);
											
											
											
										}
										
										echo"<b> Total = ".$ttl."TK </b> <br>";
		
						}
										
									}
								
							
								
								
								
								
								
								?>
								
								
								</div>
								
								
					</div>  <br> <br>
						
						
						
						<br/>
						<div class="page-section section pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                
                    
                <div class="row">

                    <div class="col-lg-6 col-12 mb-15">
                        <!-- Calculate Shipping -->
                        
                        <!-- Discount Coupon -->
                        <div class="discount-coupon">
						
						
						
						
                            
                        </div>
                    </div>

                    <!-- Cart Summary 
                    <div class="col-lg-6 col-12 mb-40 d-flex">
                        <div class="cart-summary">
                            <div class="cart-summary-wrap">
                                <h4>Cart Summary</h4>
								
                                <p>Sub Total <span> <b class="net_total" style="font-size:20px;"> </b>TK </span></p>
                                <p>Shipping Cost <span>50 TK</span></p>
                                <h2>Grand Total<span><?php echo $product_price+50;?>.00 Tk</span></h2>
                            </div>-->
							<div style="font-size:25px;text-align:center;color:green;">If You really want to buy those products you can go for checkout now,check the total amount again and click ready to checkout ................<div>
                            <div class="cart-summary-button">
                                
								<input type="submit" style="float:right;margin-top:30px;background-color:#0B0B3B" name="login_user_with_product" class="btn btn-info btn-lg" value="Ready to Checkout" >
                            </div>
                        </div>
                    </div>
                   
                </div>
                
            </div>
        </div>
    </div>
</div>
					<?php
				
			}
	}
	
	
}

//Remove Item From cart
if (isset($_POST["removeItemFromCart"])) {
	$remove_id = $_POST["rid"];
	if (isset($_SESSION["uid"])) {
		$sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND user_id = '$_SESSION[uid]'";
	}else{
		$sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND ip_add = '$ip_add'";
	}
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is removed from cart</b>
				</div>";
		exit();
	}
}


//Update Item From cart
if (isset($_POST["updateCartItem"])) {
	$update_id = $_POST["update_id"];
	$qty = $_POST["qty"];
	
	if(($qty>0)&&($qty<10))
		
		{
			
		if(isset($_SESSION["uid"])) {
		$sql = "UPDATE cart SET qty='$qty' WHERE p_id = '$update_id' AND user_id = '$_SESSION[uid]'";
	}else{
		$sql = "UPDATE cart SET qty='$qty' WHERE p_id = '$update_id' AND ip_add = '$ip_add'";
	}
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is updated</b>
				</div>";
		exit();
	}
		}
		
		
		else if ($qty>=10){
			echo "<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is out of stock!</b>
				</div>";
		exit();
			
			
		}
		
		
		else if ($qty<=0){
			echo "<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Invalid Product ammount!</b>
				</div>";
		exit();
			
			
		}
	
}




?>






