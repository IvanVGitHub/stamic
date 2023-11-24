@php
$image = $image ?? asset('img/logo-light.webp');
@endphp

<div class="carousel-item {{($active ?? false) ? 'active' : ''}}">
    <img src="{{asset($image)}}" alt="Проект">
{{--    <div class="row">--}}
{{--        <div>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            {{$slot}}--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
