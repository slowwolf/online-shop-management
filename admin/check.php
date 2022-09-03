 <?php include"header.php";?>
 
 
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <h2 style="background-color:#008B8B;padding:25px;color:white;text-align:center;"> Accounts </h2><hr/>
                </div>
                <!-- /.col-lg-12 -->
				<span style="float:right;"> <a href="report.php"class="btn btn-success"> Monthly Selling report</a></span>
					<span style="float:right;"> <a href="check.php?week=1"class="btn btn-success"> Weekly Selling report</a></span>
				<span style="float:right;"> <a href="check.php?date=1"class="btn btn-success"> date wise Selling report</a></span>
				
            </div>
            <!-- /.row -->
			
		<?php 

			if(isset($_GET["date"]))
			{
			?>
			<center> <h1>  Date wise report </h1> </center>
			
			<div class="row">
			
				<form action ="datewise_report.php" method="post" >
					<label> Date wise </label>
					<input type="date" name="dd" value="" class="form-control">
					
					<input type="submit" name="submit" value="submit" class="btn btn-success">
				
				</form>
			
			
			
			</div>
			
			
		<?php

			}
			?>
			
			
			
			
			
			<?php 

			if(isset($_GET["week"]))
			{
			?>
			<center> <h1>  Weekly report </h1> </center>
			
			<div class="row">
			
				<form action ="weekly_report.php" method="post" >
					<label> From </label>
					<input type="date" name="from" value="" class="form-control">
					
					<label> To </label>
					<input type="date" name="to" value="" class="form-control">
					
					<input type="submit" name="submit1" value="submit" class="btn btn-success">
				
				</form>
			
			
			
			</div>
			
			
		<?php

			}
			?>
			
			
			
			
			
								
								
			
            
                        <!-- /.panel-body -->
						
						
						
						 <?php include"footer.php";?>
       
