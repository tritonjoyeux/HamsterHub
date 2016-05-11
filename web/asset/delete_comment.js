$(function () {

//form new video
    $('.delete_comm').submit(function () {

        var data = $(this).serialize();
        $.ajax({
            url: '/comment/delete',
            type: 'POST',
            data: data,
            success: function (data) {
                data = JSON.parse(data);
                console.log(data);
                $('#'+data.id).remove();
            }
        });

        return false;
    });
//fin form
});