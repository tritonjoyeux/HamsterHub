$(function () {

//form new video
    $('input[type=file]').change(function () {
        console.log(this.files[0].mozFullPath);
    });
    $('#upload_pic').submit(function () {
        var data = 'path='+$('input[type=file]').FullPath;
        console.log(data);
        $.ajax({
            url: '/upload/picture',
            type: 'POST',
            data: data,
            success: function (data) {

            }
        });

        return false;
    });
//fin form
});