@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Creation d'un service</h1>
@stop

@section('content')
<form action="{{ route('services.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="">Texte du Projet</label>
          <input type="text"
            class="form-control" name="textservice" id="" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group">
          <label for="">Description</label>
          <input type="text"
            class="form-control" name="descriptionservice" id="" aria-describedby="helpId" placeholder="">
        </div>
        <select name="iconeservice" class="selectpicker">
                <option value="flaticon-023-flask" data-icon="flaticon-023-flask">Flask</option>
                <option value="flaticon-011-compass" data-icon="flaticon-011-compass">Compass</option>
                <option value="flaticon-037-idea" data-icon="flaticon-037-idea">Idea</option>
                <option value="flaticon-039-vector" data-icon="flaticon-039-vector">Vector</option>
                <option value="flaticon-036-brainstorming" data-icon="flaticon-036-brainstorming">Brainstorming</option>
                <option value="flaticon-026-search" data-icon="flaticon-026-search">Search</option>
                <option value="flaticon-018-laptop-1" data-icon="flaticon-018-laptop-1">Laptop</option>
                <option value="flaticon-043-sketch" data-icon="flaticon-043-sketch">Sketch</option>
                <option value="flaticon-012-cube" data-icon="flaticon-012-cube">Cube</option>
        </select><br><br>
             <button type="submit" class="btn btn-success">Envoyer</button>
             
    </form>
    
@stop