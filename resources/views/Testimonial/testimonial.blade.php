@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Liste des Testimoniaux</h1>
@stop

@section('content')
<table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Commentaire</th>
            <th scope="col">Entreprise</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($testimonial as $item)
                
            <tr>
              <th scope="row">{{ $item->id }}</th>
              <td>{{ $item->nomtesti }}</td>
              <td>{{ $item->entreprise }}</td>
              <td>{{ $item->commentairetesti }}</td>
              <td>
                  <img src="{{Storage::disk('image')->url($item->imagetesti)}}" alt="" style="width: 95px !important; heigth: 300px !important;"></td>
            </tr>
            @endforeach
         
        </tbody>
      </table>
    
@stop