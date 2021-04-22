$(document).ready(function (){
    $('#user')[0].addEventListener('keyup', function (event){
        if(event.keyCode === 13){
            event.preventDefault();
            $('#button').click();
        }
    })
    $('#email')[0].addEventListener('keyup', function (event){
        if(event.keyCode === 13){
            event.preventDefault();
            $('#button').click();
        }
    })
    $('#password')[0].addEventListener('keyup', function (event){
        if(event.keyCode === 13){
            event.preventDefault();
            $('#button').click();
        }
    })
});