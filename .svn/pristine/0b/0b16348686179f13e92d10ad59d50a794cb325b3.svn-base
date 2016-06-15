/*
* 通过ajax的方式验证
*
* */

function yanz(){
	 var autofont=document.getElementById('autofont').value;
	  $.ajax({
        type:'post',
        url:"auto.php",
        data:{autofont:autofont},
        dataType:'json',
        //jsonp:'callback',
        success:function(result){
			if(result.error){ $('#info').html(result.error);}else{$('#info').html(result.success);}	
            return false;
        }
    });
 }