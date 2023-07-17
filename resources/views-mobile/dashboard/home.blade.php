<x-layouts.master
meta-description="Home meta description"
title="{{ __('lg.connect.home') }} | Doris APP"
>
    <x-slot name="additional_js_files">
        <script type="text/javascript" src="{{ url('/static/js/connect.js?v='.time()) }}"></script>
    </x-slot>
    <x-component.loader_action/>
    <x-component.md_alert/>

    <x-component.sidebar/>
    <div class="content h-screen float-left [max-height: 100vh;]">
        <div class="wrapper overflow-hidden w-full h-screen [max-height: 100vh;]">
            
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="{{ url('/static/js/md_alert.js') }}"></script>
</x-layouts.master>