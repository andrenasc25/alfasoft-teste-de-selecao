@extends('layouts.layout')
@section('content')
@include('includes.navbar')
<div class="container pt-5">
  <h2>Lista de Contatos</h2>
  <table class="table mt-5">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
          @foreach($contatos as $contato)
              <tr>
                  <th scope="row">{{$contato->id}}</th>
                  <td>{{$contato->name}}</td>
                  <td>
                      <a href="{{route('edit-contact', $contato->id)}}" class="link-opacity-100 mr-2">Editar</a>
                      <button type="button" class="btn btn-primary" onClick="deletar(this.value)" value="{{$contato->id}}">Deletar</button>
                  </td>
              </tr>
          @endforeach
      </tbody>
    </table>
</div>
<script>
    function deletar(id){
        axios.delete('/api/contact/' + id, {
            id: id
        })
        .then((response) => {
            console.log(response)
        })
    }
</script>
@endsection