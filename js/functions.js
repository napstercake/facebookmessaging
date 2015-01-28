$(document).ready(function() {


	$("#btnSend").click(function() {
		
		var msg = $("#txtMessage").val();
		

		$.ajax({
  			type: "GET",
  			url: "controller/message.php",
  			data: { 
  				user_session: "John", 
  				user_two: "Boston" 
  			}
		})
  		.done(function( msg ) {
    		alert( "-> " + msg );
  		});



	});

});