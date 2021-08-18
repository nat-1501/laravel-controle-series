@extends('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')

@if(!@empty($mensagem))
    

    <div class="alert alert-success">
{{ $mensagem }}
    </div>  
    
@endempty    


<a href="{{route('form_criar_serie') }}" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    
    @foreach($series as $serie)

    <li class="list-group-item ">
        {{ $serie }}
        <form method="post" action="/series/{{$serie->id}}"
            onsubmit="return confirm('Tem certeza que deseja excluir {{addslashes($serie->nome) }}?')">
            @csrf
            @method('delete')
            <button class= "btn btn-danger">Excluir</button>
        </form>
    </li>            
     @endforeach

</ul>
@endsection