@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Listes des carousels</h1>
@stop

@section('content')

@if(count($carousel)>0)
<div class="container">
    <div class="row">
        @foreach ($carousel as $item)
        <div class="col-sm-1">
            <img src="{{Storage::disk('image')->url($item->imagecarousel)}}" alt="" style="width: 95px !important; heigth: 300px !important;">
            <form  action="{{ route('carousel.destroy', ['carousel' =>$item->id]) }}" method="POST">
               @method('DELETE')
               @csrf
               <button type="submit" class="btn btn-danger bouton">Delete</button>
           </form>
        </div>
        @endforeach
    </div>
 </div>
@endif

@stop