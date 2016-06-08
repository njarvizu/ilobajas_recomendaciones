<?php

    namespace App;

    use \duxet\Rethinkdb\Eloquent\Model;

    class download_queue extends Model {
        protected $connection = 'rethinkdb';
        protected $table    = 'download_queue_0dca8015127a';
        protected $fillable = ['downloaded'];
    }