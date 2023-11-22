@extends('layouts.app')

@section('header-title')
    Наши технологии
@endsection

@section('content')
    <div class="wide-bg-oliva w-100 py-px-25">
        <x-pages.tehnologii.wide-oliva-block-top/>
    </div>
    <div class="wide-bg-white w-100 pb-px-80">
        <div class="pt-px-50">
            <x-pages.tehnologii.3d-modeling/>
        </div>
        <div class="pt-px-50">
            <x-pages.tehnologii.3d-printing/>
        </div>
        <div class="pt-px-50 overflow-hidden">
            <x-pages.tehnologii.3d-scaning/>
        </div>
        <div class="pt-px-50">
            <x-pages.tehnologii.milling/>
        </div>
        <div class="pt-px-50">
            <x-pages.tehnologii.injection-molding/>
        </div>
        <div class="pt-px-50">
            <x-pages.tehnologii.vacuum-forming/>
        </div>
    </div>
    <div class="wide-bg-oliva w-100 py-px-25">
        <x-pages.tehnologii.wide-oliva-block-bottom/>
    </div>
    <x-pages.tehnologii.contact-form/>
    <x-pages.tehnologii.under-contact-form/>
@endsection

@section('meta-description')
    Компания Стамик - это разработка и производство пресс-форм, прототипов, мастер моделей.
    Для литья и вакуумной формовки.
@endsection

@section('meta-keywords')
    сканирование объектов, 3D-сканирование
@endsection
