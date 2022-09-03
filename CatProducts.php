<?php include"header.php"; ?>
<html>  
    <div class="container">
		<div class="row">
			<div class="col-md-12">
           
            <div class="category">
           		
    		</div> 
    	</div>  
</div>

<div class="container">
    <div class="row">       
        <div class="col-md-12"> 
























             <h3 class="hlp"><?php echo $_GET["CatName"]?></h3>
                </div>



				
								<?php
								
								if(isset($_GET["catid"]))
								{
									
								$catid = $_GET["catid"];
								
								
								include "db.php";
								$product_query = "SELECT * FROM products where product_cat = $catid ";
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
				<div class="gallery">
  					<a  href="productdetails.php?id=<?php echo $pro_id ; ?>">
    					<img src="images/<?php echo $pro_image;?> " alt="Cinque Terre" width="600" height="400">
  					</a>
  					<div class="desc"><?php echo $pro_title;?></br><div class="product-bottom text-center">
                                        <i class="fa fa-star"></i> 
<i class="fa fa-star"></i> 
<i class="fa fa-star"></i> 
<i class="fa fa-star"></i> 
<i class="fa fa-star-half-o"></i> 
</div><p>Price: <?php echo $pro_price;?> tk </p>
<p>Old Price :<strike> <?php echo $row['NewPrice'];?></strike> tk</p>
</div>

					<button class="btn btn-success"><a href="#" pid="<?php echo $pro_id ; ?>" id="product"  class="btn btn-success" >Add to cart</a></button>
						<div class="overlay overlaybottom">
								<div>
									<class="text">View details</div>
								</div>
			</div>
	
			</div>
				
				
								
						<?php
			
		}
		
	}
								}
		?>
		
		
		
		
		<?php
								
								if(isset($_GET["sub_catid"]))
								{
									
								$catid1 = $_GET["sub_catid"];
								
								
								include "db.php";
								$product_query = "SELECT * FROM products where sub_cateid = $catid1 ";
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
				<div class="gallery">
  					<a  href="productdetails.php?id=<?php echo $pro_id ; ?>">
    					<img src="images/<?php echo $pro_image;?> " alt="Cinque Terre" width="600" height="400">
  					</a>
  					<div class="desc"><h5 style="color:white;background-color: #388e3c;font-size: 14px;padding: 8px;border-radius: 5px;font-weight: 500;z-index: 3;box-sizing: border-box;position: center;">ON OFFER</h5><div class="product-bottom text-center">
                                        <i class="fa fa-star"></i> 
<i class="fa fa-star"></i> 
<i class="fa fa-star"></i> 
<i class="fa fa-star"></i> 
<i class="fa fa-star-half-o"></i> </div><?php echo $pro_title;?></br><p>Price: <?php echo $pro_price;?> tk</p>


<p>Old Price :<strike> <?php echo $row['NewPrice'];?></strike> tk</p>
</div>
					<button class="btn btn-success"><a href="#" pid="<?php echo $pro_id ; ?>" id="product"  class="btn btn-success" >Add to cart</a></button>
						<div class="overlay overlaybottom">
								<div>
									<class="text">View details</div>
								</div>
			</div>
	
			</div>
				
				
								
						<?php
			
		}
		
	}
								}
		?>
							
							


			
			
			

			</div>
		</div>
	</div>
        
    
 </div>	
</html>					
<?php include"footer.php"; ?>

