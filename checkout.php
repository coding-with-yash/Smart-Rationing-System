 <?php 
    require('top.php');
    require('config.php');

if(!isset($_SESSION['cart']) || count($_SESSION['cart'])==0){
?>
	<script>
		window.location.href='index.php';
	</script>

<?php
}

$cart_total=0;

if(isset($_POST['submit'])){
    //prx($_POST);
	$name=get_safe_value($con,$_POST['name']);
	$address=get_safe_value($con,$_POST['address']);
	$city=get_safe_value($con,$_POST['city']);
	$state=get_safe_value($con,$_POST['state']);
	$pincode=get_safe_value($con,$_POST['pincode']);
	$phone_no=get_safe_value($con,$_POST['phone_no']);
	$payment_type=get_safe_value($con,$_POST['payment_type']);
    $user_id= $_SESSION['USER_ID'];
	
         foreach($_SESSION['cart'] as $key=>$val){
            $productArr=get_product($con,'','',$key);
            $selling_price=$productArr[0]['selling_price'];
            $qty=$val['qty'];
            $cart_total=$cart_total+($selling_price*$qty);
            }
    $total_price=$cart_total;
    if($payment_type='cod')
    {
    $payment_status='success';
    }
	$order_status=1;
	$added_on=date('Y-m-d h:i:s');

	 mysqli_query($con,"insert into `order1`(user_id,name,address,city,state,pincode,phone_no,payment_type,total_price,payment_status,order_status,added_on) values('$user_id','$name','$address','$city','$state','$pincode','$phone_no','$payment_type','$total_price','$payment_status','$order_status','$added_on')");

    $order_id=mysqli_insert_id($con);
	
	foreach($_SESSION['cart'] as $key=>$val){
		$productArr=get_product($con,'','',$key);
		$selling_price=$productArr[0]['selling_price'];
		$qty=$val['qty'];
		
		mysqli_query($con,"insert into `order_detail`(order_id,product_id,qty,selling_price) values('$order_id','$key','$qty','$selling_price')");
        }

        unset($_SESSION['cart']);
        
?>  
        <script>
            window.location.href='thank_you.php';
        </script>
    
    
    
<?php 
      
}
?>


