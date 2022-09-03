
<html>
   <head>
        <title>Online Shopping</title>
		<script src="js/jquery-1.9.1.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">        
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	</head>
		<body>
		<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">		
							<a href="" class="logoimage">
								<img src="images/logoimg4.jpg">
							</a>
			        </div>	
				    <div class="col-md-9 col-sm-6 col-xs-12">
				    	<div class="searchbox">
				    		<input type="text" placeholder="Search here..">
				    	</div>
			            <ul class="soc-link">
									<li><a href="www.google.com"><i class="fa fa-shopping-cart" arial-hidden="true"><span class="cart-qty">(0)</span></i></a></li>
									<li><a href="www.google.com"><i class="fa fa-fw fa-heart" arial-hidden="true"><span class="cart-qty">(0)</span></i></a></li>	 
										<?php if(!isset($_COOKIE['clt'])){ ?>
										<button type="submit" class="fa fa-user">  <a href="login.php">Login</a></button>
										<?php } else { ?>
									<button><a href="logout.php" class="fa fa-user" title="logout"> Logout</a></button>
										<?php } ?> 
							</ul>	
					
					</div>		
			        </div>	
			    </div>
            </div>			
	    </div>
    <div class="menu">	
    	<div class="container">	
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="dropdown">
					   <ul>
						    <li><a href="index.php" title="Home">Home</a></li>
						    <li><a href="about.php" title="About">About</a></li>
						    <li><a href="contact.php" class="contact" title="contact">Contact</a></li>
							<li><a href="men.php">Men</a>
							    <ul>
							      <li><a href="mentop.php">Top wear</a></li>
							      <li><a href="menbottom.php">Bottom wear</a></li>
							      <li><a href="menfoot.php">Foot wear</a></li>
							      <li><a href="mentraditional.php">Taditional wear</a></li>
							    </ul>
							</li>
							<li><a href="women.html" title="Women">Women</a>
								<ul>
							      <li><a href="womentop.php">Top wear</a></li>
							      <li><a href="womenbottom.php">Bottom wear</a></li>
							      <li><a href="womenfoot.php">Foot wear</a></li>
							      <li><a href="womentraditional.php">Taditional wear</a></li>
							    </ul>
							</li>	
							<li><a href="kids.html" title="kids">Kids</a>
							    <ul>
							      <li><a href="babyboy.php">Baby Girl</a></li>
							      <li><a href="babygirl.php">Baby Boy</a></li>
							      <li><a href="kidtraditional.php">Taditional wear</a></li>
							      <li><a href="kidtoys.php">Toys</a></li>
							    </ul>
							</li>
						
						</ul>
					</div>
		    	</div>
	    	</div>		
    	</div>
	</div>

    <div class="container">
		<div class="row">
			<div class="col-md-12">
            <h3 class="h3category">Men</h3>
            <div class="category">
           		<ul>
                    <li><a href="mentop.php">Top Wear</a></li>
                    <li><a href="menbotton.php">Bottom Wear</a></li>
                    <li><a href="menfoot.php">Foot Wear</a></li>
                    <li><a href="mentraditional.php">Traditional Wear</a></li>
            	</ul>
    		</div> 
    	</div>  
</div>

<div class="container">
    <div class="row">       
        <div class="col-md-12"> 
             <h3 class="hlp">Top Wear</h3>
                <div class="col-md-3">      
                    <div class="catgallery">
                        <a target="_blank" href="img_5terre.jpg">
                            <img src="images/m1.jpg" alt="Cinque Terre" width="180" height="200">
                        </a>
                        <div class="desc">Baby girl frok</br>Price : tk 1000</div>
                    </div>
                </div>
                <div class="col-md-">
                    <div class="catgallery">
                        <a target="_blank" href="img_forest.jpg">
                            <img src="images/m2.jpg" alt="Forest" width="600" height="250">
                        </a>
                    <div class="desc">Baby girl frok</br>Price : tk 1200</div>
                </div>
                    </div>
                    <div class="col-md-">
                        <div class="catgallery">
                        <a target="_blank" href="img_lights.jpg">
                            <img src="images/m3.jpg" alt="Northern Lights" width="600" height="250">
                        </a>
                        <div class="desc">Baby girl frok</br>Price : tk 1500</div>
                    </div>
                    </div>
                        <div class="col-md-">
                        <div class="catgallery">
                        <a target="_blank" href="img_mountains.jpg">
                            <img src="images/m4.jpg" alt="Mountains" width="600" height="250">
                        </a>
                        <div class="desc">Baby girl frok</br>Price : tk 1200</div>
                    </div>
                    </div>
                        <div class="col-md-">
                        <div class="catgallery">
                        <a target="_blank" href="img_mountains.jpg">
                            <img src="images/m5.jpg" alt="Mountains" width="600" height="250">
                        </a>
                        <div class="desc">Baby girl frok</br>Price : tk 1200</div>
                </div>
        </div>
    </div>
 </div>
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<ul class="footer-menu">
				<li><a href="" title="Home">Home</a></li>
				<li><a href="" title="About">About</a></li>
				<li><a href="" title="Men">contact us</a></li>		
				</ul>
			</div>
		</div>
	</div>
</div>
</html>