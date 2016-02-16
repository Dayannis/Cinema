<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use Cinema\Http\Requests;
use Cinema\Http\Requests\LoginRequest;
use Cinema\Http\Controllers\Controller;

class LogController extends Controller
{


    public function index()
    {
        return Redirect::route('principal');
    }
      
    public function store(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request['email'],'password' => $request ['password']]))
        {
            return Redirect::to('usuario'); 
        }
        Session::flash('message-error','Datos incorrectos');
        return Redirect::route('principal');
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::route('principal');  
    }
}
