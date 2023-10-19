@php
    $id = \Str::random();
@endphp

<div class="proekty-image" data-bs-toggle="modal" data-bs-target="#modal-{{$id}}">
    <img src="{{asset($image ?? '')}}" alt="">
</div>

@push('modals')
    <div class="modal fade grid-image-content" id="modal-{{$id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content position-relative">
                <div class="position-absolute end-0 top-0 bg-white">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <x-pages.proekty.modal-image class="modal-image-content-img" :image="$image">
                    {{$slot}}
                </x-pages.proekty.modal-image>
            </div>
        </div>
    </div>
@endpush
