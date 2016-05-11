$(function () {

//form new video
    $('.delete_video').submit(function () {

        var data = $(this).serialize();
        $.ajax({
            url: '/video/delete',
            type: 'POST',
            data: data,
            success: function (data) {
                data = JSON.parse(data);
                console.log(data);
                $('#'+data.id).remove();
            },
            error: function () {
                console.log('error');
            }
        });

        return false;
    });
//fin form
});