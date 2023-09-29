@extends('layouts.master')
@section('master_content')

<main class="main adm" id="main">
    <div class="adm-layout">
        <x-adm.nav.side-menu />
        <div class="adm-content">

            <x-adm.nav.header />
            <div class="p-2">
                @yield('filters')
            </div>
            <div class="p-2">
                @yield('content')
            </div>
        </div>
    </div>
</main>
@endsection
