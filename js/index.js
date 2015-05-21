$.get( "http://localhost/laravel_event/public/event/all")
    .done(function( data ) {
        //alert( "Data Loaded: " + data );

        var source   = $("#event-template").html();
        var template = Handlebars.compile(source);
        var html=(data);
        alert(html);
    });