<x-layouts.app
    title="{{ __('lg.connect.login') }} | Doris APP"
    meta-description="Login meta description"
>
    <x-slot name="additional_js_files">
        <script type="text/javascript" src="{{ url('/static/js/connect.js?v='.time()) }}"></script>
    </x-slot>
    <x-component.loader_action/>
    <x-component.md_alert/>
    <div class="wrapper">
        <div class="css-page flex justify-center h-screen w-full text-center box-border">
            <div class="h-fit my-auto bg-transparent p-8 w-full border-none rounded-md">
                <div class="block w-full">
                    <img class="block my-0 mx-auto w-3/5" src="{{url('/static/images/logo-white.png')}}" alt="{{config('cms.app_name')}}">
                </div>
                <h2 class="color-[2c2c2c] block font-medium m-0 p-0 mt-4 text-center text-[1.5em] text-white">{{__('lg.connect.login')}}</h2>
                
                <div class="mt-4">
                    {!! Form::open(['url'=>'/','id'=>'form_connect_login','autocomplete'=>'off'])!!}
                    {!!Form::hidden('autocomplete',null,['class'=>'autocomplete'])!!}
                    <label class="block mt-4 text-start text-white" for="email">{{__('lg.connect.email')}}:</label>
                    <div class="relative w-full mt-1">
                        <i class="bi bi-envelope-open absolute top-1.5 left-2 color-[2c2c2c] text-[1.4em] z-10"></i>
                        {!!Form::email('email',null,['class'=>'disable_autocomplete block w-full rounded-sm border-0 box-border p-2 pl-[34px] focus:outline-none'])!!}
                    </div>
                    <label class="block mt-4 text-start text-white" for="password">{{__('lg.connect.password')}}:</label>
                    <div class="relative w-full mt-1">
                        <i class="bi bi-fingerprint absolute top-1.5 left-2 color-[2c2c2c] text-[1.4em] z-10"></i>
                        {!!Form::password('password',['class'=>'disable_autocomplete block w-full rounded-sm border-0 box-border p-2 pl-[34px] focus:outline-none','id'=>'input_password'])!!}
                    </div>
                    <a href="#" class="show_password inline-block float-right m-1 text-white hover:text-[#ddd]" data-state="hide" data-target="input_password">{{ __('lg.connect.show_password') }}</a>
                    {!!Form::submit(__('lg.connect.connect'),['class'=>'block border-0 hover:bg-white hover:text-[#00b2ee] p-2 rounded-sm bg-[#f7cd4c] text-[#222] w-full mt-4 font-bold text-[1.2em] transition duration-300 ease-in-out'])!!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="{{ url('/static/js/md_alert.js') }}"></script>
</x-layouts.app>