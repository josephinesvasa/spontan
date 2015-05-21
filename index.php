<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/handlebars-v3.0.3.js"></script>
        <script src="js/index.js"></script>
        <link href="css/reset.css"/>

        <title>Spontan</title>

        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
    <div id="blaj">

    </div>
        <!--Handlebar templates start-->
        <script id="event-template" type="text/x-handlebars-template">
                {{#each event}}
                <div class="event">
                    <h1>{{this.event_title}}</h1>
                    <p>Datum:{{this.event_date}}</p>
                    <p>Tid:{{this.event_time}}</p>
                    <p>Plats:{{this.venue.0.venue_name}}</p>
                    <p>Åldersgräns:{{this.event_age_restriction}}</p>
                    <p>Popularity:{{this.event_popularity}}</p>
                    <form>
                        <input type="hidden" name="hidden_id" value="{{this.event_id}}"/>
                        <input type="submit" name="view_more" onclick="view_more()" value="+"/>
                    </form>
                    <input type="button" name="buy_ticket" onclick="buy_tickets()" value="Köp biljett"/>
                </div>
                {{/each}}
        </script>
        <!--Handlebar templates end-->
    </body>
</html>
