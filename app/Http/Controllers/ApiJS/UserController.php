<?php

namespace App\Http\Controllers\ApiJS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('two.factor');
    }
    public function postUserUpdate(Request $request){
        $autocomplete = $request->input('autocomplete');
        $rules = [
            'name_'.$autocomplete => 'required|min:8'
        ];
        $messages = [
            'name_'.$autocomplete.'.required' => __('lg.users.v_name_required'),
            'name_'.$autocomplete.'.min' => __('lg.users.v_name_min')
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()):
            $data = ['type'=>'error','title'=> __('lg.general.error'), 'msg'=> __('lg.general.error_validation'),'msgs'=>json_encode($validator->errors()->all())];
            return $data;
        else:
            $id = $request->input('id');
            $user = User::findOrFail($id);
            $user->status = $request->input('status');
            $user->role = $request->input('role');
            $user->name = e($request->input('name_'.$autocomplete));
            if((int)$request->input('role') === 0){
                $user->permissions = null;
            }
            if($user->save()):
                $data = ['type'=>'success','title'=> config('doris.app_name'), 'msg'=> __('lg.users.v_user_update_success'),'msgs'=>json_encode($validator->errors()->all())];
                return $data;
            else:
            endif;
        endif;
    }
}
