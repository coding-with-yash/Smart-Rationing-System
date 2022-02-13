<?php
    session_start();

    $con=mysqli_connect("localhost","root","","database1");

    define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/SRS/ADMIN/');
    define('SITE_PATH','http://localhost/SRS/Admin/');

    define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
    define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');


?>