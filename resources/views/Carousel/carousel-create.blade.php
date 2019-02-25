@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Ajout d'une image dans le carousel</h1>
@stop

@section('content')
<form action="{{ route('carousel.store') }}" method="POST" enctype="multipart/form-data">
     @csrf
<div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
        </div>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="imagecarousel">
          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
      </div>
      <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
@stop