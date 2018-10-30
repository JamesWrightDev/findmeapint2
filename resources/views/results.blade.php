@extends('welcome')
@section('content')
  <div class="results margin-medium">
  <div class="columns">
        <div class="column is-three-fifths is-offset-one-fifth ">
          <div class="is-flex is-horizontal-center flex-column">
            <h2 class="is-size-4 has-text-centered">Closest Pint Near You</h2>
            <h3 class="is-size-2 has-text-centered">{{ $closePint['name'] }}</h3>
            <a class='button button-primary' href="https://www.google.com/maps/search/?api=1&query={{ $closePint['name'] }}&query_place_id={{ $closePint['place_id'] }}">Directions</a>
          </div>
        </div>
      </div>
      <div class="columns">
        <div class="column is-three-fifths is-offset-one-fifth ">
          <div class="is-flex is-horizontal-center flex-column">
            <h2 class="is-size-4 has-text-centered">Best Pint Near You</h2>
            <h3 class="is-size-2 has-text-centered">{{ $bestPint['name'] }}</h3>
            <a class='button button-primary' href="https://www.google.com/maps/search/?api=1&query={{ $bestPint['name'] }}&query_place_id={{ $bestPint['place_id'] }}">Directions</a>
          </div>
        </div>
      </div>
      <div class="columns">
        <div class="column is-three-fifths is-offset-one-fifth ">
          <div class="is-flex is-horizontal-center flex-column">
            <h2 class="is-size-4 has-text-centered">Cheapest Pint Near You</h2>
            <h3 class="is-size-2 has-text-centered">{{ $cheapPint['name'] }}</h3>
            <a class='button button-primary' href="https://www.google.com/maps/search/?api=1&query={{ $cheapPint['name'] }}&query_place_id={{ $cheapPint['place_id'] }}">Direction</a>
          </div>
        </div>
      </div>
  </div>
    


@endsection