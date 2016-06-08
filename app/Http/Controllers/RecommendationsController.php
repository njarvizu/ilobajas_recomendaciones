<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Recommendation;

class RecommendationsController extends Controller {




    public function show_recomm(){

    //  $peliculas = App\Recommendation::
    $peliculas = Recommendation::take(3)->get();

     return view('Recommendations.recommendations', compact('peliculas'));

    }
}
