<!DOCTYPE html>
<html lang="en">
    <head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>"> --}}
    <link href="{{ url('/static/css/alert.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>MD - ALERT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .md_alert_animation_show{
            animation-timing-function: ease-in-out;
            animation: alert_show 0.5s forwards;
        }
        .md_alert_animation_hide{
            animation-timing-function: ease-in-out;
            animation: alert_hide 0.5s forwards;
        }
        .scale_animation{
            animation: scale 0.3s forwards;
            transition: all 0.6s ease-in-out;
        }
        @keyframes alert_show{
            0%{
                opacity: 0;
            }
            100%{
                opacity: 1;
            }
        }
        @keyframes alert_hide{
            0%{
                opacity: 1;
            }
            100%{
                opacity: 0;
            }
        }
        @keyframes scale{
            0%{
                transform: scale(0.9);
            }
            100%{
                transform: scale(1);                
            }
        }
    </style>
    {{-- @vite('resources/css/app.css') --}}
</head>
<body>
    <div class="md_alert flex items-center justify-center h-screen fixed w-full z-50 bg-black/60 hidden" id="md_alert_dom">
        <div class="md_alert_inside bg-white rounded-lg w-5/6 sm:w-3/6 lg:w-2/6 " id="md_alert_inside">
            <div class="md_alert_content text-[#333] box-border p-6 w-full overflow-hidden" id="md_alert_content"></div>
            <div class="md_alert_footer block w-full" id="md_alert_footer"> 
                <div class="md_alert_footer_other_btns" id="md_alert_footer_other_btns"></div>
                <a class="md_alert_btn_close border-t-2 border-[#f0f0f0] text-[#323742] w-full block no-underline font-bold p-4 text-center" id="md_alert_btn_close" href="#">CERRAR</a>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="grid grid-cols-12 grid-rows-1">
            <div class="col-span-12 md:col-span-2"><a href="#" id="only_show" class="px-4 py-2 bg-blue-500 text-white hover:bg-blue-800 rounded-md block text-center w-full">Mostrar</a></div>
            <div class="col-span-12 md:col-span-2"><a href="#" id="alert_with_actions" class="px-4 py-2 bg-blue-500 text-white hover:bg-blue-800 rounded-md block text-center w-full">Acciones</a></div>
            <div class="col-span-12 md:col-span-2"><a href="#" id="alert_confirm" class="px-4 py-2 bg-blue-500 text-white hover:bg-blue-800 rounded-md block text-center w-full">Eliminar</a></div>
            <div class="col-span-12 md:col-span-2"><a href="#" id="alert_callback" class="px-4 py-2 bg-blue-500 text-white hover:bg-blue-800 rounded-md block text-center w-full">Callback</a></div>
            <div class="col-span-12 md:col-span-2"><a href="#" id="alert_no_close" class="px-4 py-2 bg-blue-500 text-white hover:bg-blue-800 rounded-md block text-center w-full">No Cerrar</a></div>
        </div>
    </div>
    
    <script src="{{ url('/static/js/alertmd.js') }}"></script>
    <script src="{{ url('/static/js/examples.js') }}"></script>
    
    {{-- @vite('resources/css/app.css') --}}
</body>
</html>