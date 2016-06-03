<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('portada');
});
    Route::get('/{id?}', ['uses' => 'DescargasController@historial_descargas']);
    Route::get('movies/show_movies', 'MoviesController@show_movies');
    Route::get('movies/rate/{movie_id}/{rating}', 'MoviesController@rate');
