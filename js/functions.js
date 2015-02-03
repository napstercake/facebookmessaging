$(document).ready(function() {


	
  $( "form" ).submit(function( event ) {
		
		var msg = $("#txtMessage").val();

    // Stop form from submitting normally
    event.preventDefault();

		// $.ajax({
  // 			type: "POST",
  // 			url: "controller/message.php",
  // 			data: { 
  // 				reply: $("#txtUserSession").val(), 
  // 				cid: $("#txtUserTwo").val()  
  // 			}
		// })
  // 		.done(function( msg ) {
  //   		alert( "-> " + msg );
  // 	});



  $.post('controller/message.php', 
            $("form").serialize(), 
            function(data) {
              
    //$('.resultados').html();
    console.log(data);
    
  }).done(function() {

    // $("#btnEnviar").show();
    // $('.resultados').css('display', 'block');
    // $("#loadingImage").hide();
    // $('#frmContact').css('opacity','1');
    // $('#frmContact').closest('form').find("input[type=text], textarea").val("");

  });



	});

});