<?php

Route::get('/', function() {
    return view('portada');
});
Route::get('', function() {
    return view('portada');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('movies/download/{id?}/{action?}', ['uses' => 'DescargasController@historial_descargas']);

Route::get('movies/show_movies', 'MoviesController@show_movies');
Route::get('movies/rate/{movie_id}/{rating}', 'MoviesController@rate');
route::get('movies/add_to_queue/{movie_id}/{hash}', 'MoviesController@addToQueue');

Route::get('recommendations/show', 'RecommendationsController@show');
Route::get('recommendations', function(){ return view('recommendations');});
