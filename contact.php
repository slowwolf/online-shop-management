
<?php include"header.php";?>
<html>
    <div class="container">
    	<div class="row">
    		<div class="addimgContact">
    			<img src="images/s3.jpg">
    		</div>
    			<div class="col-md-6">
    				<div class="contact-info-list">
    					<h3>Showroom Information</h3>
    					<ul>
    						<li><a href="www.facebook.com"><i class="fa fa-home" arial-hidden="true"></i>Address :</a> Ajompur,Amir Complex,Sector-3,Uttara,Dhaka-1230</li>
    						<li><a href="www.facebook.com"><i class="fa fa-phone" arial-hidden="true"></i>Phone :01688807433</li>
    						<li><a href="www.facebook.com"><i class="fa fa-whatsapp" arial-hidden="true"></i>Whatsapp :</a> 01913757371</li>
    						<li><a href="www.facebook.com"><i class="fa fa-facebook" arial-hidden="true"></i>Facebook : Deshi_Western-facebook
    						<li><a href=""><i class="fa fa-at" arial-hidden="true"></i>Email :</a> deshi_western@gmail.com</li>
    					</ul>
    				</div>
    			</div>
				<div class="col-md-6">
					<div class="contact-title">
						<h3>SAY HELLO!!</h3>
						<?php 
					
					if(isset($_POST["MgsFeed"]))
						
						{
							$name = $_POST["name"];
							$email = $_POST["email"];
							$phone = $_POST["phone"];
							$message =$_POST["message"];
					require 'db.php';
					$sql = "INSERT INTO `feedback`
			(`Name`, `Email`, `PhoneNo`,`Mgs`) 
			VALUES ('$name','$email','$phone','$message')";
			if (mysqli_query($con,$sql)) {
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Your feedback has been Added Successfully..!</b>
					</div>
				";
			//	exit();
			}
		}
					
?>
					</div>
					<div class="contact-form">
						<form method="POST" action"#">
							<input name="name" type="text" class="form-control" placeholder="Your Name" required=""><br>
							<input name="email" type="text" class="form-control" placeholder="Your Email" required=""><br>		
							<input name="phone" type="text" class="form-control" placeholder="Phone Num" required=""><br>
							<textarea name="message" class="form-control" placeholder="Message"></textarea><br>
							<input type="submit" class="form-control submit" value="SEND MESSAGE" name="MgsFeed">
						</form>
    				</div>		
    		</div>
	</div>
</div>
</html>

<?php include"footer.php";?>