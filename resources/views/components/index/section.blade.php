@php
    if(!isset($id) || !$id)
        $id = \Str::random();
    $animated = $animated ?? true;
    $hideHeaderOnMobile = $hideHeaderOnMobile ?? false;
@endphp

<div class="section {{$class ?? ''}} {{($light ?? false) ? "content-light" : ''}}" id="{{$id}}">
    <div class="section-content {{($container ?? true) ? 'container-xxl container-fluid ' : ''}} {{$contentClass ?? ''}}">
        <div>
            {{$slot}}
        </div>
    </div>
</div>

@if($animated)
    @push('custom_scripts')
        <script>
            registerForAnimation('{{$id}}', [
                {id:'{{$id}}-header', delay: 0},
            ], false);
        </script>
    @endpush
@endif
