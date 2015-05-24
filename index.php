<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/circle-progress.js"></script>
        <script src="js/handlebars-v3.0.3.js"></script>
        <script src="js/index.js"></script>
        <script src="js/circle-progress.js"></script>
        <link href="css/reset.css"/>

        <title>Spontan</title>

        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>



    <div id="content">

    </div>
    <div id="art">

    </div>


        <!--Handlebar templates start-->

        <script id="event-template" type="text/x-handlebars-template">
                {{#each event}}
                <div class="event">
                    <h1>{{this.event_title}}</h1>
                    <p>Datum: {{this.event_date}}</p>
                    <p>Tid: {{this.event_time}}</p>
                    <p>Plats: {{this.venue.0.venue_name}}</p>
                    <p>Åldersgräns: {{this.event_age_restriction}}</p>

                    <p class="val">{{this.event_popularity}}</p>
                    <form>
                        <input type="hidden" name="hidden_id" value="{{this.event_id}}"/>
                        <input type="submit" id="{{this.event_id}}" name="view_more" value="+" onclick="view_more()"/>
                    </form>
                    <script>


                        var elements = document.getElementsByClassName('val');
                       for (var i = 0; i < elements.length; i++) {
                           var x=elements[i];


                       }

                          console.log(x);


                        $('.circle').circleProgress({
                            value:  document.getElementsByClassName('val')[0].innerHTML,
                            size: 80,
                            startAngle: 4.7,
                            fill: {
                                gradient: ["red", "orange"]
                            }
                        });
                     <{{!}}/script>

                        <div class="circle"></div>
                    <a href="{{this.event_tickets}}"><input type="button" name="buy_ticket" onclick="buy_tickets()" value="Köp biljett"/></a>
                    <div class="artist_div">
                    {{#each artists}}
                    <p>Artist:{{this.artist_name}}</p>
                    {{/each}}
                    </div>
                </div>
                {{/each}}
        </script>

        <!--Handlebar templates end-->
    </body>
</html>
