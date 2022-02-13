function user_login()
{
    jQuery('.field_error').html('');
        
        var email=jQuery("#login_email").val();
        var adhar=jQuery("#login_adhar").val();
        var password=jQuery("#login_password").val();
        var is_error="";

        if(email=="")
        {
            jQuery('#login_email_error').html('Please enter proper email');  
            is_error='yes';
        }
        if(adhar=="")
        {
            jQuery('#login_adharno_error').html('Please enter proper adhar number');  
            is_error='yes';
        }
        if(password=="")
        {
            jQuery('#login_password_error').html('Please enter proper password');  
            is_error='yes';
        }
        
        if(is_error=='')
        {
            jQuery.ajax({
    			url:'login_submit.php',
    			type:'post',
    			data:'&email='+email+'&adhar='+adhar+'&password='+password,
    			success:function(result){
    				if(result=='wrong')
                    {
                        jQuery('.login_msg p').html('Please enter valid login details'); 
                    }
                  
                    if(result=='valid')
                    {
                      window.location.href=window.location.href;
                    }
      		                        }	
    		            });
        }

}



function manage_cart_product(pid,type)
{
   
        var qty=jQuery("#qty").val();

        if(type=='update')
        {
            var qty=jQuery("#"+pid+"qty").val();
        }else{
            var qty=jQuery("#qty").val();
        }
            jQuery.ajax({
    			url:'manage_cart.php',
    			type:'post',
    			data:'&pid='+pid+'&qty='+qty+'&type='+type,
    			success:function(result){
                    if(type=='update' || type=='remove'){
                        window.location.href= window.location.href;
                    }

    				jQuery('.htc_qua').html(result);
      		                        }	
    		            });
        

}








