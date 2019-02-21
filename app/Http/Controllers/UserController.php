<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


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
    public function store(Request $request){

        $newuser = new User;
        $newuser ->name = $request->name;
        $newuser->prenom =$request->prenom;
        $newuser->email = $request->email;
        $newuser->password = $request->password;
        
        $newuser->save();
        return view('home');

        
    }
    public function show($id){
        $user=user::where('id',$id)->first();
        return view ('User.user-show',compact('user'));
    }
    public function edit($id){
        $user=user::where('id', $id)->first();
        return view ('User.user-edit',compact('user'));
    }
    public function update( Request $request, $id){
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
