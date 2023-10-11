@extends('layouts.app')

@section('header-title')
    Наши формы
@endsection

@section('content')
<div class="tech-bg-oliva w-100 py-px-25">
    <div class="wrapper-oliva">
        <div class="wide-block-description">
            Для изготовления деталей и товаров нужны Формы. Будь это вакуумная формовка формочки для мыла или силиконовая форма для выпечки.
            <br>
            Для каждого случая есть своя форма. Мы изготовляем практически весь ассортимент форм.
            <br>
            Поможем подобрать и изготовим именно ту форму, которая вам нужна.
            <br>
            Ознакомьтесь с видами форм, их особенностями, материалами и технологиями изготовления.
        </div>
    </div>
</div>
<div class="tech-bg-white w-100">
    <x-pages.uslugi.forms-for-vacuum />
    <x-pages.uslugi.forms-for-melters />
    <x-pages.uslugi.forms-for-silicone />
    <x-pages.uslugi.matrixes />
    <x-pages.uslugi.prototypes />
</div>
@endsection


@section('meta-description')
    Компания Стамик - это разработка и производство пресс-форм, прототипов, мастер моделей.
    Для литья и вакуумной формовки.
@endsection

@section('meta-keywords')
    сканирование объектов, 3D-сканирование
@endsection
