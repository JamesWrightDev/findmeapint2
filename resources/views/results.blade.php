@extends('welcome')
@section('content')
    <h1>Results</h1>

        <h2>Closest Pint Near You</h2>
         {{ $closePint['name'] }}
         <a href="https://www.google.com/maps/place/?q=place_id:{{ $closePint['place_id'] }}">Directions</a>
        <h2>Best Rated Pint Near You</h2>
        {{$bestPint['name']}}
        <button class='btn btn-primary' href="https://www.google.com/maps/place/?q=place_id:{{ $bestPint['place_id'] }}">
            Directions
        </button>
        
        <h2>Cheapest Pint Near You</h2>
         {{$cheapPint['name']}}
         <a href="https://www.google.com/maps/place/?q=place_id:{{ $cheapPint['place_id'] }}">Directions</a>
         

@endsection