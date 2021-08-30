<?php

namespace App\Services;

use App\{Serie, Temporada, Episodio};
use Illuminate\Support\Facades\DB;

class RemovedordeSerie
{
    public function removerSerie (int $serieId): string
{
    DB::transaction(function () use($serieId, &$nomeSerie) {

    $nomeSerie = '';
    $serie = Serie::find($serieId);
    $nomeSerie = $serie->nome;
    $serie->temporadas->each(function (Temporada $temporada) {
            $temporada->episodios->each(function(Episodio $episodio) {
                $episodio->delete();
            });
            $temporada->delete();
         });
        $serie->delete();

    });
    

        return $nomeSerie;
}


}
