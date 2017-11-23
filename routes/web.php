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
Route::view('/station', 'station');
Route::get('/', function () {
    return view('index');
});
Route::get('/silom', function () {
    return view('silom')->with('silom_stations', \App\SilomStation::all());
});
Route::get('/sukhumvit', function () {
    return view('sukhumvit')->with('sukhumvit_stations', \App\SukhumvitStation::all());
});

Route::get('places/{id}', 'PlaceController@get');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', function () {
    return view('index');
});
