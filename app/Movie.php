<?php

namespace App;

use \duxet\Rethinkdb\Eloquent\Model;

class Movie extends Model
{
    public function ratings()
    {
        return $this->hasMany('App\Rating', 'movie_id', 'id');
    }
}
