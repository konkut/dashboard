<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('two.factor');
    }
    
    public function getUsersList($type){
        if($type == 'all'):
            $users = User::orderBy('id','desc')->paginate(50);
        else:
            $users = User::where('role',$type)->orderBy('id','desc')->paginate(50);
        endif;
        $data = ['type'=>$type, 'users'=>$users];
        return view('users.list',$data);
    }
    public function getUserEdit($id){
        $user = User::findOrFail($id);
        $data = ['user'=>$user];
        return view('users.edit',$data);
    }
    
}
