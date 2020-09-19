<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    //
    public function getLogin()
    {
    	return view('login.index');
    }

     public function postLogin(Request $request)
    {
    	 $this->validate($request,[
           'username' => 'required',
           'password' => 'required'
        ]);

    	

    	if(!auth()->attempt(['username' => $request->username, 'password' => $request->password]))
    	{
    		return redirect()->route('login')->with('error','Username atau Password Salah');;
    	}

    	return redirect()->route('dasboard.index');
    }

    public function logout(){
    	auth()->logout();

    	return redirect()->route('login');
    }
}
