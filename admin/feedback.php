<?php include"header.php";?>



<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <center> <h2 style="background-color:#008B8B;padding:25px;color:white;"> FeedBack </h2></center> <hr/>
                </div>
                <!-- /.col-lg-12 -->
            </div>
  <table class="table">
  <thead>
  <tr>
   <th>Name</th>
   <th>Email</th>
   <th>Phone No</th>
   <th>Message</th>
<th>Option</th>
   </tr>
  </thead>
  <tbody>
  <?php 
							


							$product_query = "select  *from feedback;";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){
		$sl = 0;

										while($row = mysqli_fetch_array($run_query)){
											$sl++;
											$name = $row['Name'];
											
											$email = $row['Email'];
											$PhoneNo = $row['PhoneNo'];
											$Mgs = $row['Mgs'];
											
											

											
											?>
  <tr>
  <td> <?php echo $name; ?></td>
  <td><?php echo $email; ?> </td>
  <td><?php echo $PhoneNo; ?> </td>
  <td> <?php echo $Mgs;?></td> 
<td><form action="email.php" method="post">
											<input type="hidden" name="uid" class="btn btn-danger" value="<?php echo $uid;?>">
											<input type="submit" name="cusdetails" class="btn btn-info" value="SEND MAIL">
								
											</form>
</td>

                                      
  </tr>
  <?php $sl++;}}?>
  </tbody>
   </table>
  </div>
  <?php include"footer.php";?>