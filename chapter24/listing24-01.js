$(document).ready(function() {
    $.ajaxSetup({ cache: true });
    $.getScript('//connect.facebook.net/en_UK/all.js', function(){
	FB.init({appId: APP_ID,
		 status:true, //status: check fb login
		 xfbml:true //parse for FB plugins
		});
	$('#loginbutton,#feedbutton').removeAttr('disabled');
	FB.getLoginStatus(updateStatusCallback);
    });
});

