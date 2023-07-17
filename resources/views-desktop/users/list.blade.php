<x-layouts.master meta-description="Dashboard meta description" title="{{ __('lg.users.users_list') }} | Doris APP">
    <x-slot name="additional_js_files">
        <script type="text/javascript" src="{{ asset('/static/js/connect.js?v='.time()) }}"></script>
        <link rel="stylesheet" href="{{ url('/static/css/users.css?v='.time()) }}">  
        
    </x-slot>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('/users/all')}}" class="text-gray-400 hover:text-[#00b2ee]"><i class="bi bi-pencil-square"></i> {{__('lg.users.users_list')}}</a>
        </li>
    </x-slot>
    <x-slot name="content">
        <div class="grid grid-cols-12 mt-8">
            <div class="col-span-12 md:col-span-3">
                
            </div>
            <div class="col-span-12 md:col-span-9">
                <div class="panel box-shadow bg-[#fff] rounded-md w-full p-4">
                    <div class="title block text-[#5e5873] text-[1.3em] p-4 w-full">
                        <h3><i class="bi bi-people text-[#00b2ee]"></i>&nbsp;{{__('lg.users.users_list')}}</h3>
                    </div>
                    <table class="table align-middle w-full">
                        <thead class="bg-[#f7f7f7] font-bold">
                            <tr>
                                <td>ID</td>
                                <td width="40"></td>
                                <td class="pl-4">{{ __('lg.users.name') }}</td>
                                <td>{{ __('lg.users.email') }}</td>
                                <td width="170"></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td><img class="h-9 w-9 rounded-full" src="{{asset('/static/images/default_user.png')}}" alt=""></td>
                                <td class="pl-4">{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <div class="table-options inline-block w-full">
                                        <a href="{{url('user/'.$user->id.'/view')}}" class="ctooltip content-icon bg-[#f8f8f8] inline-flex justify-center items-center w-9 h-9 rounded-full hover:bg-[#f0f0f0] relative">
                                            <span class="tool message">{{__('lg.users.user_view')}}</span>
                                            <i class="bi bi-person-badge"></i>
                                        </a>
                                        <a href="{{url('user/'.$user->id.'/edit')}}" class="ctooltip content-icon bg-[#f8f8f8] inline-flex justify-center items-center w-9 h-9 rounded-full hover:bg-[#f0f0f0] relative">
                                            <span class="tool message">{{__('lg.users.user_edit')}}</span>
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="{{url('user/'.$user->id.'/permissions')}}" class="ctooltip content-icon bg-[#f8f8f8] inline-flex justify-center items-center w-9 h-9 rounded-full hover:bg-[#f0f0f0] relative">
                                            <span class="tool message">{{__('lg.users.user_permissions')}}</span>
                                            <i class="bi bi-incognito"></i>
                                        </a>
                                        <a href="{{url('user/'.$user->id.'/delete')}}" class="ctooltip content-icon bg-[#f8f8f8] inline-flex justify-center items-center w-9 h-9 rounded-full hover:bg-[#f0f0f0] relative">
                                            <span class="tool message">{{__('lg.users.user_delete')}}</span>
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="5">{!! $users->links() !!}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <script type="text/javascript" src="{{ asset('/static/js/users.js?v='.time()) }}"></script>
    </x-slot>
</x-layouts.master>
