@extends('layouts.master')
@section('master_content')


<main class="main" id="main">
    <x-layout.header/>

    <div class="flex-grow-1">
        @yield('content')
    </div>

    <x-layout.footer/>
</main>

@endsection

@push("custom_styles")

@endpush
