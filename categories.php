<?php 

    require('top.php');
    $cat_id=mysqli_real_escape_string($con,$_GET['id']);

    $get_product=get_product($con,'',$cat_id);
  
 ?>   

    <div class="body__overlay"></div>
        <div class="offset__wrapper">
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/flexgray.png) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Products</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="ftr__product__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line"> Card Detail  </h2>
                            <p>Top Three Card Detail According To Card Type </p>
                        </div>
                    </div>
                </div>

                <?php
                if($get_product['0']['categories']=="Orange Card")
                    {
                ?>
                <div class="row">
                    <div class="product__wrap clearfix">
                        <!-- Start Single Category -->
                        <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                            <div class="category">
                                <div class="ht__cat__thumb">
                                    <a href="product-details.html">
                                        <img src="images/product/orange_card1.jpg" height="220px" alt="product images">
                                    </a>
                                </div>
                               
                                <div class="fr__product__inner">
                                    <p>Orange Card</p>
                                    <ul class="fr__pro__prize">
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                    <div class="product__wrap clearfix">
                        <!-- Start Single Category -->
                        <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                            <div class="category">
                                <div class="ht__cat__thumb">
                                    <a href="product-details.html">
                                        <img src="images/product/rationCards.jpg" height="200px" alt="product images">
                                    </a>
                                </div>
                               
                                <div class="fr__product__inner">
                                    <p>White Ration Cards
                                        The Families having annual income of Rs.1 Lakh or above, any member of the family possessing a four-wheeler or the family aggregately holding more than 4 hectare irrigated land isssued white ration cards.</p>
                                    <ul class="fr__pro__prize">
                                    </ul>
                                </div>
                            </div>
                        </div>

                    <div class="row">
                    <div class="product__wrap clearfix">
                        <!-- Start Single Category -->
                        <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                            <div class="category">
                                <div class="ht__cat__thumb">
                                        <img src="images/product/rationCards.jpg" height="200px" alt="product images">
                                </div>
                               
                                <div class="fr__product__inner">
                                    <p>Families having annual income up to Rs.15,000/-(Urban Area)
None of the members in the family should be a doctor, lawyer, architect or chartered accountant.
None of the members in the family should be professional tax payer,sales tax payer or income tax payer or eligible to pay such tax.</p>
                                    <ul class="fr__pro__prize">
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                <?php
                        }
                 ?>



            <?php   
                if($get_product['0']['categories']=="White Card")
                    {
                ?>
                <div class="row">
                    <div class="product__wrap clearfix">
                        <!-- Start Single Category -->
                        <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                            <div class="category">
                                <div class="ht__cat__thumb">
                                    <a href="product-details.html">
                                        <img src="images/product/rationCards.jpg" alt="product images">
                                    </a>
                                </div>
                               
                                <div class="fr__product__inner">
                                    <p>White Ration Cards
                                        The Families having annual income of Rs.1 Lakh or above, any member of the family possessing a four-wheeler or the family aggregately holding more than 4 hectare irrigated land isssued white ration cards.</p>
                                    <ul class="fr__pro__prize">
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                <?php
                        }
                 ?>

                 
                <?php
                if($get_product['0']['categories']=="Yellow Card")
                    {
                ?>
                <div class="row">
                    <div class="product__wrap clearfix">
                        <!-- Start Single Category -->
                        <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                            <div class="category">
                                <div class="ht__cat__thumb">
                                    <a href="product-details.html">
                                        <img src="images/product/rationCards.jpg" alt="product images">
                                    </a>
                                </div>
                               
                                <div class="fr__product__inner">
                                   
                                    <ul class="fr__pro__prize">
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                <?php
                        }
                 ?>



        <section class="htc__product__grid bg__white ptb--100">
            <div class="container">
                <div class="row">

                    <?php 
                    
                    if(count($get_product)>0){
                        
                    ?>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="htc__product__rightidebar">
                             <div class="htc__grid__top">
                                <div class="htc__select__option">
                                    <!-- <select class="ht__select">
                                        <option>Default softing</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by average rating</option>
                                        <option>Sort by newness</option>
                                    </select> -->
                                </div>
                            </div> 
                            <!-- Start Product View -->

                            <div class="row">
                            <h1><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            
                             Arrivals Product for <?php echo $get_product['0']['categories']?></h1>

                        
                                <div class="shop__grid__view__wrap">
                                    <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
                                    
                                    <?php
                                        // prx($get_product);
                                         foreach($get_product as $list){
                                    ?>


                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="product.php?id=<?php echo $list['id']?>">
                                        
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                                        </a>
                                    </div>
                                    
                                    <div class="fr__product__inner">
                                        <h4><a href="product-details.html"><?php echo $list['product1']?></a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize"> Price <?php echo $list['mrp']?></li>
                                            <li>Selling Price <?php echo $list['selling_price']?> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        <?php
                         } 
                         ?> 
                       
                       
                                     </div>
                                </div>
                            </div>
                            </div>
                    </div>
                    <?php } 
                    
                        else { 
						echo "Data not found";
					    } 
                    ?>


                </div>
            </div>
        </section>
   
<?php 
    require('footer.php');
?>


      