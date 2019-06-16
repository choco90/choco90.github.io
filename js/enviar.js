$(function(){

    recogerdatos();





});

function recogerdatos() {

    $('#submit').click(function(e) {
      var checkin=$('input[name="checkin"]').val();
      var checkout=$('input[name="checkout"]').val();
      var email=$('input[name="email"]').val();
      var adultos=$('select[name="adultos"]').val();
      var criancas=$('select[name="criancas"]').val();

        e.preventDefault();
      var parametros={
          "checkin": checkin,
          "checkout":checkout,
          "adultos":adultos,
          "criancas":criancas,
          "email":email

      };

        $.ajax({
            type: "POST",
            url: 'enviar.php',
            data: parametros,
            success: function(response)
            {
                alert("mail enviado");
           }
       });
     });
    
}