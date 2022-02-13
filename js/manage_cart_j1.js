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


