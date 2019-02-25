@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>List des Utilisateurs</h1>
@stop

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        
        <th scope="col">E-mail</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($alluser as $item)
      <tr>
        <th scope="row">{{ $item->id }}</th>
        
        <td>{{ $item->email }}</td>
        <td><a href="{{ route('user.show', ['id' =>$item->id]) }}"><button type="button" class="btn btn-primary bouton">Show</button></a>
            <a href="{{ route('user.edit', ['id' =>$item->id]) }}"> <button type="button" class="btn btn-success">Edit</button></a>
            <form style="display: inline;" action="{{ route('user.destroy', ['user' =>$item->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger bouton">Delete</button>
                </form></td>
      </tr>
      
    </tbody>
    @endforeach
  </table>
@stop