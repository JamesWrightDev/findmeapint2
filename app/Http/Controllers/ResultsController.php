<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GooglePlaces;

class ResultsController extends Controller
{
    public function index(Request $request)
    {
        $coordinates = $request->coordinates;
        $response = GooglePlaces::nearbySearch($coordinates, '1600', ['type'=>'bar', 'minprice'=>'1', 'rankby' => 'distance']);
        $results = $response['results'];
        $query = array();
        $count = 0;
        
    foreach($results as $result){
        $a = array
        (
            'name' => $result['name'],
            'rating' => $result['rating'], 
            'price_level' => $result['price_level'],
            'place_id' => $result['place_id']
        );
        array_push($query, $a);
        $result['name'];
        $result['rating'];
        $result['price_level'];
        $result['place_id'];
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
    return view('results', compact('closePint','cheapPint','bestPint'));
    }
}
