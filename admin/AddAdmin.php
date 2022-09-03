<?php include"header.php";?>

<?php

if (isset($_POST["btnAddAdmin"])){
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $mobile = $_POST["mobile"];
 
    
    
    $sql = "INSERT INTO `user_info`
            (`first_name`, `last_name`,`email`,`password`,`mobile`) 
            VALUES ('$first_name','$last_name','$email','$password','$mobile')";
            if (mysqli_query($con,$sql)) {
                echo "
                    <center> <div class='alert alert-success'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <b>Admin  Added Successfully..!</b>
                    </div></center>
                ";
                
               
            }
    
    
    
}

?>
<link href="summernote-bs4.css" rel="stylesheet">
<div id="page-wrapper">   
          
          
              <div class="row wrapper border-bottom white-bg page-heading">
           <div class="col-lg-10">
               <h2 style="color:#0B0B3B;text-align:center;">Add Customer</h2>
               <ol class="breadcrumb">
                   <li class="breadcrumb-item">
                       <a href="index.php">Home</a>
                   
               </ol>
           </div>
       </div>

       <div class="wrapper wrapper-content animated fadeInRight ecommerce">

           <div class="row">
               <div class="col-lg-12">
                   <div class="tabs-container">
                           
                           
                           
                           
                           
<div class="panel-body">

            <fieldset>
            
            <form action="#" method="post" >
                <div class="form-group row">
                <label class="col-sm-2 col-form-label">First Name:</label>
                    <div class="col-sm-10">
                    <input type="text" name="first_name"class="form-control" placeholder="First Name">
                    </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-2 col-form-label">Last Name:</label>
                    <div class="col-sm-10">
                    <input type="text" name="last_name"class="form-control" placeholder="Last Name">
                    </div>
                </div>


                <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                    <input type="email" name="email"class="form-control" placeholder="email">
                    </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password:</label>
                    <div class="col-sm-10">
                    <input type="password" name="password"class="form-control" placeholder="password">
                    </div>
                </div>


                <div class="form-group row">
                <label class="col-sm-2 col-form-label">Mobile:</label>
                    <div class="col-sm-10">
                    <input type="text" name="mobile"class="form-control" placeholder="mobile">
                    </div>
                </div>

                
                
                <div class="form-group row"><label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-2"><input type="submit" name="btnAddAdmin" class="form-control btn btn-success" placeholder="image name"></div>
                </div>
                
                
                    


                
            </form>
            </fieldset>
            
            
        </div>
                   </div>
               </div>
           </div>

       </div>