@extends('layouts.layout')
@section('content')
@include('includes.navbar')
<div class="container pt-5">
    <h2 class="mb-4">Editar um contato</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="put" action="{{url('/api/contact/' . $contato[0]->id)}}">
        <input type="hidden" name="id" id="id" value="{{ $contato[0]->id }}">
        <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input class="form-control" name="name" id="name" type="text" placeholder="{{ $contato[0]->name }}" value="{{ $contato[0]->name }}" aria-label="default input example">
      </div>
      <div class="mb-3">
        <label for="contato" class="form-label">Contato</label>
        <input class="form-control" name="contact" id="contact" type="text" placeholder="{{ $contato[0]->contact }}" value="{{ $contato[0]->contact }}"  aria-label="default input example">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Endereço de Email</label>
        <input type="email" name="email_address" id="email_address" class="form-control" placeholder="{{ $contato[0]->email_address }}" value="{{ $contato[0]->email_address }}"  id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <button type="submit" id="btn" class="btn btn-primary">Atualizar</button>
    </form>
</div>
<script>
    
    var btn = document.getElementById('btn')
    btn.addEventListener('click', (e) => {
        e.preventDefault()
        var name = document.getElementById('name').value
        var contact = document.getElementById('contact').value
        var email_address = document.getElementById('email_address').value
        var id = document.getElementById('id').value
        var _token = document.getElementById('_token').value
        
        axios.put('/api/contact/' + id, {
            name: name,
            contact: contact,
            email_address: email_address,
            id: id,
            _token: _token
        })
        .then((response) => {
            console.log(response.data)
        })
    })
</script>
@endsection