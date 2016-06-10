<?php

namespace App;

use \duxet\Rethinkdb\Eloquent\Model;

use App\download_queue;
use App\Historial;

class Historiales extends Model
{

  protected $connection = "rethinkdb";

  public function movies()
  {
      return $this->hasMany('App\Movies', 'movie_id');
  }

}
