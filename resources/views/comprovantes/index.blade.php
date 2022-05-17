
@extends('layout')

@section('cabecalho')
Easydocs
@endsection

@section('conteudo')

<a href="/comprovantes/create" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    <?php foreach ($comprovantes as $comprovante): ?>
    <li class="list-group-item">{{$comprovante->nome}}</li>
    <form method="post" action="/comprovantes/{{ $comprovante->id}}" onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes( $comprovante->nome )}}?')">
                    @csrf
                    @method('DELETE')
            <a href="/comprovantes/edit/{{$comprovante->id}}" class="btn btn-primary">Editar</a>
            <button class="btn btn-danger">Excluir</button>
      
    <?php endforeach; ?>
    
</ul>
<form>
<input type="text" class="form-control" name="content" id="content" value="{{implode(',', $custom_log->all())}}">
</form>
@endsection