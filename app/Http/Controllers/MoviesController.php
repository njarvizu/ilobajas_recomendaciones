<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Movie;

use App\Rating;

use Auth;
use App\download_queue;

class MoviesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
        $where = [
            'movie_id' => $movie_id,
            'user_id' => Auth::user()->id

        ];
        $search_rating = Rating::where($where)->get();
        if(count($search_rating->toArray()) == 0){
            Rating::create([
                'movie_id' => $movie_id,
                'user_id' => Auth::user()->id,
                'title' => $movie->title,
                'rating_api' => (int)$movie->rating,
                'rating' => $rating
            ]);
        } else {
            Rating::where('movie_id',$movie_id)->where('user_id',Auth::user()->id)->update(['rating'=>$rating]);
        }


        flash('Se ha calificado su película ' . $movie->title, 'success');

        return back();

    }

    public function addToQueue($movie_id, $hash)
    {
        $movie_id = (int)$movie_id;
        $movie = Movie::find($movie_id);

        /* Checar si ya está en la cola de descargas */
        if (download_queue::where(['hash' => $hash])->first()) {
            flash('Ya se encuentra en la cola de descargas', 'warning');
            return back();
        }

        $data = [
            'downloaded' => 0,
            'hash' => $hash,
            'movie_id' => $movie->id,
            'progreso' => 0,
            'state' => 'ok',
            'title' => $movie->title,
            'user_id' => Auth::user()->id
        ];

        if (!download_queue::create($data)) {
            flash('Ocurrió un error, no se ha agregado a la cola de descargas', 'warning');
        }

        flash('La película' . $movie->title . 'se agregó a la cola de descargas.', 'success');
        return back();
    }
}
