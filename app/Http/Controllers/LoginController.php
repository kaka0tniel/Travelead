<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest');
    }

    public function getLogin()
    {
        return view('login.formLogin');
    }

    public function postLogin(Request $request)
    {
        if(Auth::attempt([
          'email'=>$request->EmailUsername,
          'password'=> $request->password,
          'roles_id'=>1
        ])){
          return redirect ('/ticket');
        }elseif(Auth::attempt([
          'username'=>$request->EmailUsername,
          'password'=> $request->password,
          'roles_id'=>1
        ])){
          return redirect('/ticket');
        }elseif(Auth::attempt([
          'email'=>$request->EmailUsername,
          'password'=> $request->password,
          'roles_id'=>2
        ])){
          return redirect ('/');
        }elseif(Auth::attempt([
          'username'=>$request->EmailUsername,
          'password'=> $request->password,
          'roles_id'=>2
        ])){
          return redirect('/');
        }else{
          return redirect('login');
        }
    }
}
