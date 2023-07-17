<x-layouts.master meta-description="Dashboard meta description" title="{{ __('lg.general.dashboard') }} | Doris APP">
    <x-slot name="additional_js_files">
        <script type="text/javascript" src="{{ asset('/static/js/connect.js?v='.time()) }}"></script>
    </x-slot>
    <x-slot name="breadcrumb">
    </x-slot>
    <x-slot name="content">
        <div class="panel panel-stats box-shadow bg-[#fff] rounded-md w-full mt-6">
            <div class="inside p-3">
                <div class="stat block overflow-hidden w-full">
                    <div class="icon block w-12 float-left">
                        <img class="block w-full" src="{{ asset('static/images/icon/welcome.png') }}" alt="">
                    </div>
                    <div class="info block ml-3 float-left">
                        <span class="title block w-full text-[#222222] leading-[1.1em] font-bold text-2xl">{{ __('lg.dashboard.welcome_to',['app_name'=>config('doris.app_name')]) }}</span>
                        <span class="subtitle block w-full text-[#626262] text-[1em]">{{  __('lg.dashboard.welcome_text') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layouts.master>
