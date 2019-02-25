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
      @if($errors->has('nom'))
      @foreach($errors->get('nom') as $error)
      <div class="text-danger">{{ $errors->first('nom') }}</div>
      @endforeach
      @endif
      <input type="text"
        class="form-control" name="nom" id="" aria-describedby="helpId" placeholder="">
      
    </div>
    <div class="form-group">
        <label for="">Prénom</label>
        @if($errors->has('prenom'))
      @foreach($errors->get('prenom') as $error)
      <div class="text-danger">{{ $errors->first('prenom') }}</div>
      @endforeach
      @endif
        <input type="text"
          class="form-control" name="prenom" id="" aria-describedby="helpId" placeholder="">
        
      </div>
    <div class="form-group">
        <label for="">E-mail</label>
        @if($errors->has('email'))
      @foreach($errors->get('email') as $error)
      <div class="text-danger">{{ $errors->first('email') }}</div>
      @endforeach
      @endif
        <input type="text"
          class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
        
      </div>
      <div class="form-group">
        <label for="">Mot de passe</label>
        @if($errors->has('password'))
      @foreach($errors->get('password') as $error)
      <div class="text-danger">{{ $errors->first('password') }}</div>
      @endforeach
      @endif
        <input type="text"
          class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
        
      </div>
      @if($errors->has('image'))
      @foreach($errors->get('image') as $error)
      <div class="text-danger">{{ $errors->first('image') }}</div>
      @endforeach
      @endif
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