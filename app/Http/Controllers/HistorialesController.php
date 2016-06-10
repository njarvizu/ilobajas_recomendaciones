<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\download_queue;

use App\Movie;

class HistorialesController extends Controller
{
    public function show(){
      $datos =  download_queue::get();
      //dd($datos);
       return view('historiales.show', compact('datos'));
    }
}
