

<html>
   <head>
        <title>Ecommerce Shoppinh System</title>
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
		<div class="syn-hot-deals ">
			<div class="syn-row">
				<div class="addtocart">
					<div class="col-md-12">									
						<table class="cart-table">
							<tbody>
								<tr class="cart-table-header">
									<td class="cart-table-header-ITEM">ITEM</td>
									<td>QUANTITY</td>
									<td>UNIT PRICE</td>
									<td>SUBTOTAL</td>
								</tr>
								<tr class="cart-table-detal">
									<td class="cart-table-header-ITEM">
										<img src="images/k6.jpg" class="osh-order-image">
											<div class="item1">
												<div class="ft-product-Georgette">Polo Black Edition</div>
												<div class="ft-product-name">Size: XS &nbsp; Color: black</div>
												<div class="ft-product-name ">Brand: No Brand</div>
												<a class="remove" data-price="145" data-discount="0" data-static="0" data-dynamic="0">Remove Item</a> 
											</div>
									</td>
									<td style="text-align: center;">
										<input type="number" class="input-quantity" value="1" max="10">
									</td>
									<td>
										<div class="unit-price ft-product-unit-price">
											<div class="current">
												TK 1200
											</div>				
										</div>
									</td>
									<td>
										<div class="subtotal">												
											<span>1200</span> 
										</div> 
									</td>
								</tr>			
							</tbody>
					</table>
					<div class="sutotota">
						<div class="suto">
							<div class="Subtotal-width">
								<div class="osh-resume">
									<div class="ft-total">
										<span class="ft-total-left">Total:</span>
											<span class="ft-total-right">TK 2400</span> 
									</div>
								</div>
							</div>											
						</div>
						<div class="bott-part">
							<div class="ft-total-bottom">
								<span class="title">Total:</span>
									<span class="ft-total-tk">
										TK 1200
									</span>
								</div>
								<div class="ft-total-bottom">
									<span>Savings:</span>
									<span class="total-discount">
										TK 0
									</span>
								</div>
								<div class="Checkout-Proceed">
									<a href="checkout" class="ft-go-to-checkout">
										Proceed to Checkout
									</a>
								</div>
							</div>
						</div>		
					</div>
				</div>
			</div>					
		</div>
	</div>
	<div class="container">
		<div class="syn-hot-deals ">
			<div class="syn-row">
				<div class="addtocart">
					<div class="col-md-12">									
						<table class="cart-table">
							<tbody>
								<tr class="cart-table-header">
									<td class="cart-table-header-ITEM">ITEM</td>
									<td>QUANTITY</td>
									<td>UNIT PRICE</td>
									<td>SUBTOTAL</td>
								</tr>
								<tr class="cart-table-detal">
									<td class="cart-table-header-ITEM">
										<img src="images/k5.jpg" class="osh-order-image">
											<div class="item1">
												<div class="ft-product-Georgette">Polo Black Edition</div>
												<div class="ft-product-name">Size: XS &nbsp; Color: black</div>
												<div class="ft-product-name ">Brand: No Brand</div>
												<a class="remove" data-price="145" data-discount="0" data-static="0" data-dynamic="0">Remove Item</a> 
											</div>
									</td>
									<td style="text-align: center;">
										<input type="number" class="input-quantity" value="1" max="10">
									</td>
									<td>
										<div class="unit-price ft-product-unit-price">
											<div class="current">
												TK 145
											</div>		
										</div>
									</td>
									<td>
										<div class="subtotal">												
											<span>145</span> 
										</div> 
									</td>
									</tr>
									</tbody>
										</table>
											<div class="sutotota">
												<div class="suto">
													<div class="Subtotal-width">
														<div class="osh-resume">
															<div class="ft-total">
																<span class="ft-total-left">Total:</span>
																<span class="ft-total-right">TK 145</span> 
															</div>
														</div>
													</div>											
												</div>
											<div class="bott-part">
												<div class="ft-total-bottom">
													<span class="title">Total:</span>
													<span class="ft-total-tk">
														TK 145
													</span>
												</div>
												<div class="ft-total-bottom">
													<span>Savings:</span>
													<span class="total-discount">
														TK 0
													</span>
												</div>
												<div class="Checkout-Proceed">
													<a href="checkout" class="ft-go-to-checkout">
														Proceed to Checkout
													</a>
												</div>
											</div>
										</div>
									</div>			
								</div>
							</div>					
						</div>
					</div>
