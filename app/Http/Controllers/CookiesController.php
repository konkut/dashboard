<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CookiesController extends Controller
{
    public function setCookie(){
        if(!request()->hasCookie('cookie_consent')){
            $response = response('Inicio agregar cookie');
            $response->withCookie('cookie_consent', Str::uuid(),1);
            return $response;
        }
        return response('Inicio');
    }
    public function getCookie(){
        return request()->cookie('cookie_consent');
    }
    public function delCookie(){
        return response("deleted")->cookie('cookie_consent',null,-1);
    }
}
