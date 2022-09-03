<?php 
include"db.php";

if (isset($_GET["pid"])) {

	
	$orderid= $_GET['pid'];
	
	$sql = "UPDATE orders SET p_status ='processing' WHERE order_id = '$orderid' ";
	
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b><center>Order is updated</center></b>
				</div>";
		
		
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
	}
	
}
	
	
	if (isset($_GET["did"])) {

	
	$orderid= $_GET['did'];
	
	$sql = "UPDATE orders SET p_status ='delivered' WHERE order_id = '$orderid' ";
	
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b><center>Order is updated</center></b>
				</div>";
		
		
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
	}
	
}
	
	
	






?>