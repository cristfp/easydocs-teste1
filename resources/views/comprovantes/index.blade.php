@extends('layout')

@section('cabecalho')
Easydocs
@endsection

@section('conteudo')

<a href="create" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    <?php foreach ($comprovantes as $comprovante): ?>
    <li class="list-group-item"><?= $comprovante; ?></li>
    <?php endforeach; ?>
</ul>

@endsection