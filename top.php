<?php
    require('connection.inc.php');
    require('functions.inc.php');
    require('add_to_cart_inc.php');

    $cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
    $cat_arr=array();
    while($row=mysqli_fetch_assoc($cat_res)){
        $cat_arr[]=$row;
    }

    $obj=new add_to_cart();
    $totalProduct=$obj->totalProduct();

?>


<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Smart Rationing System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/core.css">
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">

    <link rel="stylesheet" href="css/shortcode/default1.css">


    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="bt_width.css">
    
    <link rel="stylesheet" href="css/responsive.css">
    <!-- <link rel="stylesheet" href="css/custom.css"> -->

    <!-- <link rel="stylesheet" href="css/custom2.css"> -->

    <link rel="stylesheet" href="css/custom_imp.css">
    
    <link rel="stylesheet" href="css/baner.css">

    <link rel="stylesheet" href="css/s1.css">
    

   

    <script src="js/vendor/modernizr-3.5.0.min.js"></script>

    <style>
    .container .logo h3{
            font-size:19px;
            color:#FFA500;
    }
    </style>
    
</head>

<body>
<div class="wrapper">
<header id="htc__header" class="htc__header__area header--one">
<div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
    <div class="container">
        <div class="row">
            <div class="menumenu__container clearfix">
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5"> 
                    <div class="logo">
                          <!-- <h3>  Smart Rationing System </h3> -->

                            <h3>Smart Rationing System  </h3>
                          
                             <!-- <a href="index.php"><img src="images/logo/label.png" alt="logo images"></a>  -->
                    </div>
                </div>

                <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                    <nav class="main__menu__nav hidden-xs hidden-sm">
                        <ul class="main__menu">
                            <li class="drop"><a href="index.php">Home</a></li>
                             <?php
                                foreach($cat_arr as $list){
                             ?>   

                            <li><a href="categories.php?id=<?php echo $list['id'] ?>"><?php echo $list['categories'] ?></a></li>

                            <?php
                                }
                            ?>
                                <li><a href="../Admin/login.php">Admin</a></li>
                                <li><a href="contact.php">contact</a></li>
                                

                        </ul>
                    </nav>

                    <div class="mobile-menu clearfix visible-xs visible-sm">
                        <nav id="mobile_dropdown">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <?php
                                  foreach($cat_arr as $list){
                                 ?>   

                                 <li><a href="categories.php?id=<?php echo $list['id'] ?>"><?php echo $list['categories'] ?></a></li>

                                <?php
                                }
                                ?>
                                <li><a href="contact.php">contact</a></li>
                            </ul>
                        </nav>
                    </div>  

                </div>

                <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                    <div class="header__right">
                        <div class="header__account">

                        <?php
                            if(isset($_SESSION['USER_LOGIN']))
                            {
						        echo '<a href="logout.php">Logout</a>' ?><br> <?php echo '<a href="my_order.php"> My Order </a>';

                            }else{
                                echo'<a href="login.php">Login  Register</a>';
                            }
                        ?>

                        </div>
                        <div class="htc__shopping__cart">
                            <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
                            <a href="cart.php"><span class="htc__qua"> <?php echo $totalProduct ?></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-area"></div>
    </div>
</div>
</header>