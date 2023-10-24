@php
$id="r-".\Str::random();
@endphp

<div id="{{$id}}" class="modal-image-content-block carousel carousel-dark slide carousel-fade flex-grow-1 align-items-center d-flex"
     data-bs-ride="carousel" interval=false>
    {{--<div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>--}}
    <div class="modal-image-content align-items-start">
        <div class="d-flex align-items-center">
            <div>
                <a class="carousel-control-prev" data-bs-target="#{{$id}}" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset($image ?? '')}}" alt="">
                </div>
                {{$slot}}
            </div>
            <div>
                <a class="carousel-control-next" data-bs-target="#{{$id}}" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>

        <div class="modal-image-content-description flex-grow-1">
            {{$description}}
        </div>
    </div>
</div>
