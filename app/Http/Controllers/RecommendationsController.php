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
        //obtener las peliculas de la fecha actual
        $fecha_hoy = date('Y-m-d');
        $peliculas = Recommendation::where('date', $fecha_hoy)->get();//where('date', $fecha_hoy).get();
        
     return view('Recommendations.recommendations', compact('peliculas'));

    }
}
