<?php
require('connection.inc.php');
require('functions.inc.php');
    
//prx($_POST);
$email=get_safe_value($con,$_POST['email']);
$adhar=get_safe_value($con,$_POST['adhar']);
$password=get_safe_value($con,$_POST['password']);

$res=mysqli_query($con,"select * from users where email='$email' and adhar='$adhar' and password='$password'");
$check_user=mysqli_num_rows($res);

 if($check_user>0){
 	$row=mysqli_fetch_assoc($res);
        $_SESSION['USER_LOGIN']='yes';
        $_SESSION['USER_ID']=$row['id'];
        $_SESSION['USER_NAME']=$row['username'];

        echo"valid";
       
        }else{
               echo"wrong";
             }


?>