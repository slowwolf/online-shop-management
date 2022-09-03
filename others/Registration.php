<?php
	include "doc/includes/config.php";
	include "doc/includes/functions.php";
	if(isset($_COOKIE['clt'])) header("Location: index.php");
	if(isset($_POST['register_user'])) {
		$field['username']			= mysqli_real_escape_string($conn, $_POST['email']);
		$field['password']			= mysqli_real_escape_string($conn, $_POST['password']);
		$field['token']				= random_token();
		$field['first_name']		= mysqli_real_escape_string($conn, $_POST['first_name']);
		$field['last_name']			= mysqli_real_escape_string($conn, $_POST['last_name']);
		$field['email']				= mysqli_real_escape_string($conn, $_POST['email']);
		$field['address']			= mysqli_real_escape_string($conn, $_POST['address_line_1']);
		$field['city']				= mysqli_real_escape_string($conn, $_POST['state']);
		$field['district']			= mysqli_real_escape_string($conn, $_POST['city']);
		$field['country']			= 'Bangladesh';
		$field['postalcode']		= mysqli_real_escape_string($conn, $_POST['postalcode']);
		$field['mobile_number']		= mysqli_real_escape_string($conn, $_POST['phone']);
		$field['wishlists']			= '';
		
		$check	= "SELECT * FROM users WHERE username='{$field['username']}' OR mobile_number LIKE '%{$field['mobile_number']}'";
		$check_result	= $conn->query($check);
		
		if($check_result->num_rows != 0) {
			$emsg = "Username already exists !";
		} else {
			echo $check_result->num_rows;
			$sql	= InsertInTable('users',$field);
			$ref_page	= isset($_POST['ref']) ? $_POST['ref'] : 'index';
			
			if($conn->query($sql)) {
				setcookie("clt", $field['token'], time() + (86400 * 2),"/");
				header("Location: index.php");
			} else {
				$emsg = $conn->error;
			}
		}
	}
?>
<style type="text/css">
.error-msg {
	color: #f00;
	margin: 7px 0;
	font-weight: bold;
}
</style>
	<style type="text/css">
		.error-msg {
			color: #f00;
			margin: 7px 0;
			font-weight: bold;
		}
	</style>
<html>
   <head>
        <title>Online Shopping</title>
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
								<div class="registration-form">
									<h3 class="title">Registration Here</h3>
									<?php if(isset($emsg)) echo '<p>'.$emsg.'</p>'; ?>
										<form method="POST" action="">
											<input type="hidden" name="register_user">
											<input name="first_name" type="text" class="form-control" placeholder="First Name" required=""><br>
											<input name="last_name" type="text" class="form-control" placeholder="Last Name" required=""><br>
											<textarea name="address_line_1" class="form-control" placeholder="Address"></textarea><br>
											<input name="state" type="text" class="form-control" placeholder="Your City" required=""><br>
											<input name="city" type="text" class="form-control" placeholder="Your District" required=""><br>
											<input name="postalcode" type="text" class="form-control" placeholder="Postalcode" required=""><br>
											<input name="phone" type="text" class="form-control" placeholder="Phone Number" required=""><br>
											<input name="email" type="text" class="form-control" placeholder="Your Email" required=""><br>		
											<input name="password" type="password" class="form-control" placeholder="Password" required=""><br>
											<input type="submit" class="form-control submit" value="Register">
					                    </form>
								</div>	
				    
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