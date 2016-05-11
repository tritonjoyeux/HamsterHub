$(function () {

    //form new video
    $('#post_video').submit(function () {
        $('.post').css({"textAlign" : "center"});
        $('#post_content').css({"display":"none"});
        $('#loader').css({"display":"block"});

        var erreur = true;
        var name = $(this).find(':text[name="name"]').val();
        var description = $(this).find('textarea[name="description"]').val();
        var url = $(this).find(':text[name="url"]').val();

        if (name && url && /^(http|https|ftp):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i.test(url)) {
            erreur = false;
        }

        if (erreur == false) {

            var data = $(this).serialize();
            $.ajax({
                url: '/video/upload',
                type: 'POST',
                data: data,
                dataType: 'json',
                success: function (data) {
                    $('#content ul:last-child').append('</ul><ul class="videos">' +
                        '<li class="video_name">Nom: ' + data.title + '</li>' +
                        '<li class="video_img">' +
                        '<a href="/video/' + data.id + '">' +
                        '<img src="' + data.url + '" alt="' + data.url + '">' +
                        '</a>' +
                        '</li>' +
                        '<li class="video_user">Utilisateur: <span class="user">' + data.user + '</span></li>' +
                        '<li class="video_description">Description: <span class="description">' + data.content + '</span></li>' +
                        '<li class="video_date">Mise en ligne le ' + data.day + '' +
                        'à ' + data.hour + '</li>' +
                        '<form method="post" class="delete_video">'+
                        '<input type="hidden" name="id" value="'+data.id+'">'+
                        '<input type="submit" name="delete" value="Supprimer" class="input_submit">'+
                        '</form>');
                    $('.post').css({"textAlign" : "left"});
                    $('#post_content').css({"display":"block"});
                    $('#loader').css({"display":"none"});
                }
            });

        } else {
            if (!name) {
                $('#name').css({"color": "red"});
            }else{
                $('#name').css({"color": "black"});
                console.log('black')
            }

            if (!description) {
                $('#desc').css({"color": "red"});
            }else{
                $('#desc').css({"color": "black"});
            }

            if (!url) {
                $('#url').css({"color":"red"});
            } else {
                if (!/^(http|https|ftp):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i.test(url)) {
                    $('#url').css({"color":"red"});
                }else{
                    $('#url').css({"color": "black"});
                }
            }
            $('#loader').css({"display":"none"});
            $('.post').css({"textAlign" : "left"});
            $('#post_content').css({"display":"block"});
        }
        return false;
    });
    //fin form

});