<?php include"header.php";?>












<style>
			/*----- Thank You Page ----*/
			#thank-you {
				background-color: #f9f8f8;
			}
			#thank-you h2.successfull {
				text-align: center;
				margin: 2em 0;
				font-size: 26px;
				color: #fdb90b;
				text-shadow: 1px 1px 1px #666;
			}
			#thank-you span.p-title {
				text-align: center;
				margin: 1.5em 0;
				background-color: #fdb90b;
				color: #f9f8f8;
				font-size: 20px;
				padding: .3em .6em;
				display: inline-block;
			}
			#thank-you .separator {
				height: 10px;
			}
			#thank-you .background-white {
				background: #fff;
				border: 1px solid #fdb90b;
				padding: .5em;
			}
			#thank-you .your-data, #thank-you .your-bill {
				text-align: center;
			}
			#thank-you .your-data table{
				width: 100%;
				border-collapse: collapse;
				border-spacing: 0;
				border: 0;
			}
			#thank-you .your-data table tr td{
				padding: 2px;
				font-size: 12px;
				text-align: left;
				color: #666
			}
			#thank-you .your-bill p {
				text-align: right;
			}
			#thank-you .your-bill .invoice-print {
				color: #333;
				text-decoration: underline;
				font-size: 18px;
				font-weight: 600;
				font-family: 'Times New Roman';
				cursor: pointer;
			}
			#thank-you .invoice {
				position: relative;
				width: 800px;
				margin: 50px auto;
				text-align: left;
				padding: 50px 65px;
				box-shadow: 0px 0px 20px #ccc;
			}
			#thank-you .invoice-top img {
				max-width: 100%;
				height: 100px;
			}
			#thank-you .invoice-top .tagline h2.company-name{
				font-weight: bold;
				font-size: 28px;
				line-height: 1em;
				text-transform: none;
				margin: 0;
			}
			#thank-you .invoice-top .tagline p{
				text-align: left;
				color: #888;
				font-size: 14px;
				margin-bottom: 0;
				line-height: 19.6px;
			}
			#thank-you .invoice-top .qr {
				text-align: right;
			}
			#thank-you .invoice-middle .invoice-id {
				margin-top: 60px;
				margin-bottom: 40px;
			}
			#thank-you .invoice-middle h1{
				font-size: 50px;
				font-family: 'impact';
				color: #396E00;
				line-height: 50px;
			}
			#thank-you .invoice-middle .invoice-info table{
				width: auto;
				border-collapse: collapse;
				border-spacing: 0;
			}
			#thank-you .invoice-middle .invoice-info table tr td{
				padding: 1px 3px;
			}
			#thank-you .invoice-middle .invoice-bill-to p {
				text-align:left;
				margin-bottom: 2px;
				font-size: 14px;
				color: #000;
			}
			#thank-you .invoice-table .itemLists {
				width: 100%;
				border-collapse: collapse;
				border-spacing: 0;
				margin-top: 40px;
				font-size: 14px;
			}
			#thank-you .invoice-table .itemLists td,#thank-you .invoice-table .itemLists th{
				padding: 10px;
			}
			#thank-you .invoice-table .itemLists td p.ipnaid {
				font-size: 13px;
				color: #333;
				text-align: left;
				margin-bottom: 0px;
			}
			#thank-you .invoice-table .itemLists td p.ipnaid.ipname {
				font-weight: 600;
			}
			#thank-you .invoice-table .itemLists thead tr{
				border-bottom: 2px solid #aaa;
				color: #333;
				font-weight: 600;
			}
			#thank-you .invoice-table .itemLists tbody tr{
				border-bottom: 1px solid #ccc;
				color: #333;
				font-weight: 500;
			}
			#thank-you .invoice-table .itemTotal {
				width: 35%;
				border-collapse: collapse;
				border-spacing: 0;
				margin-top: 10px;
				font-size: 14px;
				float: right;
				color: #333;
			}
			#thank-you .invoice-table .itemTotal tr.subtotal {
				color: #396E00;
				border-top: 2px dotted #aaa;
				font-size: 16px;
			}
			#thank-you .invoice-table .itemTotal tr td{
				padding: 5px;
			}
			#thank-you .invoice-table .payment-info {
				color: #888;
				font-size: 12px;
				margin-top: 20px;
				width: 100%;
				font-weight: normal;
			}
			#thank-you .paid-stamp {
				max-width: 25%;
				display: block;
				margin: 0 auto;
				position: absolute;
				top: 215px;
				right: 71px;
				opacity: .5;
			}
			@media print {
				body * {
					visibility: hidden;
				}
				.invoice, .invoice * {
					visibility: visible;
				}
				.invoice {
					width: 100%;
					position: absolute;
					left: 0;
					top: 0;
				}
			}
		</style>
<div id="page-wrapper">
		<div class="row">
				<div class="col-lg-12">
						<h1 class="page-header" style="text-align:center;">Your Invoice</h1>
						
						
