@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Création des Testimoniaux</h1>
@stop

@section('content')
<form action="{{ route('testimonial.store') }}" method="post" enctype="multipart/form-data">
    @csrf
   <div class="form-group">
     <label for="">Nom du Client</label>
     <input type="text"
       class="form-control" name="nomtesti" id="" aria-describedby="helpId" placeholder="">
   </div>
   <div class="form-group">
     <label for="">Entreprise</label>
     <input type="text"
       class="form-control" name="entreprise" id="" aria-describedby="helpId" placeholder="">
   </div>
   <div class="form-group">
     <label for="">Commentaire</label>
     <textarea class="form-control" name="commentairetesti" id="" rows="3"></textarea>
   </div>
   <div class="custom-file">
        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="imagetesti">
        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
      </div>
   <button type="submit" class="btn btn-success">Envoyer</button>
</form>
    
@stop