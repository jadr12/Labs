<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use App\Http\Requests\StoreUser;

class StoreUser extends FormRequest
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
            'email'=>'required|email|unique:users,email,'.$id.'id',
            'password'=>'required|max:15|min:5',
            'image'=>'required',
            'nom'=>'required',
            'prenom'=>'required',


        ];
    }
    public  function  messages(){

        return[

            'email.required' => 'Veuillez entrer un e-mail',
            'email.unique'=>'Ce Mail existe déjà',
            'password.required'=>'Veuillez entrer un mot de passe',
            'password.max'=>'Veuillez entrer maximum 15 caractères',
            'password.min'=>'Veuillez entrer minimum 5 caracteres',
            'image.required'=>'Veuillez inclure une pièce jointe',
            'prenom.required'=>'Veuillez entrer un prénom',
            'nom.required'=>'Veuillez entrer un nom',
            

        ];
    }

}
