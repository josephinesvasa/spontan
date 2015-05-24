/*
$.get("http://localhost/laravel_event/public/artist")
    .done(function( data ) {

        var source   = $("#artist-template").html();
        var template = Handlebars.compile(source);
        var html=(data);

        $('#art').html(html);
        console.log(html);

    });
*/