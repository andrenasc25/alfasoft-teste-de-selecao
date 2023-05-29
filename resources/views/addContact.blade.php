@extends('layouts.layout')
@section('content')
@include('includes.navbar')
<div class="container">
    <h2>Adicionar um novo contato</h2>
    <form>
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input class="form-control" type="text" placeholder="Nome" aria-label="default input example">
      </div>
      <div class="mb-3">
        <label for="contato" class="form-label">Contato</label>
        <input class="form-control" type="text" placeholder="Contato" aria-label="default input example">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Endereço de Email</label>
        <input type="email" class="form-control" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection