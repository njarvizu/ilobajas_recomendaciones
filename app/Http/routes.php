<?php

Route::get('/', function() {
    return view('welcome');
});
Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('movies/download/{id?}/{action?}', ['uses' => 'DescargasController@historial_descargas']);

Route::get('movies/show_movies', 'MoviesController@show_movies');
Route::get('movies/rate/{movie_id}/{rating}', 'MoviesController@rate');
