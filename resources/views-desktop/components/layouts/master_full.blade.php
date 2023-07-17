<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="routeName" content="{{ Route::currentRouteName() }}">
    <meta name="description" content="{{$metaDescription ?? 'Default meta description'}}">
    <link rel="shortcut icon" href="{{url('images/icon.ico')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ url('/static/css/connect.css?v='.time()) }}">  
    <title>{{ $title ?? '' }} - Doris APP </title>
    <script type="text/javascript" src="{{ url('/static/js/lang/'.config('doris.language').'.js?v='.time()) }}"></script>
    <script type="text/javascript" src="{{ url('/static/js/app.js?v='.time()) }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    @vite('resources/css/app.css')
</head>
<body class="[font-family: 'Open Sans', sans-serif;] m-0 p-0 bg-[#f8f8f8] text-sm">
<div class="block my-0 max-w-screen-sm w-[94%] mx-auto min-h-[120px] bg-white ">
    <div class="block w-full">
        <img src="{{ url('/static/images/email_header.png') }}" class="block w-full" alt="">
    </div>
    <div class="p-8">
        {{ $slot }}
    </div>
</div>  
{{-- <script>
    const myImage = document.querySelector("img");
    const myRequest = new Request('/static/images/email_header.png');
    fetch(myRequest)
    .then((response) => response.blob())
    .then((myBlob) => {
        const objectURL = URL.createObjectURL(myBlob);
        myImage.src = objectURL;
    });   
</script>   --}}
</body>
</html>