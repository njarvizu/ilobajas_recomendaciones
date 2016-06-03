<?php

namespace App;

use \duxet\Rethinkdb\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'title',
        'movie_id',
        'user_id',
        'rating_api',
        'rating'
    ];

    // public function movie()
    // {
    //     return $this->belongsTo('App\Movie');
    // }
}
