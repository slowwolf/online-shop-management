<?php 
session_start();

require_once 'db.php';

 //echo $_SESSION['userId'];

if(!$_SESSION['userId'] &&  $_SESSION['type'] != 1) {
	header('location: ../login1.php');	
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Shop Managment System</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js">
      </script>
      <script type = "text/javascript">
         google.charts.load('current', {packages: ['corechart']});     
      </script>

</head>

<body>

    <div id="wrapper"> 

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color:#008B8B;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:white;">Online Shop Management System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color:#FDF5E6">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><a href="forgetpass.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation" style="background-color:#008B8B;color:white;">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <h3 style="background-color:#008B8B;color:white;padding:20px;"></h3>

                         <li>
                            <a href="index.php" style="color:skyblue;background-color:#008B8B;"><i class="fa fa-bar-chart-o fa-fw"></i>Index</a>
                        </li>

                        <li>
                            <a href="index.php" style="color:skyblue;"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <ul class="nav" id="side-menu">
                        <h3 style="background-color:#008B8B;color:white;padding:20px;"></h3>
                        <li>
                            <a href="#" style="color:skyblue;"><i class="fa fa-bar-chart-o fa-fw"></i> User Manage<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="AddAdmin.php" style="color:skyblue;">Add Customer</a>
                                </li>
                                <li>
                                    <a href="AdminDetails.php" style="color:skyblue;">Customer Details</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#" style="color:skyblue;"><i class="fa fa-bar-chart-o fa-fw"></i> Order<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="View_order.php" style="color:skyblue;">View order</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						 <li>
                            <a href="#" style="color:skyblue;"><i class="fa fa-bar-chart-o fa-fw"></i> Customers<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="cus_info.php" style="color:skyblue;">View customer</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#" style="color:skyblue;"><i class="fa fa-bar-chart-o fa-fw"></i> product Section<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="products.php" style="color:skyblue;">View products</a>
                                </li>
								 <li>
                                    <a href="monitoring.php" style="color:skyblue;">Monitoring</a>
                                </li>
								<li>
                                    <a href="comments.php" style="color:skyblue;"> products comments</a>
                                </li>
                                <li>
                                    <a href="addproduct.php" style="color:skyblue;">Add products</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#" style="color:skyblue;"><i class="fa fa-bar-chart-o fa-fw"></i> Categories<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="category.php" style="color:skyblue;">View categories</a>
                                </li>
								<li>
                                    <a href="subcategory.php" style="color:skyblue;">View subcategories</a>
                                </li>
                                <li>
                                    <a href="addcategory.php" style="color:skyblue;">Add category</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="account.php" style="color:skyblue;"><i class="fa fa-table fa-fw"></i> Accounts</a>
                        </li>

                        <li>
                            <a href="feedback.php" style="color:skyblue;"><i class="fa fa-table fa-fw"></i> Feed Back</a>
                        </li>
                        
                     
                        
						
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>