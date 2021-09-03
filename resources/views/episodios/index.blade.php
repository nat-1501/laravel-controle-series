@extends('layout')

@section('cabecalho')
    Episódios
@endsection

@section('conteudo')
    <ul class="list-group">
        @foreach($episodios as $episodio)
            <li class="list-group-item d-flex justify-content-between align-items-center">
            </li>
    </ul>

@endsection