$(document).ready(function() {

	$('a.login-window').click(function() {
		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');

		//Fade in the Popup and add close button
		$(loginBox).fadeIn(300);
		
		//Set the center alignment padding + border
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 
		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);

		return false;
	});

	
	// When clicking on the button close or the mask layer the popup closed
	$('a.close, #mask').on('click', function() { 
	  $('#mask , .login-popup').fadeOut(300 , function() {
		$('#mask').remove();  
	}); 
	return false;
	});


	$( ".input" ).focusin(function() {
  $( this ).find( "span" ).animate({"opacity":"0"}, 200);
});

$( ".input" ).focusout(function() {
  $( this ).find( "span" ).animate({"opacity":"1"}, 300);
});

// $(".login").submit(function(){
//   $(this).find(".submit i").removeAttr('class').addClass("fa fa-check").css({"color":"#fff"});
//   $(".submit").css({"background":"#2ecc71", "border-color":"#2ecc71"});
//   $(".feedback").show().animate({"opacity":"1", "bottom":"-80px"}, 400);
//   $("input").css({"border-color":"#2ecc71"});
//   return false;
// });

$("#txt_name").blur(function(){
	var txt_len = $(this).val().length;
	if (txt_len < 5){
		var imageurl = "url(".concat(baseurl, "static/images/error.png)");
		$(this).css({"background-repeat": "no-repeat", "background-position": "center right 6px", "background-image": });
	}
	else {
		$(this).css({"background-repeat": "no-repeat", "background-position": "center right 6px", "background-image": "url(".concat(baseurl, "static/images/valid.png)")});
	}
});


$("#txt_password, #txt_repassword").blur(function(){
	$("#txt_password").css({"background-repeat": "no-repeat", "background-position": "center right 6px"});
	$("#txt_repassword").css({"background-repeat": "no-repeat", "background-position": "center right 6px"});
	var pass1 = $("#txt_password").val();
	var pass2 = $("#txt_repassword").val();

	if (pass1 == null || pass1 == '')
    {
    	imageurl = "url(".concat(baseurl, "static/images/error.png)");
        $("txt_password").css("background-image": imageurl);
        $("txt_repassword").css("background-image": imageurl);
    }
    else 
    {
    	imageurl = "url(".concat(baseurl, "static/images/valid.png)");
        $("txt_password").css("background-image": imageurl);

        if (pass1 == pass2)
        {
        	$("txt_repassword").css("background-image": imageurl);
        }
        else
        {
        	imageurl = "url(".concat(baseurl, "static/images/error.png)");
        	$("txt_repassword").css("background-image": imageurl);

        }
    }

});


});



function checkpass(){
	var pass1 = document.getElementById('txt_password');
    var pass2 = document.getElementById('txt_repassword');
    pass1.style.backgroundRepeat =  'no-repeat';
    pass1.style.backgroundPosition = 'center right 6px';
   	pass2.style.backgroundRepeat =  'no-repeat';
    pass2.style.backgroundPosition = 'center right 6px';


    if (pass1.value == null || pass1.value == '')
    {

    	imageurl = "url(".concat(baseurl, "static/images/error.png)");
        pass1.style.backgroundImage = imageurl;
        pass2.style.backgroundImage = imageurl;
    }
    else 
    {
    	imageurl = "url(".concat(baseurl, "static/images/valid.png)");
        pass1.style.backgroundImage = imageurl;
        if (pass1.value == pass2.value)
        {
        	pass2.style.backgroundImage = imageurl;
        }
        else
        {
        	imageurl = "url(".concat(baseurl, "static/images/error.png)");
        	pass2.style.backgroundImage = imageurl;

        }
    }
}










