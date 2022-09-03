<?php 
include"db.php";			



			if (isset($_POST["submit1"])) {
											$a = $_POST["category"];
											$b = $_POST["name"];
											$c = $_POST["prize"];
											$d = $_POST["qty"];
											$e = $_POST["status"];
											$f = $_POST["desc"];
											//$g = $_POST["image"];
											$h = $_POST["key"];
											$i = $_POST["cost"];
											$s = $_POST["sub_category"];
											$NewPrice = $_POST["NewPrice"];
											$directory='../images/';
											$fileName = $_FILES['image']['name'];
											$target_file=$directory.$_FILES['image']['name'];
											$file_type=  pathinfo($target_file, PATHINFO_EXTENSION);
											//$file_size=$_FILES['cat_image']['size'];
											$check=getimagesize($_FILES['image']['tmp_name']);
										  
										    move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
											
											$sql = "INSERT INTO `products`
													(`product_cat`, `product_title`, `product_price`, `product_cost`, `quantity`, `status`, `product_desc`, `product_image`, `product_keywords`, `sub_cateid`,`NewPrice`) 
													VALUES ('$a','$b','$c','$i','$d','$e','$f','$fileName','$h','$s','$NewPrice')";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your product is Added Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
														<script type="text/javascript">
<!--
function Redirect() {
window.location="addproduct.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>
														
														
														<?php
														exit();
													}
											
											
											
										}
										
										
										
										
											if (isset($_POST["cate"])) {
											$a = $_POST["catname"];
											$b = $_POST["status"];
											
											
											$sql = "INSERT INTO `categories`
													(`cat_title`, `status`) 
													VALUES ('$a','$b')";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your product Category is Added Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
														<script type="text/javascript">
<!--
function Redirect() {
window.location="addcategory.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>
														
														
														<?php
														exit();
													}
											
											
											
										}
										
										
										
										
										
										
										
										if (isset($_POST["subcate"])) {
											$sa = $_POST["subcatname"];
											$sb = $_POST["status"];
											$sm = $_POST["main"];
											
											//require '../db_connect.php';
    
											$directory='../images/';
											$fileName = $_FILES['cat_image']['name'];
											$target_file=$directory.$_FILES['cat_image']['name'];
											$file_type=  pathinfo($target_file, PATHINFO_EXTENSION);
											//$file_size=$_FILES['cat_image']['size'];
											$check=getimagesize($_FILES['cat_image']['tmp_name']);
										  
										    move_uploaded_file($_FILES['cat_image']['tmp_name'], $target_file);

											$sql = "INSERT INTO `sub_cat`
													(`name`, `status`, `main_cate`,`cat_image`) 
													VALUES ('$sa','$sb','$sm','$fileName')";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your product sub Category is Added Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
														<script type="text/javascript">
<!--
function Redirect() {
window.location="addcategory.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>
														
														
														<?php
														exit();
													}
											
											
											
										}
										
										
										
										
										
										
			if (isset($_POST["delete"])) {
											$prodid= $_POST['prodid'];
											
											$sql = "DELETE FROM products WHERE product_id = '$prodid' ";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your product is deletedSuccessfully..!</b>
															</div></center>
														";
														
														
														?>
														
												<script type="text/javascript">
<!--
function Redirect() {
window.location="products.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>		
														
														
														<?php
														exit();
													}
											
											
											
										}
										
										
										
										
																	
			if (isset($_POST["catdelete"])) {
											$prodid= $_POST['prodid'];
											
											$sql = "DELETE FROM categories WHERE cat_id = '$prodid' ";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your product is deleted Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
												<script type="text/javascript">
<!--
function Redirect() {
window.location="category.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>		
														
														
														<?php
														exit();
													}
											
											
											
										}
										

										
										
										
										
																							
			if (isset($_POST["codelete"])) {
											$prodid= $_POST['prodid'];
											
											$sql = "DELETE FROM comments WHERE id = '$prodid' ";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Comments is deleted Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
												<script type="text/javascript">
<!--
function Redirect() {
window.location="comments.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>		
														
														
														<?php
														exit();
													}
											
											
											
										}
										
										
										
										
										if (isset($_POST["subcatdelete"])) {
											$prodid= $_POST['prodid'];
											
											$sql = "DELETE FROM sub_cat WHERE id = '$prodid' ";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your subcategory is deleted Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
												<script type="text/javascript">
<!--
function Redirect() {
window.location="subcategory.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>		
														
														
														<?php
														exit();
													}
											
											
											
										}
										
										
										if (isset($_POST["orderdelete"])) {
											$prodid= $_POST['prodid'];
											
											$sql = "DELETE FROM orders WHERE order_id = '$prodid' ";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Your product Order is deleted Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
												<script type="text/javascript">
<!--
function Redirect() {
window.location="view_order.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>		
														
														
														<?php
														exit();
													}
											
											
											
										}
										
										
											if (isset($_POST["Rdelete"])) {
											$prodid= $_POST['prodid'];
											
											$sql = "DELETE FROM pro_review WHERE name = '$prodid' ";
													if (mysqli_query($con,$sql)) {
														echo "
															<center> <div class='alert alert-success'>
																<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
																<b>Comments is deleted Successfully..!</b>
															</div></center>
														";
														
														
														?>
														
												<script type="text/javascript">
<!--
function Redirect() {
window.location="review.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 2000);
//-->
</script>		
														
														
														<?php
														exit();
													}
											
											
											
										}
										
                                        ?>
										
										
										
										
										
										