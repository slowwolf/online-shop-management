
<?php include"header.php";?>

<!----Slider----->
<div class="container">
    <div class="col-lg-12">
    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1350px; height: 450px; overflow: hidden; ">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1350px; height: 450px; overflow: hidden;">
            <div>
                <img u="image" src="images/slider/s1.jpg" />
                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                mobile ready, touch swipe
                </div>
            </div>
            <div>
                <img u="image" src="images/slider/os4.jpg" />
                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                <h5 style="color:black;">Safe Online Shop<h5>
                </div>
            </div>
            <div>
                <img u="image" src="images/slider/os6.jpg" />
                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                <h5 style="color:black;">Catch New Arrivals<h5>
                </div>
            </div>
            <div>
                <img u="image" src="images/slider/os7.jpg" />
                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                <h5 style="color:black;">Mens T-shirt collection<h5>
                </div>
            </div>
			<div>
                <img u="image" src="images/slider/os13.jpg" />
                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                <h4 style="color:black;">Kids Fashion<h4>
                </div>
            </div>
			<div>
                <img u="image" src="images/slider/os10.jpg" />
                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                <h5 style="color:black;">Kids Fashion<h5>
                </div>
            </div>
           <div>
                <img u="image" src="images/slider/s14.jpg" />
                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                <h5 style="color:black;">Womens Fashion<h5>
                </div>
            </div>
        </div>
        
        <!--#region Bullet Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
        <style>
            /* jssor slider bullet navigator skin 01 css */
            /*
            .jssorb01 div           (normal)
            .jssorb01 div:hover     (normal mouseover)
            .jssorb01 .av           (active)
            .jssorb01 .av:hover     (active mouseover)
            .jssorb01 .dn           (mousedown)
            */
            .jssorb01 {
                position: absolute;
            }
            .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
                position: absolute;
                /* size of bullet elment */
                width: 12px;
                height: 12px;
                filter: alpha(opacity=70);
                opacity: .7;
                overflow: hidden;
                cursor: pointer;
                border: #000 1px solid;
            }
            .jssorb01 div { background-color: gray; }
            .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
            .jssorb01 .av { background-color: #fff; }
            .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
        <style>
            /* jssor slider arrow navigator skin 02 css */
            /*
            .jssora02l                  (normal)
            .jssora02r                  (normal)
            .jssora02l:hover            (normal mouseover)
            .jssora02r:hover            (normal mouseover)
            .jssora02l.jssora02ldn      (mousedown)
            .jssora02r.jssora02rdn      (mousedown)
            */
            .jssora02l, .jssora02r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 55px;
                height: 55px;
                cursor: pointer;
                background: url(img/a02.png) no-repeat;
                overflow: hidden;
            }
            .jssora02l { background-position: -3px -33px; }
            .jssora02r { background-position: -63px -33px; }
            .jssora02l:hover { background-position: -123px -33px; }
            .jssora02r:hover { background-position: -183px -33px; }
            .jssora02l.jssora02ldn { background-position: -3px -33px; }
            .jssora02r.jssora02rdn { background-position: -63px -33px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora02l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora02r" style="top: 123px; right: 8px;">
        </span>
        <!--#endregion Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
    </div>
    <!-- Jssor Slider End -->
</div>
</div>
    <div class="container">
		<div class="row">	
			<div class="col-md-12">	





<!--  <div class="card-fs-content-header J_FSHeader" data-count-down-bg-color="#ff6801" data-spm-anchor-id="a2a0e.home.flashSale.i0.73521b94L0Gizn">
    <div class="card-fs-content-header-left J_FSHeaderLeft">
      <div class="card-fs-content-header-left-status pull-left">
        <div class="fs-status-text" style="color: undefined">On Sale Now</div>

          <div class="time-text J_FSFirstTimeText" data-spm-anchor-id="a2a0e.flashsale.sales.i0.6ef169268R0FZG">On Sale Now</div>
          <div class="tab-border"></div>


 
       
     </div>
      <div class="card-fs-content-header-left-timer pull-left">
        <div class="fs-timer-text pull-left" style="color: undefined">Ending in</div>
        <div class="fs-timer-count pull-left" id="days" style="background-color: #ff6801; color: undefined;">120</div>
        <div class="fs-timer-colon pull-left" style="color: #ff6801"> : </div>
        <div class="fs-timer-count pull-left" id="hours" style="background-color: #ff6801; color: undefined;">5</div> 
        <div class="fs-timer-colon pull-left" style="color: #ff6801"> : </div>
          <div class="fs-timer-count pull-left" id="minutes" style="background-color: #ff6801; color: undefined;">48</div>
        <div class="fs-timer-colon pull-left" style="color: #ff6801"> : </div>
        <div class="fs-timer-count pull-left" id="seconds" style="background-color: #ff6801; color: undefined;">50</div>
      </div>
    </div>
  
      <a class="card-fs-content-button J_ShopMoreBtn" title="Flash Sale" style="color: #f57224; border-color: #f57224" href="index.php">SHOP MORE</a>



    </div>
<p font-size=7 id="demo"></p> 
  
<script> 
  
var deadline = new Date("Nov 2, 2019 18:12:25").getTime(); 
  
var x = setInterval(function() { 
  
var now = new Date().getTime(); 
var t = deadline - now; 
var days = Math.floor(t / (1000*60*60*24)); 
var hours = Math.floor((t%(1000*60*60*24))/(1000 * 60 * 60)); 
var minutes = Math.floor((t%(1000*60*60)) / (1000 * 60)); 
var seconds = Math.floor((t%(1000*60)) / 1000); 
document.getElementById("days").innerHTML =days ; 
document.getElementById("hours").innerHTML =hours; 
document.getElementById("minutes").innerHTML = minutes;  
document.getElementById("seconds").innerHTML =seconds;  
//if (t < 50) { 
        clearInterval(x); 
        document.getElementById("demo").innerHTML = "TIME UP"; 
        document.getElementById("day").innerHTML ='0'; 
        document.getElementById("hour").innerHTML ='0'; 
        document.getElementById("minute").innerHTML ='0' ;  
        document.getElementById("second").innerHTML = '0'; } 
}, 1000); 
</script>  -->















		
			   <br> <h3 class="hlp">Choice with category</h3>     </br>




















