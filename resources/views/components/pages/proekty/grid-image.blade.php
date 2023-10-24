@php
    $id = \Str::random();
@endphp

<div class="proekty-grid-image" data-bs-toggle="modal" data-bs-target="#modal-{{$id}}">
    <img src="{{asset($image ?? '')}}" alt="">
    <div class="proekty-grid-image-text">
        {{$name ?? ''}}
    </div>
</div>

@push('modals')
    <div class="modal fade" id="modal-{{$id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen grid-image-block">
            <div class="modal-content grid-image-block-content">
                <div class="w-100 d-flex justify-content-end bg-white">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="d-flex flex-grow-1">
                    <x-pages.proekty.modal-carousel class="" :image="$image" :description="$description ?? ''">
                        {{$slot}}
                    </x-pages.proekty.modal-carousel>
                </div>
            </div>
        </div>
    </div>
@endpush
