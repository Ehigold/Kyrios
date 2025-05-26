@props(['logo'])
@isset($logo)
    <img src="{{ $logo }}" alt="Logo" class="bg-cover max-h-[65px]" />
@else
    <img src="{{ asset('images/logo.png') }}" alt="Logo" height="52px" width="100px" />
@endisset
