<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profil;
use Storage;
use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;


class UserController extends Controller
{
    public function index()
    {
        $alluser=User::all();
        return view('User.user',compact('alluser'));
    }
    public function create()
    {
       return view('User.user-create'); 
    }
    public function store(StoreUser $request){

        $newuser = new User;
        $newuser->email = $request->email;
        $newuser->password = $request->password;
        $newuser->save();
        $np = new Profil;
        $np->image = $request->image->store('','image');
        $np->nom = $request->nom;
        $np->prenom = $request->prenom;
        $np->user_id = $newuser->id;
        $np->save();
        return view('home');

        
    }
    public function show($id){
        $user=user::where('id',$id)->first();
        dd($user);
        return view ('User.user-show',compact('user'));
    }
    public function edit($id){
        $user=user::where('id', $id)->first();
        $profil=profil::where('id', $id)->first();
        $profil=Profil::all();
        return view ('User.user-edit',compact('user','profil'));
    }
    public function update( UpdateUser $request, $id){
        $alluser = User::find($id);
        //$user = new User;
         $alluser->name=$request->name;
         $alluser->prenom=$request->prenom;
         $alluser->email=$request->email;
         $alluser->save();
         $alluser = User::all();
 
         return view('home',compact('alluser'));
    }
    public function destroy($alluser){
        $alluser=User::find($alluser);
        $alluser->delete();
        return redirect()->back();
    }
}
