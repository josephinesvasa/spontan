
function show_more(id, buttonid) {
    $.get( "http://localhost/laravel_event/public/event/artists/"+id)

        .done(function( data ) {
            console.log(data);

            var source   = $("#artist-template").html();
            var template = Handlebars.compile(source);
            var html=template(data);

            var foo=('#menu'+buttonid).toString();
            $(foo).html(html);

        alert(foo);
        });
};

