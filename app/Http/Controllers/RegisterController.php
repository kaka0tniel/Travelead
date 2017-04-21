<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;

use App\User;
class RegisterController extends Controller
{

  public function __construct()
  {
    $this->middleware('guest');
  }

    public function getRegister()
    {
      return view('Register.formRegister');
    }

    public function postRegister()
    {
      $user = new User();
      $user->username = Input::get('username');
      $user->name = Input::get('nama');
      $user->email = Input::get('email');
      $user->password = bcrypt(Input::get('password'));
      $user->roles_id =2;

      $user->save();
      return redirect(url('login'))->with('alert-success','Data Hasbeen Saved!');
    }
}
