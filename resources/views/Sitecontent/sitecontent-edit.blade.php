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
                  <input type="text"
                    class="form-control" name="titrecarousel" id="" aria-describedby="helpId" placeholder="" >  
                </div>
                <div class="form-group">
                  <label for="">Titre Video</label>
                  <input type="text"
                    class="form-control" name="titrevideo" id="" aria-describedby="helpId" placeholder="" >
                </div>
                <div class="form-group">
                  <label for="">Texte Video gauche</label>
                  <input type="text"
                    class="form-control" name="textupvideo" id="" aria-describedby="helpId" placeholder="" >
                </div>
                <div class="form-group">
                    <label for="">Texte Video droite</label>
                    <input type="text"
                        class="form-control" name="textupvideo2" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Lien de la video</label>
                    <input type="text"
                        class="form-control" name="lienvideo" id="" aria-describedby="helpId" placeholder="" >
                </div>
                <div class="form-group">
                    <label for="">Titre des testimoniaux</label>
                    <input type="text"
                        class="form-control" name="titretestimonial" id="" aria-describedby="helpId" placeholder="" >
                    </div>
                    <div class="form-group">
                        <label for="">Titre Service</label>
                        <input type="text"
                          class="form-control" name="titreservice" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Titre Team</label>
                        <input type="text"
                            class="form-control" name="titreteam" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Titre Promotion</label>
                        <input type="text"
                            class="form-control" name="titrepromotion" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Sous-Titre Promotion</label>
                        <input type="text"
                            class="form-control" name="stpromotion" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="">Titre Contact</label>
                      <input type="text"
                        class="form-control" name="titrecontact" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Sous-titre Contact</label>
                        <input type="text"
                              class="form-control" name="stcontact" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Titre Adresse</label>
                        <input type="text"
                            class="form-control" name="titreadresse" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Sous-titre Adresse</label>
                        <input type="text"
                            class="form-control" name="stadresse" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Sous-titre Ville</label>
                        <input type="text"
                            class="form-control" name="stville" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Sous-titre numero</label>
                        <input type="text"
                            class="form-control" name="stnumero" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Sous-titre email</label>
                        <input type="text"
                              class="form-control" name="stemail" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-success">Modifier</button>
           </form>
       
@stop