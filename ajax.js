

$(document).ready(function(){

    $( "#form" ).submit(function( event ) {
        event.preventDefault();
        // var amount = $("#amount"). val();
        var country = $("#country"). val();
        var key = $("#key"). val();
        const endpoint = "http://13.68.189.1/api_quiz/country.php";
        // alert(amount);

            const user  = {

                'country':country,
                'key': key

            }

        $.ajax({
            type: "POST",
            url: endpoint,
            data: user,
            success: function(data){
                // console.log(data);
                if(data.hasOwnProperty('error')){
                  var err = data['error'];
                  $('#error').html(err);


                }else{
                  var code = data[0]['country_code'];
                  var phonecode = data[0]['phonecode'];
                  $('#code').html(code);
                  $('#phonecode').html(phonecode);
                  // console.log(code,phonecode);
                }


            },

            error: function(err){
              console.log(`An error occured`);
            }

        });

    });



});
