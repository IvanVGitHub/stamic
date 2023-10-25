@extends('layouts.app')

@section('header-title')
    Наши технологии
@endsection

@section('content')
    <div class="wide-bg-oliva w-100 py-px-25">
        <x-pages.tehnologii.wide-oliva-block />
    </div>
    <div class="wide-bg-white w-100">
        <x-pages.tehnologii.3d-modeling />
        <x-pages.tehnologii.3d-printing />
    </div>
@endsection

@section('meta-description')
    Компания Стамик - это разработка и производство пресс-форм, прототипов, мастер моделей.
    Для литья и вакуумной формовки.
@endsection

@section('meta-keywords')
    сканирование объектов, 3D-сканирование
@endsection
