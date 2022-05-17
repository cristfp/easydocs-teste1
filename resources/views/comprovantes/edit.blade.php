@extends('layout')

@section('cabecalho')
Editar comprovante
@endsection

@section('conteudo')
    <form method="post" action ="/comprovantes/update/{{$comprovantes->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="{{$comprovantes->nome}}">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" class="form-control" name="sobrenome" id="sobrenome" value="{{$comprovantes->sobrenome}}">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" name="email" id="email" value="{{$comprovantes->email}}">
            <label for="rua">Rua</label>
            <input type="text" class="form-control" name="rua" id="rua" value="{{$comprovantes->rua}}">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" name="bairro" id="bairro" value="{{$comprovantes->bairro}}">
            <label for="numero">Número</label>
            <input type="text" class="form-control" name="numero" id="numero" value="{{$comprovantes->numero}}">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" name="complemento" id="complemento" value="{{$comprovantes->complemento}}">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade" value="{{$comprovantes->cidade}}">
            <label for="estado">Estado</label>
            <input type="text" class="form-control" name="estado" id="estado" value="{{$comprovantes->estado}}">
            <label for="status">Status</label>
            <input type="text" class="form-control" name="status" id="status" value="{{$comprovantes->status}}">
            <label for="observacoes">Observacoes</label>
            <input type="text" class="form-control" name="observacoes" id="observacoes" value="{{$comprovantes->observacoes}}">
            <label for="imagem">Imagem</label>
            <input type="file" name="imagem" accept="image/png, image/gif, image/jpeg" value="{{$comprovantes->imagem}}" />


        </div>
        <button class="btn btn-primary">Editar</button>
    </form>
@endsection