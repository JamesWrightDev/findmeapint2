<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
       
    </head>
    <body>
    <h1>Results</h1>
 

    
        <h2>Closest Pint Near You</h2>
         {{ $closePint['name'] }}
         <a href="https://www.google.com/maps/place/?q=place_id:{{ $closePint['place_id'] }}">Directions</a>
        <h2>Best Rated Pint Near You</h2>
        {{$bestPint['name']}}
        <a href="https://www.google.com/maps/place/?q=place_id:{{ $bestPint['place_id'] }}">Directions</a>
        <h2>Cheapest Pint Near You</h2>
         {{$cheapPint['name']}}
         <a href="https://www.google.com/maps/place/?q=place_id:{{ $cheapPint['place_id'] }}">Directions</a>


    </body>

        </script>
    </body>
</html>