</div>
























            <?php
								
								$limit = 12;
								$start = 0;
								
								include "db.php";
								$product_query = "SELECT * FROM sub_cat LIMIT $start,$limit";
								$run_query = mysqli_query($con,$product_query);
							
									
	
		while($row = mysqli_fetch_array($run_query)){
			//$pro_id    = $row['product_id'];
			 ?>
			    <div class="col-md-3">
			    	<div class="Gallery1">
			    		<a href="CatProducts.php?sub_catid=<?php echo $row['id'];?>&CatName=<?php echo $row['name'];?>">
    						<img src="images/<?php echo $row['cat_image']?>" alt="" width="290" height="300" >
  						</a>
  						<div class="desc"> <!-- <h5 style="color:#33691e;background-color:#b9f6ca;font-size: 16px;padding: 8px;border-radius: 5px;font-weight: 500;z-index: 3;box-sizing:border-box;position: center;border: 1px solid #6FA40C;border-color:#6FA40C;">OFFER</h5> --> <div class="product-bottom text-center">
<span class="_4472a_zYlL- _6c244_q2qap">On sale</span>
                                        <i class="fa fa-star"></i> 
<i class="fa fa-star"></i> 
<i class="fa fa-star"></i> 
<i class="fa fa-star"></i> 
<i class="fa fa-star-half-o"></i> </div><?php echo $row['name']?></div>
					</div>
				</div>
				
		<?php }?>
    
			</div>
		</div>
	</div>
	
    <div class="container">
		<div class="row">
			<div class="col-md-12">	
				<br><h3 class="hlp">New Arrivals</h3></br>
			</div>


								<?php
								
								$limit = 8;
								$start = 0;
								
								include "db.php";
								$product_query = "SELECT * FROM products  order by product_id desc LIMIT $start,$limit";
								$run_query = mysqli_query($con,$product_query);
								if(mysqli_num_rows($run_query) > 0){
									
	
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$NewPrice = $row['NewPrice'];
			$pro_image = $row['product_image'];
			$qty = $row['quantity'];
			?>
			
			<div class="col-md-3">		
				<div class="gallery">
  					<a  href="productdetails.php?id=<?php echo $pro_id ; ?>">
    					<img src="images/<?php echo $pro_image;?> " alt="Cinque Terre" width="600" height="400">
                                        <span class="_4472a_zYlL- _6c244_q2qap">NEW</span>
   

                                         
  					</a>
  					<div class="desc"> <h5 style="color:#33691e;background-color:#b9f6ca;font-size: 16px;padding: 8px;border-radius: 5px;font-weight: 500;z-index: 3;box-sizing: border-box;position: center;border: 1px solid #6FA40C;border-color:#6FA40C;">OFFER</h5> 
<div class="product-bottom text-center">

                                        <i class="fa fa-star"></i> 
<i class="fa fa-star"></i> 
<i class="fa fa-star"></i> 
<i class="fa fa-star"></i> 
<i class="fa fa-star-half-o"></i> </div>
					  <?php echo $pro_title;?></br>
					  <p  style="font-size: 17px;
line-height: 12px;" >New Price : <?php echo $pro_price;?>TK</p>
					  <p >Old Price :<strike style="color:#9e9e9e; font-size: 17px;
line-height: 12px;" > <?php echo $row['NewPrice'];?>TK</p> </strike>
					  </div>
					<?php 
                       if($qty >0)


					   { ?>
					<button class="btn btn-success"><a href="#" pid="<?php echo $pro_id ; ?>" id="product"  class="btn btn-success" >Add to cart</a></button>
					
				<?php	 }


						   
					?>
					<?php 
                       if($qty <1)


					   {
						 echo "<a style='color:red;'> Out of stock </a>";  
					   }


						   
					?>
						<div class="overlay overlaybottom">
								<div>
									<class="text">View details</div>
								</div>
			</div>
	
			</div>
				
				
								
						<?php
			
		}
		
	}
		?>
								

			</div>
		</div>
	</div>
	
	<?php
								
								//$limit = 8;
								//$start = 0;
								
								include "db.php";
								$cat_query = "SELECT * FROM categories";
								$run_quer = mysqli_query($con,$cat_query);
							
									
	
		while($rows = mysqli_fetch_array($run_quer)){
			$cat_id    = $rows['cat_id'];
			 ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">	




				<br><h3 class="hlp"><?php echo $rows['cat_title'];?> Zone</h3></br>
			</div>

			<?php
								
								$limit = 8;
								$start = 0;
								
								include "db.php";
								$product_query = "SELECT * FROM products where  product_cat = $cat_id LIMIT $start,$limit";
	$run_query = mysqli_query($con,$product_query);
	//if(mysqli_num_rows($run_query) > 0){
		
	
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
  					<div class="desc"> <!-- <h5 style="color:#33691e;background-color:#b9f6ca;font-size: 16px;padding: 8px;border-radius: 5px;font-weight: 500;z-index: 3;box-sizing: border-box;position: center;border: 1px solid #6FA40C;border-color:#6FA40C;">OFFER</h5>   -->
					 <div class="product-bottom text-center">
                                         <span class="_4472a_zYlL- _6c244_q2qap">On sale</span>
                                        <i class="fa fa-star"></i> 
<i class="fa fa-star"></i> 
<i class="fa fa-star"></i> 
<i class="fa fa-star"></i> 
<i class="fa fa-star-half-o"></i> </div> <?php echo $pro_title;?></br>

					  <p  style="font-size: 17px;
line-height: 12px;" >New Price : <?php echo $pro_price;?>TK</p>
					 <p >Old Price :<strike style="color:#9e9e9e; font-size: 17px;
line-height: 12px;" > <?php echo $row['NewPrice'];?>TK</p> </strike>
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
		
	//}
		?>
							
							


			
			
			

			</div>
		</div>
	</div>
	
     
			</div>
		</div>
	</div>
<?php }?>
	

			</div>
		</div>
	</div>
</body>
</html>
					

		<?php include"footer.php";?>