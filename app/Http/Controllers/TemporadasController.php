<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class TemporadasController extends Controller
{
    public function index($serieId)

        {
            $temporadas = Serie::find($serieId)-> temporadas;
            
            return view ('temporadas.index', compact('temporadas'));
            
        }


}
