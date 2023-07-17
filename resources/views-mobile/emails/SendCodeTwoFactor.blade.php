<x-layouts.master_full>
    <h2>{{ __('lg.email.hi',['name'=> $name]) }}</h2>
    <h2 class="mt-4">{{ __('lg.email.text_1',['app_name'=> $app_name]) }}</h2>
    <p class="bg-[#f0f0f0] border border-[#f0f0f0] text-[#222] inline-block text-[26px] font-semibold m-0 py-4 px-8 mt-4">{{ $code }}</p>
    <h2 class="mt-4 text-[#999]">{{ __('lg.email.text_1') }}</h2>
</x-layouts.master_full>