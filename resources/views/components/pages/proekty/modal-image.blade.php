@php
$image = $image ?? asset('img/logo-light.webp');
@endphp

<div class="carousel-item {{($active ?? false) ? 'active' : ''}}">
    <div class="row">
        <div class="col-lg-6 col-xl-8">
            <img src="{{asset($image)}}" alt="">
        </div>
        <div class="col-lg-6 col-xl-4">
            {{$slot}}
        </div>
    </div>
</div>
