$(function () {

//form new video
    $('#form_com').submit(function () {
        var url = window.location.href.split("/");

        var erreur = true;
        var content = $("#comment").val();


        if (content) {
            erreur = false;
        }

        if (erreur == false) {
            $('#form_com').css({"color":"black"});

            var data = $(this).serialize();
            data += "&id=" + url[4];
            $.ajax({
                url: '/comment/send',
                type: 'POST',
                data: data,
                success: function (data) {
                    data = JSON.parse(data);

                    $(".comment:last-child").append('<ul class="comment">' +
                        '<li class="video_user"><a href="/profile/show/' + data.userId + '"> Utilisateur: <span class="user">' + data.user + '</span></li>' +
                        '<li class="video_description">Commentaire: <span class="description">' + data.content + '</span></li>' +
                        '<li class="video_date">Mise en ligne le ' + data.day +
                        'à ' + data.hour + '</li>' +
                        '<form method="post" class="delete_comm">' +
                        '<input type="hidden" name="id" value="'+data.id+'">' +
                        '<input type="submit" name="delete" value="Supprimer" class="input_submit">' +
                        '</form>' +
                        '</ul>');
                }
            });

        } else {
            $('#form_com').css({"color":"red"});
        }
        return false;
    });
//fin form
});