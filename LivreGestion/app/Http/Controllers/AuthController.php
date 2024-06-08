<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   public function register(){ 
    return view('Auth.register');
   }

   public function registerAdd(Request $request){

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->save();
    return back()->with('success', 'inscription effectuée avec succes');




   }

   public function login(){
    return view('Auth.login');
   }

   public function loginPost(Request $request){
    $credetails =[
        'email' => $request->email,
        'password' => $request->password,
    ];
    if(Auth::attempt($credetails)){
        return redirect('/liste')->with('success', 'Bienvenue');
    } 

    return back()->with('error', 'email ou mot de passe incorrect');
   }

   public function logout(){
    Auth::logout();
    return redirect('/login');
   }
}
