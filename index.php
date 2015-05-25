<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/circle-progress.js"></script>
        <script src="js/handlebars-v3.0.3.js"></script>
        <script src="js/index.js"></script>
        <script src="js/artist.js"></script>
        <script src="js/circle.js"></script>
        <link href="css/reset.css"/>

        <title>Spontan</title>

        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>



    <div id="content">

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

                <div class='circle'></div>

                        <input type="button" id="{{this.event_id}}" onclick="show_more({{this.event_id}},this.id )" class="view_more" name="view_more" value="+"/>

                    <a href="{{this.event_tickets}}"><input type="button" name="buy_ticket" onclick="buy_tickets()" value="Köp biljett"/></a>

                </div>
                <div class="art"></div>
                {{/each}}
        </script>
        <script  id="artist-template" type="text/x-handlebars-template">
            <div class="artist_div">
            {{#each artists}}
            <p>Artist:{{this.artist_name}}</p>
            {{/each}}
            </div>
        </script>

        <!--Handlebar templates end-->
    </body>
</html>