<?php 
							
           include"db.php";         
					if(isset($_GET["id"]))
					{						
					$id = $_GET["id"];
						$date = date("Y-m-d");	
							$product_query = "SELECT orders.tnx_id,orders.order_id,orders.user_id,orders.product_id,orders.qty,orders.full_name,orders.city,orders.address,orders.email,products.product_title,products.product_price,products.product_image from orders INNER JOIN  products ON orders.product_id = products.product_id where tnx_id = $id ;";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;
		
										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$orderid = $row['order_id'];
											$product_image = $row['product_image'];
											
											$product_title = $row['product_title'];
											$quantity = $row['qty'];
											
											
											
											$product_price = $row['product_price'];
											$name = $row['full_name'];
											$city = $row['city'];
											$address = $row['address'];
											$email = $row['email'];
											$userid = $row['user_id'];
											$tnx = $row['tnx_id'];
											
											
											
											?>
							
							
							
								<div id="thank-you">
			<div class="your-bill">				
				<div class="background-white">
					<p><span class="invoice-print" onclick="window.print()"><i class="fa fa-print"></i> Print</span></p> 
					<div class="invoice">
						<div class="row invoice-top">
							<div class="col-md-3 col-sm-3 col-xs-3 logo">
								<img src="../images/logo15.jpg"><b style="color:skyblue"></b></img>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 tagline">
								<h2 class="company-name" style="color:green;">Online Shop Management System</h2>
								<div class="separator"></div>
								<p class="company-address">Suite # 618, 87 BNS Center, Sector # 7, Uttara, Dhaka-1230</p>
								<p class="company-contact"> info@webtech.com</p>
							</div>
							
						</div>
						
						
						
						
							
						<div class="row invoice-middle">
							<div class="col-md-12 invoice-id">
								<center> <h3 style="color:green;">Invoice</h3> </center>
								<hr/>
								<span style="float:right;color:green;">Phone : 01937084470 </span>
							</div>
							<div class="clearfix"></div>

							<div class="col-md-6 col-sm-6 col-xs-6 invoice-info">
								<table border="0">
								<tr><td>Invoice Id </td><td>:</td><td># 00<?php
echo $orderid;
?> </td></tr>
									<tr><td>Day</td><td>:</td><td><?php
echo date("D");
?> </td></tr>

<tr><td>Order date</td><td>:</td><td><?php
echo $date;
?> </td></tr>
									<tr><td>Month:</td><td>:</td><td>
									<?php
                                   echo date("M");
                                   ?>
                                  <tr><td>Year:</td><td>:</td><td>
									<?php
                                 echo date("Y");
                                  ?>
									
									
									</td></tr>
									<tr><td>Department</td><td>:</td><td>Sales </td></tr>
									<tr><td>Report Type</td><td>:</td><td> Customer Invoice</td></tr>
								</table>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 invoice-bill-to">
								Bill to: <?php echo $name; ?> <br>
								Transaction id: <b><?php echo $tnx; ?> </b><br>
								Address: <?php echo $address; ?> <br>
								City:<?php echo $city; ?> <br>
								Email:<?php echo $email; ?> 
																			
																	
							</div>
						</div>
						<div class="row invoice-table">
							<div class="col-md-12">
								<table border="0" class="itemLists">
									<thead>
										<tr><th>Sl No</th><th>Product image</th><th>Name</th><th>quantity</th><th>prize</th><th>Total</th></tr>
									</thead>
									<tbody>
									
									
							
							
							
										  <tr>
											<td><?php echo $sl; ?></td>
											
											<td><img src="../images/<?php echo $product_image; ?>"  style="height: 70px;width:100px;"></td>
											<td><?php echo $product_title; ?></td>
											<td><?php echo $quantity; ?></td>
											<td><?php echo $product_price; ?></td>
											
											<td>
										
											<?php 
											$total = $row['product_price']*$row['qty'];
											
											
											echo $total."TK";
											
											?></td>
											
											
										  </tr>
										  
							
					
										
									</tbody>
								</table>
								
								<div class="clearfix"></div>
								
								<div class="separator"></div>
								<div class="payment-info">
								<h5>	Total product cost: <b><?php $total = $row['product_price']*$row['qty'];
											
											
											echo $total."TK";
											;?></b> TK
									
									
									
									</h5>
									
								</div>
								
								
								
						
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
				
							
							
							<?php
		}
							}
							
							}
							
							?>				
										 
			
			 <script language = "JavaScript">
         function drawChart() {
            // Define the chart to be drawn.
            var data = google.visualization.arrayToDataTable([
               ['Year', 'Cost', 'profit'],
               ['2012',  900,      390],
               ['455',  1000,      400],
               ['2014',  1170,      440],
               ['2015',  1250,       480],
               ['2016',  1530,      540]
            ]);

            var options = {title: 'Salling rate (monthly)'};  

            // Instantiate and draw the chart.
            var chart = new google.visualization.ColumnChart(document.getElementById('calendar'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
      </script>				
							
					
		
				</div>
		</div>
		<div class="row">
				
		</div>
</div>


<?php include"footer.php";?>



