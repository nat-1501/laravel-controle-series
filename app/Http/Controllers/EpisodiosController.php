<?php

namespace App\Http\Controllers;

use App\Temporada;
use Illuminate\Http\Request;

class EpisodiosController extends Controller
{
    public function index(Temporada $temporada, Request $request )

    {

       return view (
           'episodios.index', [
           'episodios' => $temporada->episodios (),
            'temporadaId' => $temporada->id
           ]);
    }
}