<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EpisodiosController extends Controller
{
    public function index (Temporada $temporada)
    {
        $episodios = $temporada->episodios;
        return view('episodios.index', compact('episodios'));
    }


}

