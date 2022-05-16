@extends('layout')

@section('cabecalho')
Adicionar comprovante
@endsection

@section('conteudo')
    <form method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" class="form-control" name="sobrenome" id="sobrenome">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" name="email" id="email">
            <label for="rua">Rua</label>
            <input type="text" class="form-control" name="rua" id="rua">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" name="bairro" id="bairro">
            <label for="numero">Número</label>
            <input type="text" class="form-control" name="numero" id="numero">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" name="complemento" id="complemento">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade">
            <label for="status">Status</label>
            <input type="text" class="form-control" name="status" id="status">
            <label for="observacoes">Observacoes</label>
            <input type="text" class="form-control" name="observacoes" id="observacoes">
            <label for="imagem">Imagem</label>
            <input type="file" name="imagem" accept="image/png, image/gif, image/jpeg" />


        </div>
        <button class="btn btn-primary">Adicionar</button>
    </form>
@endsection