<?php
include "header.php";
?>

<link rel="stylesheet" href="link/checkoutstyle.css"/>




<!-- Checkout Page Start -->
<div class="page-section section mt-90 mb-30">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <!-- Checkout Form s-->
                <form action="payment.php" method="post" class="checkout-form">
                           <!-- Billing Address -->
                           <div id="billing-form" >
                               <h4 class="checkout-title"style="text-align:center;color:skyblue;">Your Billing is here</h4>

                               <div class="row">

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Full Name*</label>
                                       <input type="text" id="fullname" name="fullname" placeholder="First Name">
                                   </div>

                                  

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Email Address*</label>
                                       <input type="email" id="email" name="email" placeholder="Email Address">
                                   </div>

                                   <div class="col-12">
                                       <label>Phone</label>
                                       <input type="text" id="adr" name="adr" placeholder="Phone number">
                                   </div>

                                   <div class="col-12">
                                       <label>Town/City</label>
                                       <input type="text" id="city" name="city" placeholder="Town/City">
                                   </div>
								   

                                   <div class="col-md-6">
                                       <label>Address</label>
                                       <input type="text" id="state" name="state" placeholder="present address">
                                   </div>

                                   <div class="col-md-6">
                                       <label>postcode</label>
                                       <input type="text" id="zip" name="zip" placeholder="postcode">
                                   </div>

                                   <div class="col-12 mb-20">
                                       
                                   </div>

                               </div>

                           </div>
                           
                           <!-- Shipping Address -->
                           <div id="shipping-form" class="mb-40">
                               <h4 class="checkout-title">Shipping Address</h4>

                               <div class="row">

                                   <div class="col-md-12 col-12 mb-20">
                                       <label>First Name*</label>
                                       <input type="text" placeholder="First Name">
                                   </div>

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Last Name*</label>
                                       <input type="text" placeholder="Last Name">
                                   </div>

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Email Address*</label>
                                       <input type="email" placeholder="Email Address">
                                   </div>

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Phone no*</label>
                                       <input type="text" placeholder="Phone number">
                                   </div>

                                   <div class="col-12 mb-20">
                                       <label>Company Name</label>
                                       <input type="text" placeholder="Company Name">
                                   </div>

                                   <div class="col-12 mb-20">
                                       <label>Address*</label>
                                       <input type="text" placeholder="Address line 1">
                                       <input type="text" placeholder="Address line 2">
                                   </div>

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Country*</label>
                                       <select class="nice-select">
                                            <option>Bangladesh</option>
                                            <option>China</option>
                                            <option>country</option>
                                            <option>India</option>
                                            <option>Japan</option>
                                       </select>
                                   </div>

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Town/City*</label>
                                       <input type="text" placeholder="Town/City">
                                   </div>

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>State*</label>
                                       <input type="text" placeholder="State">
                                   </div>

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Zip Code*</label>
                                       <input type="text" placeholder="Zip Code">
                                   </div>

                               </div>

                           </div>
                           
                       </div>
            </div>           
                       <div class="col-lg-5">
                           <div class="row">
                               
                               <!-- Cart Total -->
                               <div class="col-md-12 mb-60">
                               
                                   
                                   
                               </div>
                               
                               <!-- Payment Method -->
                               <div class="col-md-12 mb-60">
							   
							   
							  
							   
							   
                               
                                   <h4 class="checkout-title" style="text-align:center;color:skyblue">Payment Method</h4>
                           
                                   <div class="checkout-payment-method">
                                     
                                       
                                     <!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="payment-method">
  <label class="custom-control-label" for="defaultUnchecked"> <div class="accordion" id="accordionExample">
  
 
 <div class="accordion" id="accordionExample">
  <div class="card z-depth-0 bordered">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
          aria-expanded="true" aria-controls="collapseOne">
         Bkash
        </button>
      </h5>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
      data-parent="#accordionExample">
      <div class="card-body">
       <center>Bkash payment process </center><br>
	  <a href="images/slider/bkash.jpg">  <img src="images/slider/bkash.jpg" style="height:200px;width:300px;"/> </a>
	  
	  <br>
	 
   
    
  
  
  
</div>
 
 
 
</div></label>
</div>

<!-- Default checked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked" name="payment-method" checked>
  <label class="custom-control-label" for="defaultChecked">Cash on delivery</label>
</div>
                                      
                                     
                                       
                                       
                                   </div><br><br>
                                   <input type="submit" name="submit" value="Confirm order"  class="btn btn-success  button--large">
                                  
                                   
                               </div>
                               
                           </div>
                       </div>
                       
                   </div>
                </form>
                
            </div>
</div>
<!-- Checkout Page End -->