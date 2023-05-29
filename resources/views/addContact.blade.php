@extends('layouts.layout')
@section('content')
@include('includes.navbar')
<div class="container pt-5">
    <h2 class="mb-4">Adicionar um novo contato</h2>
    <div class="alert alert-danger" id="errors">
        
    </div>
    <form method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input class="form-control" name="name" id="name" type="text" placeholder="Nome" aria-label="default input example">
      </div>
      <div class="mb-3">
        <label for="contato" class="form-label">Contato</label>
        <input class="form-control" name="contact" id="contact" type="text" placeholder="Contato" aria-label="default input example">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Endereço de Email</label>
        <input type="email" name="email_address" id="email_address" class="form-control" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <button type="submit" id="btn" class="btn btn-primary">Enviar</button>
    </form>
</div>
<script>
    var btn = document.getElementById('btn')
    btn.addEventListener('click', (e) => {
        e.preventDefault()
        var name = document.getElementById('name').value
        var contact = document.getElementById('contact').value
        var email_address = document.getElementById('email_address').value
        var _token = document.getElementById('_token').value
        
        axios.post('/api/contact', {
            'name': name,
            'contact': contact,
            'email_address': email_address,
            '_token': _token,
            'accept': 'application/json',
            '_method': 'post'
        })
        .then((response) => {
            let text = "";
            Object.values(response.data).forEach(val => text += val[0] + "<br>");
            
            document.getElementById("errors").innerHTML = text;
        })
    })
</script>
@endsection