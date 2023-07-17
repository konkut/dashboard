<?php
function user_roles($id = null){
    $users = ['0'=>__('lg.users.user'),'1'=>__('lg.users.admin')];
    if(!is_null($id)): return $users[$id];
    else: return $users;
    endif;
}
function user_roles_plurals($id = null){
    $users = ['0'=>__('lg.users.users'),'1'=>__('lg.users.admins')];
    if(!is_null($id)): return $users[$id];
    else: return $users;
    endif;
}
function user_status($id = null){
    
    $users = ['0'=>__('lg.users.user_status_0'),'1'=>__('lg.users.user_status_1'),'100'=>__('lg.users.user_status_100')];
    if(!is_null($id)): return $users[$id];
    else: return $users;
    endif;
}

/*if (! function_exists('current_user')) {
    function current_user()
    {
        return auth()->user();
    }
}*/
