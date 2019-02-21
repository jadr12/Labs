@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Création d'un utilisateur</h1>
@stop

@section('content')
<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="">Nom</label>
      <input type="text"
        class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
      
    </div>
    <div class="form-group">
        <label for="">Prénom</label>
        <input type="text"
          class="form-control" name="prenom" id="" aria-describedby="helpId" placeholder="">
        
      </div>
    <div class="form-group">
        <label for="">E-mail</label>
        <input type="text"
          class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
        
      </div>
      <div class="form-group">
        <label for="">Mot de passe</label>
        <input type="text"
          class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
        
      </div>
      <button type="submit" class="btn btn-success">Envoyer</button>
    </form>
@stop