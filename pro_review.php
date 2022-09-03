







<?php include"header.php";?>
<!DOCTYPE html>
<html>
    <head>
        <title> review page</title>
    </head>
    
    <body>
        <center>
  <div class="panel-heading" style="color:white;background-color:#0B0B3B;font-size: 16px;padding: 8px;border-radius: 5px;font-weight: 500;z-index: 3;box-sizing: border-box;position:center;border: 1px solid #6FA40C;border-color:#6FA40C;text-align:center;">please fill the Form</div>
					</div>




        <form action="connection.php" method="POST">
        
            <label>customers id:<br><input type="text"  name="cus_id"</label></br>
           
            <label>product id:<br><input type="text"  name="pro_id"</label></br>
            <label>Name:<br><input type="text"  name="name"</label></br>
            <label>Email:<br> <input type="text"  name="email" ></label></br>
            
            <label> comments: <br><textarea cols="45" rows="5" maxlength="1020" name="cmnd"</label></textarea></br>
        
        
        <br><input type="submit" name="submit" value="submit">
                </br>
    </form>
            </center>
    </body>
  <?php include"footer.php";?>
</html>  

















