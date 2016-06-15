<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Recommendation;

class RecommendationsController extends Controller {

    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){

        $peliculas = Recommendation::take(3)->get();

        //    return $peliculas;
        return view('Recommendations.recommendations', compact('peliculas'));

    }
}
