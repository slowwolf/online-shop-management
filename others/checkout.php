<?php
include "header.php";
?>

<link rel="stylesheet" href="link/checkoutstyle.css"/>




<!-- Checkout Page Start -->
<div class="page-section section mt-90 mb-30">
    <div class="container">
        <div class="row">
            <div class="col-12">
                
                <!-- Checkout Form s-->
                <form action="payment.php" method="post" class="checkout-form">
                   <div class="row row-40">
                       
                       <div class="col-lg-7 mb-20">
                          
                           <!-- Billing Address -->
                           <div id="billing-form" class="mb-40">
                               <h4 class="checkout-title">Billing Address</h4>

                               <div class="row">

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Full Name*</label>
                                       <input type="text" id="fullname" name="fullname" placeholder="First Name">
                                   </div>

                                  

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Email Address*</label>
                                       <input type="email" id="email" name="email" placeholder="Email Address">
                                   </div>

                                   <div class="col-12 mb-20">
                                       <label>Phone Number</label>
                                       <input type="text" id="adr" name="adr" placeholder="Phone number">
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
                                       <input type="text" id="city" name="city" placeholder="Town/City">
                                   </div>

                                  

                                   <div class="col-md-6 col-12 mb-20">
                                       <label>Zip Code*</label>
                                       <input type="text" id="zip" name="zip" placeholder="Zip Code">
                                   </div>

                                  
                               </div>

                           </div>
                           
                           <!-- Shipping Address -->
                           <div id="shipping-form" class="mb-40">
                               <h4 class="checkout-title">Shipping Address</h4>

                               <div class="row">

                                   <div class="col-md-6 col-12 mb-20">
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
                       
                       <div class="col-lg-5">
                           <div class="row">
                               
                               <!-- Cart Total -->
                               <div class="col-12 mb-60">
                               
                                   
                                   
                               </div>
                               
                               <!-- Payment Method -->
                               <div class="col-12 mb-60">
                               
                                   <h4 class="checkout-title">Payment Method</h4>
                           
                                   <div class="checkout-payment-method">
                                     
                                       
                                     
                                      
                                     
                                       <div class="single-method">
                                           <input type="radio" id="payment_cash" name="payment-method" value="cash">
                                           <label for="payment_cash">Cash on Delivery</label>
                                           <p data-method="cash">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                       </div>
                                     
                                       
                                     
                                       
                                     
                                       <div class="single-method">
                                           <input type="checkbox" id="accept_terms">
                                           <label for="accept_terms">I’ve read and accept the terms & conditions</label>
                                       </div>
                                       
                                   </div>
                                   <input type="submit" name="submit" value="Confirm order" class="btn btn-success  button--large">
                                  
                                   
                               </div>
                               
                           </div>
                       </div>
                       
                   </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
<!-- Checkout Page End --> 











<?php
?>