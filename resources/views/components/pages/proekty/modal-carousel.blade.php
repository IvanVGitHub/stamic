@php
$id="r-".\Str::random();
@endphp

<div class="row w-100 flex-grow-1">
    <div class="col-lg-9 carousel-content-block">
        <div id="{{$id}}" class="carousel-image-content-block carousel carousel-dark slide carousel-fade"
             keyboard="true"
             data-bs-keyboard="true"
             touch="true"
             data-bs-touch="true">
            <button class="carousel-control-prev" type="button" data-bs-target="#{{$id}}" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset($image ?? '')}}" alt="">
                </div>
                {{$slot}}
            </div>
            <button class="carousel-control-next" type="button" data-bs-target="#{{$id}}" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>
    <div class="col-lg-3 carousel-image-content-description flex-grow-1">
        {{$description}}
    </div>
</div>
