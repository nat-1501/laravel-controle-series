<?php

namespace App\Http\Controllers;

use App\Episodio;
use App\Http\Requests\SeriesFormRequest;
use App\Serie;
use App\Services\CriadordeSerie;
use App\Services\RemovedorDeSerie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::all();
        //->orderBy('nome')
        //->get();
        $mensagem = $request->session()->get('mensagem');

        return view('series.index', compact('series', 'mensagem'));
    }

    public function create()
    {
        return view('series.create');
    }


    public function store(
        SeriesFormRequest $request, 
        CriadordeSerie $criadordeSerie
        ) 
    {

        $serie = $criadordeSerie->criarSerie(
            $request->nome,
            $request->qtd_temporadas,
            $request->ep_por_temporada);
        

        $request->session()
            ->flash(
                'mensagem',
                "Série {$serie->id} e suas temporadas e seus episodios criados com sucesso {$serie->nome}"
            );


        return redirect()->route('listar_series');
    }

    public function destroy(Request $request, RemovedordeSerie $removedordeSerie)
    {
        $nomeSerie = $removedordeSerie->removerSerie($request->id); 
            $request->session()
                ->flash(
                    'mensagem',
                    "Série $nomeSerie removida com sucesso"
                );
        return redirect()->route('listar_series');
    }
}
