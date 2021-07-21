<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeriesController extends Controller

{

   public function index (Request $request) {
    
        $series = [

            'Grey\'s Anatomy',
            'Lost',
            'Agente of Shield'

        ];         

        return view ('series.index', compact('series'));

}


public function creat ()
{
    return view(view: 'series.create');
}
}
