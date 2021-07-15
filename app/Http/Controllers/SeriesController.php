<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;

class SeriesController extends Controller

{

   public function listarSeries () {
    
        $series = [

            'Grey\'s Anatomy',
            'Lost',
            'Agente of Shield'

        ];         

        $html = "<ul>";
        foreach ($series as $serie) {

            $html .= "<li>$serie</li>";
        }

        $html .= "</ul>";

        return $html;

}
}