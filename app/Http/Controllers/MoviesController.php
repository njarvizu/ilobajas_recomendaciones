<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Movie;

use App\Rating;

class MoviesController extends Controller
{
    public function show_movies()
    {
        // return Movie::with('ratings')->get();
        $movies = Movie::with(['ratings'])
                                ->orderBy('id', 'RAND()')
                                ->take(4)
                                ->get();

        return view('movies.show_movies', compact('movies'));
    }

    public function rate($movie_id, $rating)
    {
        $movie_id = (int)$movie_id;
        $rating = (int)$rating;
        $movie = Movie::find($movie_id);

        Rating::create([
            'movie_id' => $movie_id,
            'user_id' => 1,
            'title' => $movie->title,
            'rating_api' => (int)$movie->rating,
            'rating' => $rating
        ]);

        flash('Se ha calificado su película ' . $movie->title, 'success');

        return back();

    }
}
