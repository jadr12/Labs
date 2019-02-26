<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSiteContent extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titrecarousel' => 'required',
            'titrevideo' => 'required',
            'textupvideo' => 'required',
            'textupvideo2' => ' required',
            'lienvideo' => 'required',
            'titretestimonial' => 'required',
            'titreservice' => 'required',
            'titreteam' => 'required',
            'titrepromotion' => 'required',
            'stpromotion' => 'required',
            'titrecontact' => 'required',
            'stcontact' => 'required',
            'titreadresse' => 'required',
            'stadresse' => 'required',
            'stville' => 'required',
            'stnumero' => 'required',
            'stemail' => 'required',

        ];
    }
    public function messages(){

        return[
            'titrecarousel.required' => 'Veuillez entrer un titre',
            'titrevideo.required' => 'Veuillez entrer un titre pour votre video',
            'textupvideo.required' => 'Veuillez entrer un text pour votre video',
            'textupvideo2.required'=> 'Veuillez entrer un 2eme titre pour votre video',
            'lienvideo.required' => 'Veuillez entrer un URL pour votre video',
            'titretestimonial.required' => 'Veuillez entrer un titre pour les testimoniaux',
            'titreservice.required'=>'Veuillez entrer un titre pour les services',
            'titreteam.required'=>'Veuillez entrer un titre pour votre équipe',
            'titrepromotion.required'=> 'Veuillez entrer un titre pour les promotion',
            'stpromotion.required' => 'Veuillez entrer un sous-titre pour les promotions',
            'titrecontact.required' => 'Veuillez entrer un titre pour les contacts',
            'stcontact.required' => 'Veuillez entrer un sous-titre pour les contacts',
            'titreadresse.required' => 'Veuillez entrer un titre adresse',
            'stadresse.required' => 'Veuillez entrer une adresse',
            'stville.required'=>'Veuillez entrer une ville',
            'stnumero.required'=>'Veuillez entrer un numero de porte',
            'stemail.required' => 'Veuillez entrer un email',
        ];
    }
}
