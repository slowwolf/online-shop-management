<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New Password</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
    <?php 
					
					
					if(isset($_POST["forgetpass"]))
						
						{
							
							$email = $_POST["email"];
							$UserName = $_POST["UserName"];
							$password1 = $_POST['password'];
							$pas =md5($password1);
					require 'db.php';
					$sql = "update `user_info` set first_name = '$UserName',password= '$pas' WHERE email = '$email'";
			if (mysqli_query($con,$sql)) {
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Your password and UserName Has been updated Successfully..!</b>
					</div>
				";
				//exit();
			}
		}
					
?>
        <div class="form-container">
            <form action="#" method="POST" class="form-wrap ">
               <h5> Create new password</h5>
               <div class="form-submit" >
                   <input type ="text" placeholder="Enter Email" />
                <input type ="text" placeholder="user name" />
                   <br><input type ="text" placeholder="password" />
               </div>
               
               <div class="form-submit">
                   <input type="submit" value="send"/>
                   
               </div>
            </form>
        </div>
    </body>
        
   
</html>