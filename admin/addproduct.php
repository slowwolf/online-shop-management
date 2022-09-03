<?php include"header.php";?>
 
 <link href="summernote-bs4.css" rel="stylesheet">
<div id="page-wrapper">
          
          
          
          
          
          
          
          
          
          
              <div class="row wrapper border-bottom white-bg page-heading">
           <div class="col-lg-10">
               <h2 style="background-color:#008B8B;padding:25px;color:white;width:1170px;text-align:center;">Add Products</h2>
               <ol class="breadcrumb">
                   <li class="breadcrumb-item">
                       <a href="index.php">Home</a>
                   </li>
                   
                   
               </ol>
           </div>
       </div>

       <div class="wrapper wrapper-content animated fadeInRight ecommerce">

           <div class="row">
               <div class="col-lg-12">
                   <div class="tabs-container">
                           <ul class="nav nav-tabs">
                               <li><a class="nav-link active" data-toggle="tab" href="products.php"> Product info</a></li>
                               
                           </ul>
                           <div class="tab-content">
                               <div id="tab-1" class="tab-pane active">
                                   <div class="panel-body">

                                       <fieldset>
                                       
                                       <form action="insertpro.php" method="post" enctype="multipart/form-data">
                                           <div class="form-group row"><label class="col-sm-2 col-form-label">Name:</label>
                                               <div class="col-sm-10"><input type="text" name="name"class="form-control" placeholder="Product name"></div>
                                           </div>
                                           <div class="form-group row"><label class="col-sm-2 col-form-label">Category</label>
                                               <div class="col-sm-10">
                                                   <select class="form-control" name="category" >
                                                   <?php 
                           
                           $product_query = "SELECT * FROM categories ";
                           $run_query = mysqli_query($con,$product_query);
                           
       $sl = 0;
                                       while($row = mysqli_fetch_array($run_query)){											
                                           
                                       
                                           ?>
                                                       <option value="<?php echo $row['cat_id'];?>"><?php echo $row['cat_title'];?></option>
                                       <?php }?>
                                                   </select>
                                               </div>
                                           </div>
                                           <div class="form-group row"><label class="col-sm-2 col-form-label">Sub Category</label>
                                               <div class="col-sm-10">
                                                   <select class="form-control" name="sub_category" >
                                                   <?php 
                           
                           $product_query = "SELECT * FROM sub_cat ";
                           $run_query = mysqli_query($con,$product_query);
                           
       $sl = 0;
                                       while($row = mysqli_fetch_array($run_query)){											
                                           
                                       
                                           ?>
                                                       <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                                       <?php }?>
                                                       
                                                   </select>
                                               </div>
                                           </div>

                                           <div class="form-group row"><label class="col-sm-2 col-form-label">product cost:</label>
                                               <div class="col-sm-10"><input type="text" name="cost" class="form-control" placeholder="product cost"></div>
                                           </div>

                                           <div class="form-group row"><label class="col-sm-2 col-form-label">New Price:</label>
                                               <div class="col-sm-10"><input type="text" name="prize" class="form-control" placeholder="enter prize"></div>
                                           </div>
                                           <div class="form-group row"><label class="col-sm-2 col-form-label">Old  Price:</label>
                                               <div class="col-sm-10"><input type="text" name="NewPrice" class="form-control" placeholder="enter prize"></div>
                                           </div>

                                           <div class="form-group row"><label class="col-sm-2 col-form-label">quantity:</label>
                                               <div class="col-sm-10"><input type="text" name="qty" class="form-control" placeholder="enter quantity"></div>
                                           </div>

                                           <div class="form-group row"><label class="col-sm-2 col-form-label">Description:</label>
                                               <div class="col-sm-10">
                                                   <div class="summernote">
                                                       <input type="text" name="desc"class="form-control" placeholder="write ...">

                                                   </div>
                                               </div>
                                           </div>

                                           <div class="form-group row"><label class="col-sm-2 col-form-label">Status</label>
                                               <div class="col-sm-10">
                                                   <select class="form-control" name="status" >
                                                       <option value="1">Available</option>
                                                       <option value="0">Unavailable</option>
                                                       
                                                   </select>
                                               </div>
                                           </div>

                                           <div class="form-group row"><label class="col-sm-2 col-form-label">Image name:</label>
                                               <div class="col-sm-10"><input type="file" name="image" class="form-control" placeholder="image name"></div>
                                           </div>

                                           <div class="form-group row"><label class="col-sm-2 col-form-label">Keywords:</label>
                                               <div class="col-sm-10"><input type="text" name="key" class="form-control" placeholder="image name"></div>
                                           </div>

                                           <div class="form-group row"><label class="col-sm-2 col-form-label"></label>
                                               <div class="col-sm-2"><input type="submit" name="submit1" style="background-color:#0B0B3B;color:white;" class="form-control btn btn-default" placeholder="image name"></div>
                                           </div>
                                           
                                           
                                               
   

                                           
                                       </form>
                                       </fieldset>
                                       
                                       
                                   </div>
                               </div>
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               <div id="tab-2" class="tab-pane">
                                   <div class="panel-body">

                                       <fieldset>
                                           <div class="form-group row"><label class="col-sm-2 col-form-label">ID:</label>
                                               <div class="col-sm-10"><input type="text" class="form-control" placeholder="543"></div>
                                           </div>
                                           <div class="form-group row"><label class="col-sm-2 col-form-label">Model:</label>
                                               <div class="col-sm-10"><input type="text" class="form-control" placeholder="..."></div>
                                           </div>
                                           <div class="form-group row"><label class="col-sm-2 col-form-label">Location:</label>
                                               <div class="col-sm-10"><input type="text" class="form-control" placeholder="location"></div>
                                           </div>
                                           <div class="form-group row"><label class="col-sm-2 col-form-label">Tax Class:</label>
                                               <div class="col-sm-10">
                                                   <select class="form-control" >
                                                       <option>option 1</option>
                                                       <option>option 2</option>
                                                   </select>
                                               </div>
                                           </div>
                                           <div class="form-group row"><label class="col-sm-2 col-form-label">Quantity:</label>
                                               <div class="col-sm-10"><input type="text" class="form-control" placeholder="Quantity"></div>
                                           </div>
                                           <div class="form-group row"><label class="col-sm-2 col-form-label">Minimum quantity:</label>
                                               <div class="col-sm-10"><input type="text" class="form-control" placeholder="2"></div>
                                           </div>
                                           <div class="form-group row"><label class="col-sm-2 col-form-label">Sort order:</label>
                                               <div class="col-sm-10"><input type="text" class="form-control" placeholder="0"></div>
                                           </div>
                                           <div class="form-group row"><label class="col-sm-2 col-form-label">Status:</label>
                                               <div class="col-sm-10">
                                                   <select class="form-control" >
                                                       <option>option 1</option>
                                                       <option>option 2</option>
                                                   </select>
                                               </div>
                                           </div>
                                       </fieldset>


                                   </div>
                               </div>
                               <div id="tab-3" class="tab-pane">
                                   <div class="panel-body">

                                       <div class="table-responsive">
                                           <table class="table table-stripped table-bordered">

                                               <thead>
                                               <tr>
                                                   <th>
                                                       Group
                                                   </th>
                                                   <th>
                                                       Quantity
                                                   </th>
                                                   <th>
                                                       Discount
                                                   </th>
                                                   <th style="width: 20%">
                                                       Date start
                                                   </th>
                                                   <th style="width: 20%">
                                                       Date end
                                                   </th>
                                                   <th>
                                                       Actions
                                                   </th>
                                               </tr>
                                               </thead>
                                               <tbody>
                                               <tr>
                                                   <td>
                                                       <select class="form-control" >
                                                           <option selected>Group 1</option>
                                                           <option>Group 2</option>
                                                           <option>Group 3</option>
                                                           <option>Group 4</option>
                                                       </select>
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" placeholder="10">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" placeholder="$10.00">
                                                   </td>
                                                   <td>
                                                       <div class="input-group date">
                                                           <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="input-group date">
                                                           <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                       </div>
                                                   </td>
                                                   <td>
                                                           <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <select class="form-control" >
                                                           <option selected>Group 1</option>
                                                           <option>Group 2</option>
                                                           <option>Group 3</option>
                                                           <option>Group 4</option>
                                                       </select>
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" placeholder="10">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" placeholder="$10.00">
                                                   </td>
                                                   <td>
                                                       <div class="input-group date">
                                                           <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="input-group date">
                                                           <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <select class="form-control" >
                                                           <option selected>Group 1</option>
                                                           <option>Group 2</option>
                                                           <option>Group 3</option>
                                                           <option>Group 4</option>
                                                       </select>
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" placeholder="10">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" placeholder="$10.00">
                                                   </td>
                                                   <td>
                                                       <div class="input-group date">
                                                           <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="input-group date">
                                                           <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <select class="form-control" >
                                                           <option selected>Group 1</option>
                                                           <option>Group 2</option>
                                                           <option>Group 3</option>
                                                           <option>Group 4</option>
                                                       </select>
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" placeholder="10">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" placeholder="$10.00">
                                                   </td>
                                                   <td>
                                                       <div class="input-group date">
                                                           <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="input-group date">
                                                           <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <select class="form-control" >
                                                           <option selected>Group 1</option>
                                                           <option>Group 2</option>
                                                           <option>Group 3</option>
                                                           <option>Group 4</option>
                                                       </select>
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" placeholder="10">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" placeholder="$10.00">
                                                   </td>
                                                   <td>
                                                       <div class="input-group date">
                                                           <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="input-group date">
                                                           <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <select class="form-control" >
                                                           <option selected>Group 1</option>
                                                           <option>Group 2</option>
                                                           <option>Group 3</option>
                                                           <option>Group 4</option>
                                                       </select>
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" placeholder="10">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" placeholder="$10.00">
                                                   </td>
                                                   <td>
                                                       <div class="input-group date">
                                                           <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="input-group date">
                                                           <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <select class="form-control" >
                                                           <option selected>Group 1</option>
                                                           <option>Group 2</option>
                                                           <option>Group 3</option>
                                                           <option>Group 4</option>
                                                       </select>
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" placeholder="10">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" placeholder="$10.00">
                                                   </td>
                                                   <td>
                                                       <div class="input-group date">
                                                           <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <div class="input-group date">
                                                           <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                       </div>
                                                   </td>
                                                   <td>
                                                       <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                   </td>
                                               </tr>

                                               </tbody>

                                           </table>
                                       </div>

                                   </div>
                               </div>
                               <div id="tab-4" class="tab-pane">
                                   <div class="panel-body">

                                       <div class="table-responsive">
                                           <table class="table table-bordered table-stripped">
                                               <thead>
                                               <tr>
                                                   <th>
                                                       Image preview
                                                   </th>
                                                   <th>
                                                       Image url
                                                   </th>
                                                   <th>
                                                       Sort order
                                                   </th>
                                                   <th>
                                                       Actions
                                                   </th>
                                               </tr>
                                               </thead>
                                               <tbody>
                                               <tr>
                                                   <td>
                                                       <img src="img/gallery/2s.jpg">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" disabled value="../../mydomain.com/images/image1.html">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" value="1">
                                                   </td>
                                                   <td>
                                                       <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <img src="img/gallery/1s.jpg">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" disabled value="../../mydomain.com/images/image2.html">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" value="2">
                                                   </td>
                                                   <td>
                                                       <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <img src="img/gallery/3s.jpg">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" disabled value="../../mydomain.com/images/image3.html">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" value="3">
                                                   </td>
                                                   <td>
                                                       <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <img src="img/gallery/4s.jpg">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" disabled value="../../mydomain.com/images/image4.html">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" value="4">
                                                   </td>
                                                   <td>
                                                       <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <img src="img/gallery/5s.jpg">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" disabled value="../../mydomain.com/images/image5.html">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" value="5">
                                                   </td>
                                                   <td>
                                                       <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <img src="img/gallery/6s.jpg">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" disabled value="../../mydomain.com/images/image6.html">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" value="6">
                                                   </td>
                                                   <td>
                                                       <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <img src="img/gallery/7s.jpg">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" disabled value="../../mydomain.com/images/image7.html">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" value="7">
                                                   </td>
                                                   <td>
                                                       <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                   </td>
                                               </tr>
                                               </tbody>
                                           </table>
                                       </div>

                                   </div>
                               </div>
                           </div>
                   </div>
               </div>
           </div>

       </div>
                       <!-- /.panel-body -->
                       
                       
                       
                        <?php include"footer.php";?>
      
