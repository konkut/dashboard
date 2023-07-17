<x-layouts.master meta-description="Dashboard meta description" title="{{ __('lg.users.user_edit') }} | Doris APP">
    <x-slot name="additional_js_files">
        <script type="text/javascript" src="{{ asset('/static/js/connect.js?v='.time()) }}"></script>
        <link rel="stylesheet" href="{{ url('/static/css/users.css?v='.time()) }}">  
        
    </x-slot>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('/users/all')}}" class="text-gray-400 hover:text-[#00b2ee]"><i class="bi bi-people"></i> {{__('lg.users.users_list')}}</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{url('/user/'.$user->id.'/edit')}}" class="text-gray-400 hover:text-[#00b2ee]"><i class="bi bi-people"></i> {{__('lg.users.user_edit')}}</a>
        </li>
    </x-slot>
    <x-slot name="content">
        <div class="grid grid-cols-12 mt-8">
            <div class="col-span-12">
                <div class="panel box-shadow bg-[#fff] rounded-md w-full p-4">
                    <div class="title block text-[#5e5873] text-[1.3em] p-4 w-full">
                        <h3><i class="bi bi-people text-[#00b2ee]"></i>&nbsp; {{__('lg.users.user_edit')}}</h3>
                    </div>
                    <div class="inside p-4">
                        {!!Form::open(['url'=>'#', 'id'=>'form_user_edit'])!!}
                        {!!Form::hidden('autocomplete',null,['class'=>'autocomplete'])!!}
                        {!!Form::hidden('id',$user->id)!!}
                            <div class="grid grid-cols-12 gap-4">
                                <div class="col-span-12 md:col-span-4">
                                    <label for="user_status">{{__('lg.users.user_status')}}</label>
                                    <div class="group relative w-full">
                                        <div class="absolute z-10 h-full w-10 flex justify-center items-center">
                                            <i class="bi bi-list-ul color-[2c2c2c] text-[1em]"></i>
                                        </div>
                                        {!!Form::select('status', user_status(), $user->status, ['class'=>'form-select block w-full rounded-sm border border-[#cccccc] box-border p-2 pl-9 focus:outline-none focus:border-[#00b2ee] bg-slate-100/80'])!!}
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-4">
                                    <label for="name">{{__('lg.users.name')}}</label>
                                    <div class="group relative w-full">
                                        <div class="absolute z-10 h-full w-10 flex justify-center items-center">
                                            <i class="bi bi-textarea-t color-[2c2c2c] text-[1em]"></i>
                                        </div>
                                        {!!Form::text('name', $user->name, ['class'=>'disable_autocomplete block w-full rounded-sm border border-[#cccccc] box-border p-2 pl-9 focus:outline-none focus:border-[#00b2ee] bg-slate-100/80'])!!}
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-4">
                                    <label for="role">{{__('lg.users.role')}}</label>
                                    <div class="group relative w-full">
                                        <div class="absolute z-10 h-full w-10 flex justify-center items-center">
                                            <i class="bi bi-list-ul color-[2c2c2c] text-[1em]"></i>
                                        </div>
                                        {!!Form::select('role', user_roles(), $user->role, ['class'=>'block w-full rounded-sm border border-[#cccccc] box-border p-2 pl-9 focus:outline-none focus:border-[#00b2ee] bg-slate-100/80'])!!}
                                    </div>
                                </div>                                
                            </div>
                            <div class="grid grid-cols-12">
                                <div class="col-span-12 sm:col-span-5 md:col-span-4 lg:col-span-2 2xl:col-span-1">
                                    {!!Form::submit(__('lg.general.save'),['class'=>'inline-block bg-[#1ecc18] hover:bg-[#1e9918] p-2 rounded-2xl w-full mt-4 font-medium text-[1.2em] text-[#fff] transition duration-300 ease-in-out'])!!}
                                </div>
                            </div>
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>

        </div>
        <script type="text/javascript" src="{{ asset('/static/js/users.js?v='.time()) }}"></script>
    </x-slot>
</x-layouts.master>
