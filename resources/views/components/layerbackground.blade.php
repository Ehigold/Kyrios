@props(['layer'])
@isset($layer)
<img src="{{ $layer }}" alt="Layer" height="400px" width="100px"/>
@else
<img src="{{ asset('images/layer.png') }}" alt="Layer" height="400px" width="100px"/>

@endisset

