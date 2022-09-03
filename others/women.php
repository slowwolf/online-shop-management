<html>
   <head>
        <title>Online Shopping Managment System</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script src="js/jquerymain.js"></script>
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
				    		<input type="text" placeholder="Search here.."><span>
				    		<i class="fa fa-search" aria-hidden="true"></i></span>
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
							<li><a href="women.php" title="Women">Women</a>
								<ul>
							      <li><a href="womentop.php">Top wear</a></li>
							      <li><a href="womenbottom.php">Bottom wear</a></li>
							      <li><a href="womenfoot.php">Foot wear</a></li>
							      <li><a href="womentraditional.php">Taditional wear</a></li>
							    </ul>
							</li>	
							<li><a href="kids.php" title="kids">Kids</a>
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
                    <li><a href="index.php">Top Wear</a></li>
                    <li><a href="index.html">Bottom Wear</a></li>
                    <li><a href="index.html">Foot Wear</a></li>
                    <li><a href="index.html">Traditional Wear</a></li>
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
                            <img src="images/w1.jpg" alt="Cinque Terre" width="180" height="200">
                        </a>
                        <div class="desc">Baby girl frok</br>Price : tk 1000</div>
                    </div>
                </div>
                <div class="col-md-">
                    <div class="catgallery">
                        <a target="_blank" href="img_forest.jpg">
                            <img src="images/w2.jpg" alt="Forest" width="600" height="250">
                        </a>
                    <div class="desc">Baby girl frok</br>Price : tk 1200</div>
                </div>
                    </div>
                    <div class="col-md-">
                        <div class="catgallery">
                        <a target="_blank" href="img_lights.jpg">
                            <img src="images/w3.jpg" alt="Northern Lights" width="600" height="250">
                        </a>
                        <div class="desc">Baby girl frok</br>Price : tk 1500</div>
                    </div>
                    </div>
                        <div class="col-md-">
                        <div class="catgallery">
                        <a target="_blank" href="img_mountains.jpg">
                            <img src="images/w4.jpg" alt="Mountains" width="600" height="250">
                        </a>
                        <div class="desc">Baby girl frok</br>Price : tk 1200</div>
                    </div>
                    </div>
                        <div class="col-md-">
                        <div class="catgallery">
                        <a target="_blank" href="img_mountains.jpg">
                            <img src="images/65.jpg" alt="Mountains" width="600" height="250">
                        </a>
                        <div class="desc">Baby girl frok</br>Price : tk 1200</div>
                </div>
        </div>
    </div>
 </div> 
    <!----this is footer--->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
						<div class="footer-menu">
							<h3><a href="" type="">Get to know us</h3></li>
								<p><a href="about.html">About Us</p>
								<p><a href="" >Privacy Policy Us</p>
								<p><a href="" >Why shop with Us</p>
						</div>		
			</div>
			<div class="col-md-3">
						<div class="footer-menu">
							<h3><a href="" type="">Get to help you</h3>
								<p><a href="">Your Account</p>
								<p><a href="" >Your order</p>
								<p><a href="" >Your Payment</p>
								<p><a href="">Terms & Conditions for TEMP Service</p>
                                <p><a href="">bKash Terms & Conditions</p>
						</div>		
			</div>
			<div class="col-md-3">
						<div class="footer-menu">
							<h3><a href="" type="">Contact with us</a></h3>
								<p><a href="contact.html">Contact Us</p>
								<p><a href="" >DeshiWestern blog</p>
						</div>		
			</div>
            <div class="col-md-3">
						<div class="footer-menu">
							<h3><a href="" type="">DeshiWestern.com</a></h3>
								<p>87,Bsn Center,Uttara,Dhaka-1230,house#43,road#16</p>
						</div>		
			</div>				
		</div>
	</div>
</div>		
</body>
</html>