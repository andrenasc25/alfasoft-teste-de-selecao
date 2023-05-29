@extends('layouts.layout')
@section('content')
@include('includes.navbar')
<div class="container">
  <h2>Lista de Contatos</h2>
  <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Contato</th>
          <th scope="col">Endereço de Email</th>
        </tr>
      </thead>
      <tbody>
          @foreach($contatos as $contato)
              <tr>
                  <th scope="row">{{$contato->id}}</th>
                  <td>{{$contato->name}}</td>
                  <td>{{$contato->contact}}</td>
                  <td>{{$contato->email_address}}</td>
              </tr>
          @endforeach
      </tbody>
    </table>
</div>
@endsection