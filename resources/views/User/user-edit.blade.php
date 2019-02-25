@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Modification d'un utilisateur</h1>
@stop

@section('content')
<form action="{{ route('user.update',['alluser'=>$user->id]) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
      <label for="">Nom</label>
      @if($errors->has('nom'))
      @foreach($errors->get('nom') as $error)
      <div class="text-danger">{{ $errors->first('nom') }}</div>
      @endforeach
      @endif
      <input type="text"
        class="form-control" name="nom" id="" aria-describedby="helpId" placeholder="" value="{{ old('nom',$user->profil->nom) }}">
      
    </div>
    <div class="form-group">
        <label for="">Prénom</label>
        @if($errors->has('prenom'))
        @foreach($errors->get('prenom') as $error)
        <div class="text-danger">{{ $errors->first('prenom') }}</div>
        @endforeach
        @endif
        <input type="text"
          class="form-control" name="prenom" id="" aria-describedby="helpId" placeholder="" value="{{ old('prenom',$user->profil->prenom) }}">
        
      </div>
    <div class="form-group">
        <label for="">E-mail</label>
        @if($errors->has('email'))
        @foreach($errors->get('email') as $error)
        <div class="text-danger">{{ $errors->first('email') }}</div>
        @endforeach
        @endif
        <input type="text"
          class="form-control" name="email" id="" aria-describedby="helpId" placeholder=""value="{{ old('email',$user->email) }}">
        
      </div>
      <div class="form-group">
        <label for="">Mot de passe</label>
        @if($errors->has('password'))
        @foreach($errors->get('password') as $error)
        <div class="text-danger">{{ $errors->first('password') }}</div>
        @endforeach
        @endif
        <input type="text"
          class="form-control" name="password" id="" aria-describedby="helpId" placeholder=""value="{{ old('password',$user->password) }}">
        
      </div>
      <button type="submit" class="btn btn-success">Envoyer</button>
    </form>
@stop