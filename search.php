<?php include"header.php";?>
<!--header part 2 end-->
<!--Menu-->

<!--New  Arrivals Start-->
<div class="container">
	<div class="row">
		<div class="special_offers">
			<div class="empty-div"></div>
				<div>
					<h2 style="float:left;color:black">Search Result....</h2>
				</div>
		</div>
		</div>
	
<div class="row">

	<?php
								
								
								
					if(isset($_POST["search"]))

					{						
							$option  =	$_POST["name"];
								
							

									if($option=='')	
										{
											echo " We couldn't find any matches!<br/>Please check the spelling or try searching something else";
										}
								    else
									{
								
								
								include "db.php";
								$product_query = "select * from products where product_title like '%$option%'";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		
	
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			?>
			
				
					<div class="col-md-3">						
						<div class="Image_product">
							<div class="single-products text-center">
								<div class="products-info">
									<a  href="productdetails.php?id=<?php echo $pro_id ; ?>">
										<img src="images/<?php echo $pro_image ;?>" style="height:150px;width:150px;">
									</a>
								</div>
								<div class="name&price">
									<a href="details/images/snacks/1">
										<p class="product_name_style"><?php echo $pro_title ;?></p>
									</a>
									<span><h5>Tk <?php echo $pro_price ;?></h5></span>
								</div>
							</div>
							<div class="product-overly">
								<div class="overly-content">
									<ul class="wishlistall" style="list-style-type:none;">
										<div class="prbuttons">
											<li class="add-to-class-li">
												<a href="#" pid="<?php echo $pro_id ; ?>" id="product"  class="btn btn-primary" >Add to cart</a>
											</li>
											<li class="add-to-class-li">
												<a  href="productdetails.php?id=<?php echo $pro_id ; ?>">
													Details
												</a>
											</li>
										</div>
									</ul>
								</div>
							</div>
							
						</div>
						
					</div>
								
						<?php
			
		}
		
	}
	
				

									}				}
		?>
		
		
		
					
					
					
					
					
		
				
	</div>
</div>
<!--New Arrivals End-->
<!--Trending Start-->




<?php include"footer.php";?>