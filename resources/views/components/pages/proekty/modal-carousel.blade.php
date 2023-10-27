@php
$id="r-".\Str::random();
@endphp

<div id="{{$id}}" class="carousel-image-content-block carousel carousel-dark slide carousel-fade flex-grow-1 align-items-center d-flex"
     keyboard="true"
     data-bs-keyboard="true"
     touch="true"
     data-bs-touch="true">
    <div class="carousel-image-content align-items-start">
        <div class="d-flex align-items-center">
            <button class="carousel-control-prev" type="button" data-bs-target="#{{$id}}"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset($image ?? '')}}" alt="">
                </div>
                {{$slot}}
            </div>
            <button class="carousel-control-next" type="button" data-bs-target="#{{$id}}"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>

        <div class="carousel-image-content-description flex-grow-1">
            {{$description}}
        </div>
    </div>
</div>
