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
    <link rel="stylesheet" type="text/css" href="css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <title>Spontan</title>
</head>



<body id="body">


<div id="header">
    <h1 id="spon">
        Spontan
    </h1>

    <div id="menu">
        <p class="spontan">
            Stockholm
        </p>

        <p class="spontan">
            Göteborg
        </p>

        <p class="spontan">
            Malmö
        </p>
    </div>
</div>
<div id="wrapper">
    <div id="content">

    </div>
    <!--Handlebar templates start-->

    <script id="event-template" type="text/x-handlebars-template">
        {{#each event}}
        <div class="event_wrapper">
            <div class="event">
                <h1>{{this.event_title}}</h1>

                <div class="left">
                    <p><img class="icon" src="./img/date-icon.png"> {{this.event_date}}</p>

                    <p><img class="icon" src="./img/time-icon.png"> {{this.event_time}}</p>

                    <p><img class="icon" src="./img/map-icon.png"> {{this.venue.0.venue_name}}</p>

                    <p><img class="icon" src="./img/age-icon.png"> {{this.event_age_restriction}}</p>
                </div>
                <div class="right">
                    <p class="val">{{this.event_popularity}}</p>

                    <p class="pop">Populäritet</p>

                    <div class='circle'></div>

                    <input type="button" id="{{this.event_id}}" onclick="show_more({{this.event_id}},this.id )"
                           class="view_more" name="view_more" value="+"/>
                    <a href="{{this.event_tickets}}" target="_blank"><input type="button" class="buy_ticket"
                                                                            name="buy_ticket" onclick="buy_tickets()"
                                                                            value="Köp biljett"/></a>
                </div>
            </div>
            <div class="art">
            </div>
        </div>
        {{/each}}
    </script>
    <script id="artist-template" type="text/x-handlebars-template">
        <div class="artist_div">
            <h1>Artister</h1>
            {{#each artists}}
            <div class="artists_info">
                <img class="image" src="{{this.artist_image}}">

                <p>{{this.artist_name}}</p>
            </div>
            {{/each}}
        </div>
    </script>
    <script id="venue-template" type="text/x-handlebars-template">
        <div class="venue_div">
            <h1>Adress</h1>
            {{#each venue}}
            <div class="venue_info">
                <a href="{{this.venue_map}}" target="blank"> <img class="map" src="{{this.venue_map_image}}"></a>

                <p>{{this.venue_adress}}</p>
            </div>
            {{/each}}
        </div>
    </script>

    <!--Handlebar templates end-->
</div>
</body>
</html>