<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/flexgray.png) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">checkout</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="checkout-wrap ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="checkout__inner">
                            <div class="accordion-list">
                                <div class="accordion">
                                   

                                   <?php  
                                        $account_class='accordion__title';
                                        if(!isset($_SESSION['USER_LOGIN'])){
                                            
                                            $account_class='accordion__hide';
                                            
                                    ?>
                                    
                                    <div class="accordion__title"> Checkout Method
                                    </div>
                                    <div class="accordion__body">
                                        <div class="accordion__body__form">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="checkout-method__login">
                                                       
                                                    
                                                    <form id="login-form" method="post">
                                                        
                                                            <h5 class="checkout-method__title">** Login **</h5>
                                                                                                   
                                                            <div class="single-input">
                                                               <label for="user-pass">Email</label>
                                                                <input type="email" name="login_email" id="login_email">
                                                                <span class="field_error" id="login_email_error" style="color:red"></span>
                                                            </div>
                                                           

                                                            <div class="single-input">
                                                                <label for="user-pass">Adhar Number</label>
                                                                <input name="login_adhar" id="login_adhar">
                                                                <span class="field_error" id="login_adharno_error" style="color:red"></span>
                                                            </div>
                                                           

                                                            <div class="single-input">
                                                                <label for="user-pass">Password</label>
                                                                <input type="password" name="login_password" id="login_password" style="width:100%">
                                                                <span class="field_error" id="login_password_error" style="color:red"></span>
                                                            </div>

                                                            <div class="form-output login_msg">
								                            	<p class="form-messege" style="color:red"></p>
								                            </div>
                                                          
                                                            <div class="dark-btn">
                                                            <button type="button"  class="fv-btn" onclick="user_login()">Login</button> 
                                                            </div>
                                                     </form>
                                                    </div>
                                                </div>
                                             
                                                <div class="col-md-6">
                                                    <div class="checkout-method__login">
                                                    <form id="register-form" method="post">
                                                            <h5 class="checkout-method__title"><a class="fv-btn" href="login.php"> ** Register **</a></h5>
                                                            
                                                            <!-- <div class="single-input">
                                                                <label for="user-email">Name</label>
                                                                <input type="text" name="username" id="username"  style="width:100%">
                                                                <span class="field_error" id="name_error" style="color:red"></span>
                                                            </div>

															<div class="single-input">
                                                                <label for="user-email">Email Address</label>
											                    <input type="email" name="email" id="email" style="width:100%">   
                                                                <span class="field_error" id="email_error" style="color:red"></span>
                                                            </div>
															
                                                            <div class="single-input">
                                                                <label for="user-pass">Adhar Number</label>
                                                                <input name="adhar" id="adhar" style="width:100%">
										                        <span class="field_error" id="adharno_error" style="color:red"></span>
                                                            </div>

                                                            <div class="single-input">
                                                                <label for="user-pass">Mobile Number</label>
                                                                <input type="tel" name="mobile" id="mobile" style="width:100%">
                                                                <button type="button" class="fv-btn mobile_sent_otp height_60px" onclick="mobile_sent_otp()">Send OTP</button>
											
											                    <input type="text" id="mobile_otp" placeholder="OTP" style="width:45%" class="mobile_verify_otp">
											
										                    	<button type="button" class="fv-btn mobile_verify_otp height_60px" onclick="mobile_verify_otp()">Verify OTP</button>
											
											                    <span id="mobile_otp_result"></span>
                                                                <span class="field_error" id="mobile_error" style="color:red"></span>
                                                            </div>

                                                            <div class="single-input">
                                                                <label for="user-pass">Password</label>
                                                                <input type="password" name="password" id="password" style="width:100%">
                                                                <span class="field_error" id="password_error" style="color:red"></span>
                                                            </div>

                                                            <div class="form-output register_msg">
									                            <p class="form-messege field_error"></p>
								                            </div>

                                                            <div class="dark-btn">
                                                                 <button type="button" class="fv-btn" onclick="user_register()">Register</button>
                                                            </div> -->

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php } ?>

                                    <div class="<?php echo $account_class ?>"> Address Information</div>
                                <form method="post">
                                    <div class="accordion__body">
                                        <div class="bilinfo">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" name="name" placeholder="First name" required> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="single-input">
                                                            <input type="text" name="address" placeholder="Street Address" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" name="city" placeholder="City" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" name="state" placeholder="State" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" name="pincode" placeholder="Post code/ zip" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-input">
                                                            <input type="text" name="phone_no" placeholder="Phone number" required>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                    <div  class="<?php echo $account_class ?>"> Payment Information
                                    </div>
                                    <div class="accordion__body">
                                        <div class="paymentinfo">
                                            <div class="single-method">
                                               <b> Cash On Delivery </b> <input type="radio" name="payment_type" value="COD" required/></br><br>
                                              
                                               <!-- //Payment With UPI  
                                               <b>Payment With UPI  </b><input type="radio" name="payment_type" value="payu" required/> -->
                                            </div>
                                        </div>
                                    </div>
                                             <div class="dark-btn">
                                                <input type="submit" class="fv-btn" name="submit"/>
                                            </div>  

                                </div>
                                <br><br>
                                <form action="submit1.php" method="post">
                                            <script
		                                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		                                        data-key="<?php echo $publishableKey?>"
		                                        data-amount=""
		                                        data-name="Smart Rationing System"
		                                        data-description="Pay Your Amount"
		                                        data-image="https://www.logostack.com/wp-content/uploads/designers/eclipse42/small-panda-01-600x420.jpg"
		                                        data-currency="inr"
		                                        data-email="smartrationingsystem@gmail.com">
	                                            </script>
                                            </form>  
                            </div>
                        </div>
                    </div>

                                            
                 
                    <div class="col-md-4">
                        <div class="order-details">
                            <h5 class="order-details__title">Your Order</h5>
                            <div class="order-details__item">
                              
                            <?php
                                    $cart_total=0;
									foreach($_SESSION['cart'] as $key=>$val){
									$productArr=get_product($con,'','',$key);
									$product1=$productArr[0]['product1'];
									$mrp=$productArr[0]['mrp'];
                                	$selling_price=$productArr[0]['selling_price'];
									$image=$productArr[0]['image'];
									$qty=$val['qty'];
                                    $cart_total=$cart_total+($selling_price*$qty);
							?>
    
                                    <div class="single-item">
                                    <div class="single-item__thumb">
                                        <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$image?>"  /></a>
                                    </div>
                                    <div class="single-item__content">
                                        <span class="price">Product Name: <?php echo $product1 ?></span>
                                        <span class="price">Price: <?php echo $selling_price*$qty ?></span>
                                    </div>
                                    <div class="single-item__remove">     
                                    <a href="javascript:void(0)" onclick="manage_cart_product('<?php echo $key?>','remove')"><i class="zmdi zmdi-delete"></i></a>

                                   <!-- <a href="javascript:void(0)" onclick="manage_cart_product('<?php echo $key?>','remove')"><i class="zmdi zmdi-delete"></i></a> -->
                                   
                                </div>
                                </div>                           
                                <?php } ?>
                            </div>
                            
                            <div class="ordre-details__total">
                                <h5>Order total =</h5>
                                <span class="price"><?php echo $cart_total,"  ₹"?></span>
                              
                            </div>
                            <div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div>
        </div>
      


 
<?php 
    require('footer.php');
?> 
 




