

$(document).ready(function(){

    $( "#form" ).submit(function( event ) {
        event.preventDefault();
        var amount = $("#amount"). val();
        var id = $("#id"). val();
        var key = $("#key"). val();
        const endpoint = "https://apps.ashesi.edu.gh/e-com/";
        alert(amount);

            const user  = {
                'amt':amount,
                'userid':id,
                'secretkey': key

            }

        $.ajax({
            type: "POST",
            url: endpoint,
            data: user,
            success: function(data){
                alert(data);
            }

        });

    });

    // document.getElementById("btn").onclick = function() {
    //
    //     const endpoint = "https://apps.ashesi.edu.gh/e-com/";
    //     var amount = $("#amount"). val();
    //     var id = $("#id"). val();
    //     var key = $("#key"). val();
    //
    //     // alert(amount);
    //     // alert(id);
    //     // alert(key);
    //
    //
    //
    //
    //     const user  = {
    //         'amt':amount,
    //         'userid':id,
    //         'secretkey': key
    //
    //     }
    //     axios({
    //         method:"POST",
    //         url: endpoint,
    //         data: {
    //             user
    //         }
    //     }).then(data => alert(data))
    //         .catch(err => alert(err))
    //
    //
    //
    //
    //
    // };



});