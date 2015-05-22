
$.get( "http://localhost/laravel_event/public/event/all")
    .done(function( data ) {

        var source   = $("#event-template").html();
        var template = Handlebars.compile(source);
        var html=template(data);

        $('#blaj').html(html);
        //console.log(html);
    });


/*
function view_more(){
 $.get( "http://localhost/laravel_event/public/artist")
 .done(function( data ) {
 //alert( "Data Loaded: " + data );

 var source   = $("#event-template").html();
 var template = Handlebars.compile(source);
 var html=template(data);
 $('#bl').html(html);
 console.log(html);
 })



};
*/

