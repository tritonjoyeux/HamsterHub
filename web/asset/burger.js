$(function () {
    var hide = true;
    $('.burger').click(function () {
        if (hide == true) {
            $('.croix1').css('transform', 'rotate(45deg)');
            $('.croix2').css('transform', 'rotate(135deg)');
            $('nav').css('display', 'inline-block');
            hide = false;

        } else {
            $('.croix1').css('transform', 'rotate(0deg)');
            $('.croix2').css('transform', 'rotate(90deg)');
            $('nav').css('display', 'none');



            hide = true;
        }
    });

    $('#add_video').click(function(){
        $('.croix1').css('transform', 'rotate(0deg)');
        $('.croix2').css('transform', 'rotate(90deg)');
        $('nav').css('display', 'none');

        hide = true;
    });

});
