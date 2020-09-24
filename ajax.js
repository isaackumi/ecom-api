

$(document).ready(function(){

    document.getElementById("btn").onclick = function() {
        var amount = $("#amount"). val();
        var id = $("#id"). val();
        var key = $("#key"). val();


        var dataString = 'amount=' + amount + '&id=' + id + '&key='+ key;

        // alert(dataString);


        $.ajax({
            method: 'POST',
            url: "https://apps.ashesi.edu.gh/e-com/",
            data : dataString,
            success: function(res){
                alert(res);
            }

        })

    };



});