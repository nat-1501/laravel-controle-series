@extends('layout')

@section ('cabecalho')

Séries
@endsection

@section('conteudo')

 <a  href="/series/criar" class="btn btn-primary" role="button">Adicionar serie</a>
        
<ul class="list-group">
    <?php foreach ($series as $serie): ?>
    <li class="list-group-item"><?= $serie; ?></li>
    <?php endforeach; ?>

 </ul>            

@endsection