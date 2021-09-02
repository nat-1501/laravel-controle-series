@extends('layout')

@section('cabecalho')
    Temporadas de {{$serie->nome}}

@endsection

@section('conteudo')

    <ul class="list-group">
        @foreach ($temporadas as $temporada)
            <li class="list-group-item">
                <a href="">
                    Temporada {{$temporada->numero}}</li>
                </a>    
        @endforeach
    
@endsection