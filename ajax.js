$(document).ready(function (){

    $('#button').click(function (){
        var data= {
            'username': $('#user').val().trim(),
            'email': $('#email').val().trim(),
            'password': $('#password').val().trim()}
        $.ajax({
            type: 'POST',
            url: 'controller/registration.php',
            data: data,
            success: function (result){
                $('#response_style').html(result);
                setTimeout(function (){$('#response_style').empty();}, 5000);

                if(result.includes('some magic key')){
                    setTimeout(function (){
                        $('#response_style').empty();
                        /*$('input').val('');*/ //clear inputs
                    }, 5000);
                }
                if(result.includes('youre already here')){ // email taken
                    console.log('email taken');
                }
                if(result.includes('its taken my boy')){ // email taken
                    console.log('username taken');
                }
            }
        })
    })
})