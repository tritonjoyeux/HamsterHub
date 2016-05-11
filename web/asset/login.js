$(function () {

    //form new video
    $('#login').submit(function () {
        $('.post_login').css({"textAlign": "center"});
        $('#login').css({"display": "none"});
        $('#loader').css({"display": "block"});

        var data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'login_check',
            data: data,
            success: function (data) {
                if(data.charAt(1) == "!"){
                    $('#refresh').html('<meta http-equiv="refresh" content="0">');
                }else{
                    $('.post_login').css({"textAlign": "left"});
                    $('#login').css({"display": "block"});
                    $('#loader').css({"display": "none"});
                    $('.erreurLogin').text("Connexion echouée");
                }
            }
        });
        return false;
    });
    //fin form

});