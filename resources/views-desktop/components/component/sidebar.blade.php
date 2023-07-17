<div class="sidebar box-border float-left w-[250px] h-screen bg-white p-4 box-shadow">
    <div class="logo block w-full mt-4">
        <img src="{{ url('/static/images/logo.png') }}" class="mx-auto my-0 w-3/5" alt="{{ config('app_name') }}">
    </div>
    <ul class="m-0 p-0 mt-8 list-none">
        <li class="block mb-0.5 relative w-full">
            <a href="{{ route('dashboard') }}" class="page_dashboard box-border hover:bg-[#23282e] hover:shadow-lg block w-full text-[#626262] hover:text-white decoration-0 py-3 px-3 text-[1.1em]">
                <i class="bi bi-house mr-2"></i>
                <span>{{ __('lg.sidebar.dashboard') }}</span>
            </a>
        </li>
        <li class="list-parent block mb-0.5 relative w-full">
            <a href="{{ url('users/all') }}" class="page_users_list page_user_edit box-border hover:bg-[#23282e] hover:shadow-lg block w-full text-[#626262] hover:text-white decoration-0 py-3 px-3 text-[1.1em]">
                <i class="bi bi-people mr-2"></i>
                <span>{{ __('lg.sidebar.users_list') }}</span>
            </a>
            <ul class="list-child m-0 p-0 list-none [min-width: 200px;] absolute top-0 left-[98%] z-50 hidden">
                @foreach(user_roles_plurals() as $key => $user_role)
                <li class="block mb-0 w-full">
                   <a href="{{ url('users/'.$key) }}" class="flex box-border bg-[#23282e] hover:bg-[#00b2ee] w-full text-[#fff] hover:text-white decoration-0 py-3 px-3 text-[1.1em]">
                       <i class="bi bi-people mr-2"></i>
                       <span>{{ $user_role }}</span>
                   </a>
                </li> 
                @endforeach
            </ul>
        </li>  
        <li class="list-parent block mb-0.5 relative w-full">
            <a href="{{ route('settings') }}" class="page_settings box-border hover:bg-[#23282e] hover:shadow-lg block w-full text-[#626262] hover:text-white decoration-0 py-3 px-3 text-[1.1em]">
                <i class="bi bi-gear mr-2"></i>
                <span>{{ __('lg.sidebar.settings') }}</span>
            </a>
        </li>  
    </ul>
</div>