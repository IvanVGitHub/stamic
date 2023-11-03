@extends('layouts.master')
@section('master_content')


<main class="main" id="main">
    <x-layout.header class="mb-px-200"/>

    <div class="flex-grow-1 content">
        @yield('content')
    </div>

    <x-layout.footer/>
</main>

@endsection

@push("custom_styles")

@endpush
