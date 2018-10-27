<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('/results', 'ResultsController@index');

Route::post('/', function(Request $request){
    dd($request);
    $lat = 51.528820;
    $long = -0.048160;
    $response = GooglePlaces::nearbySearch($lat.','.$long, '800', ['type'=>'bar', 'minprice'=>'1', 'rankby' => 'distance']);
    $results = $response['results'];
    $query = array();
    $count = 0;
    foreach($results as $result){
        $a = array('name' => $result['name'],'rating' => $result['rating'], 'price_level' => $result['price_level']);
        array_push($query, $a);
        $result['name'];
        $result['rating'];
        $result['price_level'];
    }
    $maxBestPint = 0;
    $minCheapPint = 6;
    $bestPint;
    $cheapPint;
    $closePint = $query[0];

    foreach($query as $k=>$v)
        {
            if($v['price_level']<$minCheapPint)
            {
                $minCheapPint = $v['price_level'];
                $cheapPint = $v;
            }
            
            if($v['rating']>$maxBestPint)
            {
                $max = $v['rating'];
                $bestPint = $v;
            }
        }


    $returnThis = array_search(max($query),$query);

    $closePint = $query[0];

    return view('results', compact('closePint'));

  
});
