<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1.0, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="routeName" content="{{ Route::currentRouteName() }}">
        <meta name="description" content="{{$metaDescription ?? 'Default meta description'}}">
        <link rel="shortcut icon" href="{{url('images/icon.ico')}}" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{ url('/static/css/connect.css?v='.time()) }}">  
        <title>{{ $title ?? '' }} - Doris APP </title>
        <script type="text/javascript" src="{{ url('/static/js/lang/'.config('doris.language').'.js?v='.time()) }}"></script>
        <script type="text/javascript" src="{{ url('/static/js/app.js?v='.time()) }}"></script>
        {{ $additional_js_files }}
        <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-slate-200">
        <x-layouts.navigation/>
        {{$slot}}

    </body>
</html>
