<div class="sidebar w-[270px] bg-white p-4 shadow-lg">
    <div class="logo block w-full mt-4">
        <img src="{{ url('/static/images/logo.png') }}" class="mx-auto my-0 w-3/5" alt="{{ config('app_name') }}">
    </div>
    <ul class="m-0 p-0 mt-8 list-none">
        <li class="block mb-0.5 relative w-full">
            <a href="{{ url('/') }}" class="box-border hover:bg-[#23282e] hover:shadow-lg block w-full text-[#626262] hover:text-white decoration-0 py-3 px-3 text-[1.1em]">
                <i class="bi bi-house mr-2"></i>
                <span>{{ __('lg.sidebar.dashboard') }}</span>
            </a>
            <ul class="m-0 p-0 list-none hover:block [min-width: 200px;] absolute top-0 left-[98%] z-50">
                <li class="block mb-0 w-full">
                   <a href="{{ url('/') }}" class="box-border border-bg-[#23282e] hover:bg-[#00b2ee] block w-full text-[#fff] hover:text-white decoration-0 py-3 px-3 text-[1.1em]">
                       <i class="bi bi-house mr-2"></i>
                       <span>{{ __('lg.sidebar.dashboard') }}</span>
                   </a>
                </li> 
            </ul>
        </li>
    </ul>
</div>