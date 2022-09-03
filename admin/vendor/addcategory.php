 <?php include"header.php";?>
 
  <link href="summernote-bs4.css" rel="stylesheet">
 <div id="page-wrapper">
           
		   
		   
		   
		   
		   
		   
		   
		   
		   
		       <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Product edit</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>E-commerce</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Add category</strong>
                    </li>
                </ol>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">

            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                            
							
							
							
							
							<div class="panel-body">

                                        <fieldset>
										
										<form action="insertpro.php" method="post" >
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Name:</label>
                                                <div class="col-sm-10"><input type="text" name="catname"class="form-control" placeholder="Product name"></div>
                                            </div>
											<div class="form-group row"><label class="col-sm-2 col-form-label">Status</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="status" >
                                                        <option value="1">Available</option>
                                                        <option value="0">Unavailable</option>
														
                                                    </select>
                                                </div>
                                            </div>
                                          
											<div class="form-group row"><label class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-2"><input type="submit" name="cate" class="form-control btn btn-success" placeholder="image name"></div>
                                            </div>
											
											
												
    

                                            
										</form>
                                        </fieldset>
										
										
                                    </div>
                    </div>
                </div>
            </div>

        </div>
                        <!-- /.panel-body -->
						
						
						
						 <?php include"footer.php";?>
       
