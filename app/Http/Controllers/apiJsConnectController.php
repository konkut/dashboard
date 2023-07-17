<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SaveLoginRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class apiJsConnectController extends Controller
{
    public function postLogin(Request $request){
        $autocomplete = $request->input('autocomplete');
        $rules = [
            'email_'.$autocomplete =>'required|email',
            'password_'.$autocomplete =>'required|min:8',
        ];
        $messages = [
            'email_'.$autocomplete.'.required' => __('lg.connect.v_email_required'),
            'email_'.$autocomplete.'.email' => __('lg.connect.v_email_email'),
            'password_'.$autocomplete.'.required' => __('lg.connect.v_password_required'),
            'password_'.$autocomplete.'.min' => __('lg.connect.v_password_min'),
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()):
            $data = ['type'=>'error','title'=> __('lg.general.error'), 'msg'=> __('lg.general.error_validation'),'msgs'=>json_encode($validator->errors()->all())];
            // return response()->json($data);
            return $data;
        else:
            if(Auth::attempt(['email' => $request->input('email_'.$autocomplete), 'password' => $request->input('password_'.$autocomplete)])):  
                $data = ['type'=>'success'];
                return response($data)->cookie('doris_device_trusted',null,-1);
            else: 
                $data = ['type'=>'error','title'=> __('lg.general.error'), 'msg'=> __('lg.connect.connect_fail')];
                return $data;
            endif;
        endif;
        // return $request->all();
        // if($request->validated()): return;
        // else: return;
        // endif;
        // Login::create($request->validated());
        // return response()->json($data);

    }
    public function postAuthCode(Request $request){
        $autocomplete = $request->input('autocomplete');
        $rules = [
            'code_'.$autocomplete =>'required|min:6',
        ];
        $messages = [
            'code_'.$autocomplete.'.required' => __('lg.connect.v_code_required'),
            'code_'.$autocomplete.'.min' => __('lg.connect.v_code_min'),
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()):
            $data = ['type'=>'error','title'=> __('lg.general.error'), 'msg'=> __('lg.general.error_validation'),'msgs'=>json_encode($validator->errors()->all())];
            return $data;
        else:
            $user_code = Auth::user()->auth_code;
            if($user_code != $request->input('code_'.$autocomplete)):
                $data = ['type'=>'error','title'=> __('lg.general.error'), 'msg'=> __('lg.connect.v_code_if')];
                // return response()->json($data);
                return $data;
            else:
                $data = ['type'=>'success'];
                $user = User::find(Auth::user()->id);
                $user->auth_code = null;
                $user->save();
                return response($data)->withCookie(cookie('doris_device_trusted','1',env('SESSION_LIFETIME')));
                return $data;
            endif;
        endif;
    }
}
