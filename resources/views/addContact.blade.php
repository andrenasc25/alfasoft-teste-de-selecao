@extends('layouts.layout')
@section('content')
@include('includes.navbar')
<div class="container pt-5">
    <h2 class="mb-4">Adicionar um novo contato</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{url('/api/contact/')}}">
        @csrf
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input class="form-control" name="name" type="text" placeholder="Nome" aria-label="default input example">
      </div>
      <div class="mb-3">
        <label for="contato" class="form-label">Contato</label>
        <input class="form-control" name="contact" type="text" placeholder="Contato" aria-label="default input example">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Endereço de Email</label>
        <input type="email" name="email_address" class="form-control" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection