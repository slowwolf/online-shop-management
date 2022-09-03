<?php include"header.php"; ?>
<html>  
    <div class="container">
		<div class="row">
			<div class="col-md-12">
            <h3 class="h3category">Men</h3>
            <div class="category">
           		<ul>
                    <li><a href="menpanjabi.php">Panjabi</a></li>
                    <li><a href="menshirt.php">Shirt & T-shirt</a></li>
                    <li><a href="menfoot.php">Footwear</a></li>
                    <li><a href="menaccesories.php">Accesories</a></li>
            	</ul>
    		</div> 
    	</div>  
</div>

<div class="container">
    <div class="row">       
        <div class="col-md-12"> 
             <h3 class="hlp">Panjabi</h3>
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
  					<div class="desc"><?php echo $pro_title;?></br>Price : tk <?php echo $pro_price;?></div>
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
								
								if(isset($_POST["search"]))
								{
									
								$name = $_POST["name"];
								
								
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
  					<a target="_blank" href="img_5terre.jpg">
    					<img src="images/<?php echo $pro_image;?> " alt="Cinque Terre" width="600" height="400">
  					</a>
  					<div class="desc"><?php echo $pro_title;?></br>Price : tk <?php echo $pro_price;?></div>
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

