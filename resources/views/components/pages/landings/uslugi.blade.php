@extends('layouts.app')

@section('header-title')
    Наши формы
@endsection

@section('content')
    <div class="wide-bg-oliva w-100 py-px-25">
        <x-pages.uslugi.wide-oliva-block-top/>
    </div>
    <div class="wide-bg-white w-100">
        <div class="pt-px-50">
            <x-pages.uslugi.forms-for-vacuum/>
        </div>
        <div class="pt-px-50">
            <x-pages.uslugi.forms-for-melters/>
        </div>
        <div class="pt-px-50">
            <x-pages.uslugi.forms-for-silicone/>
        </div>
        <div class="pt-px-50">
            <x-pages.uslugi.matrixes/>
        </div>
        <div class="pt-px-50">
            <x-pages.uslugi.prototypes/>
        </div>
        <div class="pt-px-50">
            <x-pages.uslugi.example-of-work/>
        </div>
        <div class="mt-px-50">
            <x-pages.uslugi.contact-form/>
        </div>
        <x-pages.uslugi.under-contact-form/>
    </div>
@endsection


@section('meta-description')
    Компания Стамик - это разработка и производство пресс-форм, прототипов, мастер моделей.
    Для литья и вакуумной формовки.
@endsection

@section('meta-keywords')
    сканирование объектов, 3D-сканирование
@endsection
