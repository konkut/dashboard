<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnectController extends Controller
{
    public function __construct(){
        //LE DECIMOS QUE A ESTE CONTROLADOR SOLO PUEDEN INGRESAR USUARIOS QUE NO ESTEN CONECTADOS O CON INICIO DE SESION
        $this->middleware('guest')->except(['getLogout']);
    }

    public function getLogin()
    {
        return view('connect.login');
    }
    public function getLogout()
    {
        $response = to_route('login');
        Auth::logout();
        $response->cookie('doris_device_trusted',null,-1);
        return $response;
    }
}
