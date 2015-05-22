
$.get( "http://localhost/laravel_event/public/event/all")
    .done(function( data ) {

        var source   = $("#event-template").html();
        var template = Handlebars.compile(source);
        var html=template(data);
        $('#content').html(html);
    });

