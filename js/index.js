function addID() {
    var i = 0;
    $('.art').each(function () {
        i++;
        var newID = 'menu' + i;
        $(this).attr('id', newID);
        $(this).css('display', 'none');


    });


}
function addButtonID() {
    var i = 0;
    $('.view_more').each(function () {
        i++;
        var newID = i.toString();
        $(this).attr('id', newID);

    });

}

$.get("http://localhost/laravel_event/public/event/all")

    .done(function (data) {
        var source = $("#event-template").html();
        var template = Handlebars.compile(source);
        var html = template(data);

        $('#content').html(html);
        show_circle();
        //console.log(html);
        addID();
        addButtonID();
    });


