
function show_more(id, buttonid) {

    var checkid=('#menu'+buttonid).toString();
    var button=('#'+buttonid).toString();
    if($(checkid).css('display') == 'block'){
        $(checkid).slideUp(1000);
        $(button).val("+");
    }
    else{
        $(checkid).delay(550).slideDown(1000);
        $.get( "http://localhost/laravel_event/public/event/artists/"+id)

        .done(function( data ) {

            var source   = $("#artist-template").html();
            var template = Handlebars.compile(source);
            var html=template(data);

            var artist_div=('#menu'+buttonid).toString();
            $(artist_div).html(html);
            $(button).val("-");

        });
    }
};

