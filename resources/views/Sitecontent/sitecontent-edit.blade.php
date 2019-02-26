@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Modification du contenu du Site</h1>
@stop

@section('content')
    <form action="{{ route('sitecontent.update',['site'=>$site->id]) }}" method="POST">
        @method('PUT')
        @csrf
                <div class="form-group">
                    <label for="">Titre Carousel</label>
                    @if($errors->has('titrecarousel'))
                    @foreach($errors->get('titrecarousel') as $error)
                    <div class="text-danger"> {{$errors->first('titrecarousel')}}</div>
                    @endforeach
                    @endif  
                  <input type="text"
                    class="form-control" name="titrecarousel" id="" aria-describedby="helpId" placeholder="" value="{{ old('titrecarousel', $site->titrecarousel) }}" >
                </div>
                <div class="form-group">
                  <label for="">Titre Video</label>
                  @if($errors->has('titrevideo'))
                    @foreach($errors->get('titrevideo') as $error)
                    <div class="text-danger">{{$errors->first('titrevideo') }}</div>
                    @endforeach
                    @endif  
                  <input type="text"
                    class="form-control" name="titrevideo" id="" aria-describedby="helpId" placeholder="" value="{{ old('titrevideo', $site->titrevideo) }}" >
                </div>
                <div class="form-group">
                  <label for="">Texte Video gauche</label>
                  @if($errors->has('textupvideo'))
                    @foreach($errors->get('textupvideo') as $error)
                    <div class="text-danger">{{$errors->first('textupvideo') }}</div>
                    @endforeach
                    @endif  
                  <input type="text"
                    class="form-control" name="textupvideo" id="" aria-describedby="helpId" placeholder="" value="{{ old('textupvideo', $site->textupvideo) }}" >
                </div>
                <div class="form-group">
                    <label for="">Texte Video droite</label>
                    @if($errors->has('textupvideo2'))
                    @foreach($errors->get('textupvideo2') as $error)
                    <div class="text-danger">{{$errors->first('textupvideo2') }}</div>
                    @endforeach
                    @endif  
                    <input type="text"
                        class="form-control" name="textupvideo2" id="" aria-describedby="helpId" placeholder="" value="{{ old('textupvideo2', $site->textupvideo2) }}">
                </div>
                <div class="form-group">
                    <label for="">Lien de la video</label>
                    @if($errors->has('lienvideo'))
                    @foreach($errors->get('lienvideo') as $error)
                    <div class="text-danger">{{$errors->first('lienvideo') }}</div>
                    @endforeach
                    @endif  
                    <input type="text"
                        class="form-control" name="lienvideo" id="" aria-describedby="helpId" placeholder="" value="{{ old('lienvideo', $site->lienvideo) }}">
                </div>
                <div class="form-group">
                    <label for="">Titre des testimoniaux</label>
                    @if($errors->has('titretestimonial'))
                    @foreach($errors->get('titretestimonial') as $error)
                    <div class="text-danger">{{$errors->first('titretestimonial') }}</div>
                    @endforeach
                    @endif  
                    <input type="text"
                        class="form-control" name="titretestimonial" id="" aria-describedby="helpId" placeholder="" value ="{{ old('titretestimonial',$site->titretestimonial) }}">
                    </div>
                    <div class="form-group">
                        <label for="">Titre Service</label>
                        @if($errors->has('titreservice'))
                    @foreach($errors->get('titreservice') as $error)
                    <div class="text-danger">{{$errors->first('titreservice') }}</div>
                    @endforeach
                    @endif  
                        <input type="text"
                          class="form-control" name="titreservice" id="" aria-describedby="helpId" placeholder="" value="{{ old('titreservice',$site->titreservice) }}">
                    </div>
                    <div class="form-group">
                        <label for="">Titre Team</label>
                        @if($errors->has('titreteam'))
                    @foreach($errors->get('titreteam') as $error)
                    <div class="text-danger">{{$errors->first('titreteam') }}</div>
                    @endforeach
                    @endif  
                        <input type="text"
                            class="form-control" name="titreteam" id="" aria-describedby="helpId" placeholder="" value="{{ old('titreteam', $site->titreteam) }}">
                    </div>
                    <div class="form-group">
                        <label for="">Titre Promotion</label>
                        @if($errors->has('titrepromotion'))
                    @foreach($errors->get('titrepromotion') as $error)
                    <div class="text-danger">{{$errors->first('titrepromotion') }}</div>
                    @endforeach
                    @endif  
                        <input type="text"
                            class="form-control" name="titrepromotion" id="" aria-describedby="helpId" placeholder="" value="{{ old('titrepromotion', $site->titrepromotion) }}">
                    </div>
                    <div class="form-group">
                        <label for="">Sous-Titre Promotion</label>
                        @if($errors->has('stpromotion'))
                    @foreach($errors->get('stpromotion') as $error)
                    <div class="text-danger">{{$errors->first('stpromotion') }}</div>
                    @endforeach
                    @endif  
                        <input type="text"
                            class="form-control" name="stpromotion" id="" aria-describedby="helpId" placeholder="" value="{{ old('stpromotion', $site->stpromotion) }}">
                    </div>
                    <div class="form-group">
                      <label for="">Titre Contact</label>
                      @if($errors->has('titrecontact'))
                    @foreach($errors->get('titrecontact') as $error)
                    <div class="text-danger">{{$errors->first('titrecontact') }}</div>
                    @endforeach
                    @endif  
                      <input type="text"
                        class="form-control" name="titrecontact" id="" aria-describedby="helpId" placeholder="" value="{{ old('titrecontact', $site->titrecontact) }}">
                    </div>
                    <div class="form-group">
                        <label for="">Sous-titre Contact</label>
                        @if($errors->has('stcontact'))
                    @foreach($errors->get('stcontact') as $error)
                    <div class="text-danger">{{$errors->first('stcontact') }}</div>
                    @endforeach
                    @endif  
                        <input type="text"
                              class="form-control" name="stcontact" id="" aria-describedby="helpId" placeholder="" value="{{ old('stcontact',$site->stcontact) }}">
                    </div>
                    <div class="form-group">
                        <label for="">Titre Adresse</label>
                        @if($errors->has('titreadresse'))
                    @foreach($errors->get('titreadresse') as $error)
                    <div class="text-danger">{{$errors->first('titreadresse') }}</div>
                    @endforeach
                    @endif  
                        <input type="text"
                            class="form-control" name="titreadresse" id="" aria-describedby="helpId" placeholder="" value='{{ old('titreadresse', $site->titreadresse) }}'>
                    </div>
                    <div class="form-group">
                        <label for="">Sous-titre Adresse</label>
                        @if($errors->has('stadresse'))
                        @foreach($errors->get('stadresse') as $error)
                        <div class="text-danger">{{$errors->first('stadresse') }}</div>
                        @endforeach
                        @endif  
                        <input type="text"
                            class="form-control" name="stadresse" id="" aria-describedby="helpId" placeholder="" value="{{ old('stadresse', $site->stadresse) }}">
                    </div>
                    <div class="form-group">
                        <label for="">Sous-titre Ville</label>
                        @if($errors->has('stville'))
                        @foreach($errors->get('stville') as $error)
                        <div class="text-danger">{{$errors->first('stville') }}</div>
                        @endforeach
                        @endif  
                        <input type="text"
                            class="form-control" name="stville" id="" aria-describedby="helpId" placeholder="" value="{{ old('stville', $site->stville) }}">
                    </div>
                    <div class="form-group">
                        <label for="">Sous-titre numero</label>
                        @if($errors->has('stnumero'))
                        @foreach($errors->get('stnumero') as $error)
                        <div class="text-danger">{{$errors->first('stnumero') }}</div>
                        @endforeach
                        @endif  
                        <input type="text"
                            class="form-control" name="stnumero" id="" aria-describedby="helpId" placeholder="" value="{{ old('stnumero', $site->stnumero) }}">
                    </div>
                    <div class="form-group">
                        <label for="">Sous-titre email</label>
                        @if($errors->has('stemail'))
                        @foreach($errors->get('stemail') as $error)
                        <div class="text-danger">{{$errors->first('stemail') }}</div>
                        @endforeach
                        @endif  
                        <input type="text"
                              class="form-control" name="stemail" id="" aria-describedby="helpId" placeholder="" value="{{ old('stemail', $site->stemail) }}">
                    </div>
                    <button type="submit" class="btn btn-success">Modifier</button>
           </form>
       
@stop