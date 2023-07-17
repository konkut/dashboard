<x-layouts.app
meta-description="Login meta description"
title="{{ __('lg.connect.twofactor') }} | Doris APP"
>
    <x-slot name="additional_js_files">
        <script type="text/javascript" src="{{ url('/static/js/connect.js?v='.time()) }}"></script>
    </x-slot>
    <x-component.loader_action/>
    <x-component.md_alert/>
    
    <div class="wrapper">
        <div class="css-page flex justify-center h-screen w-full text-center box-border">
            <div class="h-fit my-auto bg-transparent p-10 w-[480px] rounded-lg">
                <div class="block w-full">
                    <img class="block my-0 mx-auto w-1/2" src="{{url('/static/images/logo-white.png')}}" alt="{{config('cms.app_name')}}">
                </div>
                <h2 class="text-white block font-medium m-0 p-0 mt-4 text-center text-[1.3em]">{{__('lg.connect.twofactor')}}</h2>
                <div class="mt-4">
                    {!! Form::open(['url'=>'/','id'=>'form_connect_two_auth','autocomplete'=>'off'])!!}
                    {!!Form::hidden('autocomplete',null,['class'=>'autocomplete'])!!}
                    <label class="block mt-4 text-start text-white" for="code">{{__('lg.connect.code')}}:</label>
                    <div class="relative w-full mt-1">
                        <i class="bi bi-envelope-open absolute top-1.5 left-2 color-[2c2c2c] text-[1.4em] z-10"></i>
                        {!!Form::number('code',null,['class'=>'disable_autocomplete block w-full rounded-sm border border-[#cccccc] box-border p-2 pl-9 focus:outline-none focus:border-[#00b2ee]'])!!}
                    </div>
                    {!!Form::submit(__('lg.connect.connect'),['class'=>'block border-0 hover:bg-white hover:text-[#00b2ee] p-2 rounded-sm bg-[#f7cd4c] text-[#222] w-full mt-4 font-bold text-[1.2em] transition duration-300 ease-in-out'])!!}
                    {!! Form::close() !!}
                    <hr class="h-px bg-[#f0f0f0] border-0 my-0 p-0 mt-4">
                    <p class="text-[0.8em] font-light text-[#000] leading-[1.14em] mt-4">{{__('lg.connect.code_text_1')}}</p>
                    <hr class="h-px bg-[#f0f0f0] border-0 my-0 p-0 mt-4">
                    <a href="{{ url('/connect/two/factor') }}" class="text-[#ddd] p-1 hover:text-[#fff ] font-bold flex justify-center box-border m-0 p-0 mt-1">{{__('lg.connect.code_text_2')}}</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="{{ url('/static/js/md_alert.js') }}"></script>
</x-layouts.app>