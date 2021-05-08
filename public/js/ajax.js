$(document).ready(function (){

    $('#button').click(function (){
        var data= {
            'username': $('#user').val().trim(),
            'email': $('#email').val().trim(),
            'password': $('#password').val().trim()}
        $.ajax({
            type: 'POST',
            url: '/registration',
            data: data,
            success: function (result){
                $('#response_style').html(result);
                setTimeout(function (){$('#response_style').empty();}, 5000);

                if(result.includes('some magic key')){
                    $('#error_message').css({'visibility': 'visible', 'background': 'url("resources/images/success.png")', 'opacity': '0.6'});
                    $('#error_message span')[0].innerHTML = 'You successfully registered';
                    setTimeout(function (){$('#error_message').attr('style', '');}, 5000);
                    setTimeout(function (){$('#response_style').empty();}, 5000);
                }
                if(result.includes('youre already here') && result.includes('its taken my boy')){
                    $('#error_message').css({'visibility': 'visible', 'opacity': '0.6'});
                    $('#error_message span')[0].innerHTML = 'Such username and email already exist';
                    setTimeout(function (){$('#error_message').attr('style', '');}, 5000);
                }
                else if(result.includes('youre already here')){ // email taken
                    $('#error_message').css({'visibility': 'visible', 'opacity': '0.6'});
                    $('#error_message span')[0].innerHTML = 'Such email already exists';
                    setTimeout(function (){$('#error_message').attr('style', '');}, 5000);
                }
                else if(result.includes('its taken my boy')){ // email taken
                    $('#error_message').css({'visibility': 'visible', 'opacity': '0.6'});
                    $('#error_message span')[0].innerHTML = 'Such username already exists';
                    setTimeout(function (){$('#error_message').attr('style', '');}, 5000);
                }
            }
        })
    })
})