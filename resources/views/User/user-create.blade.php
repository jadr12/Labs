@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Création d'un utilisateur</h1>
@stop

@section('content')
<form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="">Nom</label>
      <input type="text"
        class="form-control" name="nom" id="" aria-describedby="helpId" placeholder="">
      
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
      <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
          </div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="image">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          </div>
        </div>
      <button type="submit" class="btn btn-success">Envoyer</button>
    </form>
@stop