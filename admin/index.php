 <?php include"header.php";?>
 
 
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
					<center> <h2 style="background-color:#008B8B;padding:30px;color:white;">Welcome To Admin Panel</h2></center>
					<div>
					<img src="image/admin.jpg" style="width:1179px;height:250px;" >
					</div>
                    <h1 class="page-header" style="color:skyblue;text-align:center;">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php
											include "db.php";
											$product_query = "SELECT * FROM comments";
	                                         $run_query = mysqli_query($con,$product_query);
											
											$number= mysqli_num_rows($run_query);
											echo $number;
											?></div>
                                    <div>New Comments!</div>
                                </div>
                            </div>
                        </div>
                        <a href="comments.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
									<?php
											include "db.php";
											$product_query = "SELECT * FROM products";
	                                         $run_query = mysqli_query($con,$product_query);
											
											$number= mysqli_num_rows($run_query);
											echo $number;
											?>
									
									
									</div>
                                    <div>Total Products!</div>
                                </div>
                            </div>
                        </div>
                        <a href="products.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
									<?php
											include "db.php";
											$product_query = "SELECT * FROM orders";
	                                         $run_query = mysqli_query($con,$product_query);
											
											$number= mysqli_num_rows($run_query);
											echo $number;
											?>
									
									
									</div>
                                    <div>New Orders!</div>
                                </div>
                            </div>
                        </div>
                        <a href="view_order.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
							
							
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                   
                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    
                    <!-- /.panel -->
                    
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="chat-panel panel panel-default">
                       
                        <!-- /.panel-heading -->
                        
                        <!-- /.panel-body -->
						
						
						
						 <?php include"footer.php";?>
       
