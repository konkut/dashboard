<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="routeName" content="{{ Route::currentRouteName() }}">
    <meta name="app_name" content="{{ config('doris.app_name') }}">
    <meta name="description" content="{{$metaDescription ?? 'Default meta description'}}">
    <link rel="shortcut icon" href="{{url('images/icon.ico')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ url('/static/css/sidebar.css?v='.time()) }}">  
    <link rel="stylesheet" href="{{ url('/static/css/home.css?v='.time()) }}">  
    <title>{{ $title ?? '' }} - Doris APP </title>
    <script type="text/javascript" src="{{ url('/static/js/lang/'.config('doris.language').'.js?v='.time()) }}"></script>
    <script type="text/javascript" src="{{ url('/static/js/app.js?v='.time()) }}"></script>
    {{ $additional_js_files }}
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    @vite('resources/css/app.css')
</head>
<body class="[font-family: 'Open Sans', sans-serif;] m-0 p-0 bg-[#f8f8f8] text-sm">
    <x-component.loader_action />
    <x-component.md_alert />
    <div class="wrapper w-full h-screen">
        <x-component.sidebar />
        <div class="content box-border float-left h-screen block p-6 m-0 z-40">
            {{-- first bar --}}
            <div class="panel box-shadow bg-slate-100 rounded-md w-full">
                <div class="grid grid-cols-1">
                    <div class="main-inline flex justify-end p-2">
                        <ul class="list-none sub_parent">
                            <li class="relative">
                                <a href="#" class="flex items-center decoration-0 overflow-hidden text-[#626262]">
                                    <img class="float-left w-8 h-8 mr-2"
                                        src="{{ asset('/static/images/default_user.png') }}" alt="">
                                    <span class="float-left mr-2">{{ Auth::user()->name }}</span>
                                </a>
                                <div
                                    class="sub bg-[#fff] text-[#00b2ee] shadow-lg absolute right-0 px-0 py-0 rounded-md hidden">
                                    <ul>
                                        <li
                                            class="border-b-2 border-[#ddd7] py-3 px-4 hover:bg-[#00b2ee] hover:text-[#fff] hover:rounded-t-md">
                                            <a href="{{ route('profile') }}" class="text-[1em] font-semibold ">
                                                <i class="bi bi-person-circle"></i>
                                                <span>{{ __('lg.general.profile') }}</span>
                                            </a>
                                        </li>
                                        <li class="py-3 px-4 hover:bg-[#00b2ee] hover:text-[#fff] hover:rounded-b-md">
                                            <a href="{{ route('logout') }}" class="text-[1em] font-semibold ">
                                                <i class="bi bi-box-arrow-right"></i>
                                                <span>{{ __('lg.general.logout') }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- breadcrumb --}}
            <div class="panel box-shadow bg-slate-100 rounded-md w-full mt-6">
                <div class="inside p-3">
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-3">
                            <li class="inline-flex items-center">
                                <a href="{{ route('dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-400 hover:text-[#00b2ee]">
                                    <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                    </svg>
                                    <span>{{ __('lg.sidebar.dashboard') }}</span>
                                </a>
                            </li>
                            {{ $breadcrumb }}
                        </ol>
                    </nav>
                </div>
            </div>

            {{ $content }}
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="{{ asset('/static/js/md_alert.js') }}"></script>
    <script type="text/javascript" src="{{ url('/static/js/sidebar.js?v='.time()) }}"></script>
</body>
</html>