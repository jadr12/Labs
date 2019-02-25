<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUser extends FormRequest
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
        $id=$this->route('user');
        return [
            'email'=>'required|max:255|unique:users,email,'.$id.'id',
            'password'=>'required|max:15|min:5',
            'image'=>'required',
            'name'=>'required',
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
            'name.required'=>'Veuillez entrer un nom',
            

        ];
    }
}
