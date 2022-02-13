<?php 

    require('top.php');
?>

        <div class="body__overlay"></div>
        <!-- Start Slider Area -->
        <div class="slider__container slider--one bg__cat--3">
            <div class="slide__container slider__activation__wrap owl-carousel">
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h3>Welcome to </h3><br>
                                        <h2>Smart Rationing System</h2>
                                        <!-- <div class="cr__btn">
                                            <a href="cart.html">Shop Now</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="images/slider/fornt-img/1ration.png" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                    <h3>Welcome to</h3><br>
                                    <h2>Smart Rationing System</h2>
                                        <!-- <div class="cr__btn">
                                            <a href="cart.html">Shop Now</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                <img src="images/slider/fornt-img/1ration.png" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
        <!-- Start Slider Area -->
        <!-- Start Category Area -->

        <section class="ftr__product__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">News </h2>
                            <p>Top Five News Regarding to Rationing System</p>
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
                                        <img src="images/product/mx1.jpg" alt="product images">
                                    </a>
                                </div>
                        
                                <div class="fr__product__inner">
                                    <h4><a href="product-details.html">Ration Distribution </a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                            <div class="category">
                                <div class="ht__cat__thumb">
                                    <a href="product-details.html">
                                        <img src="images/product/mx2.png" alt="product images">
                                    </a>
                                </div>
                               
                                <div class="fr__product__inner">
                                    <h4><a href="product-details.html">1 Nation 1 Ration</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                            <div class="category">
                                <div class="ht__cat__thumb">
                                    <a href="product-details.html">
                                        <img src="images/product/mx3.jpg" alt="product images">
                                    </a>
                                </div>
                                <div class="fr__product__inner">
                                    <h4><a href="product-details.html">www.smartrationdistribution.com</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                            <div class="category">
                                <div class="ht__cat__thumb">
                                    <a href="product-details.html">
                                        <img src="images/product/mx4.jpg" alt="product images">
                                    </a>
                                </div>
                                <div class="fr__product__inner">
                                    <h4><a href="product-details.html">Ration Card 2020 </a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Category -->
                    </div>
                </div>
            </div>
        </section>






        <section class="htc__category__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">New Arrivals</h2>
                            <p>Top Quality & Best Product </p>
                        </div>
                    </div>
                </div>

                <div class="htc__product__container">
                    <div class="row">
                        <div class="product__list clearfix mt--30">

                        <?php
                            $get_product=get_product($con,4);
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

                            <?php } ?>
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
       

<?php 
    require('footer.php');
?>


      