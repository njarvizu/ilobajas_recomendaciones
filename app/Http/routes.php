<?php

    Route::get('/{id?}', ['uses' => 'DescargasController@historial_descargas']);
    Route::get('movies/show_movies', 'MoviesController@show_movies');
    Route::get('movies/rate/{movie_id}/{rating}', 'MoviesController@rate');
