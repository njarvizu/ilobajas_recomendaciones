<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Recommendation;

class RecommendationsController extends Controller {




    public function show(){

    $peliculas = Recommendation::take(3)->get();

//    return $peliculas;
     return view('Recommendations.recommendations', compact('peliculas'));

    }
}
