@extends('layouts.app')

@section('header-title')
    Наши формы
@endsection

@section('content')
<div class="tech-bg-oliva w-100 py-px-25">
    <x-pages.uslugi.wide-oliva-block />
</div>
<div class="tech-bg-white w-100">
    <x-pages.uslugi.forms-for-vacuum />
    <x-pages.uslugi.forms-for-melters />
    <x-pages.uslugi.forms-for-silicone />
    <x-pages.uslugi.matrixes />
    <x-pages.uslugi.prototypes />
    <x-pages.uslugi.example-of-work />
    <x-pages.uslugi.contact-form />
</div>
@endsection


@section('meta-description')
    Компания Стамик - это разработка и производство пресс-форм, прототипов, мастер моделей.
    Для литья и вакуумной формовки.
@endsection

@section('meta-keywords')
    сканирование объектов, 3D-сканирование
@endsection
