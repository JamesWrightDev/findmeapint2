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
    return view('search');
});
Route::get('/results', function () {
    return view('welcome');
});
Route::post('/results', 'ResultsController@index');

Route::post('/', function(Request $request){

  
});
