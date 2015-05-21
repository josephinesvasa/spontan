<!DOCTYPE html>
    <html>
    <head>
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src=""></script>
        <script src="js/index.js"></script>

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
                    <h1>{{event_title}}</h1>
                    <p>{{this.event_date}}</p>
                    <p>{{this.event_time}}</p>
                    <p>{{this.venue_name}}</p>
                    <p>{{this.event_age_restriction}}</p>
                    <p>{{this.event_popularity}}</p>
                </div>
                {{/each}}
        </script>
        <!--Handlebar templates end-->
    </body>
</html>
