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
        pass1.style.backgroundImage = 'url(http://localhost:8888/Document-Repository/static/images/error.png)';
        pass2.style.backgroundImage = 'url(http://localhost:8888/Document-Repository/static/images/error.png)';
    }
    else 
    {
        pass1.style.backgroundImage = 'url(http://localhost:8888/Document-Repository/static/images/valid.png)';
        if (pass1.value == pass2.value)
        {
        	pass2.style.backgroundImage = 'url(http://localhost:8888/Document-Repository/static/images/valid.png)';
        }
        else
        {
        	pass2.style.backgroundImage = 'url(http://localhost:8888/Document-Repository/static/images/error.png)';

        }
    }
}










