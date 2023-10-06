@extends('layouts.app')

@section('header-title')
    Наши формы
@endsection

@section('content')
    <div class="tech-bg-oliva w-100 py-4">
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
    <div class="tech-bg-white w-100 pt-8">
        <div class="tech-wrapper-white">
            <div class="title-first-letter pt-px-100">
                Формы для вакуумной формовки
            </div>

            <div class="row">
                <div class="col img-with-stripe p-0" text="ДЮРАЛЬ Д16Т * PS и PET">
                    <img src="{{asset('img/box.webp')}}" class="" alt="">
                </div>

                <div class="col list-with-title">
                    <h3 class="text-center">
                        Что формуют
                    </h3>
                    <div class="d-flex justify-content-between p-3">
                        <ul>
                            <li>Корпуса</li>
                            <li>Авто тюнинг</li>
                            <li>Детали роботов</li>
                            <li>Бытовые вещи</li>
                            <li>Игрушки</li>
                        </ul>
                        <ul>
                            <li>Упаковку</li>
                            <li>Блистеры</li>
                            <li>Формы для мыла,</li>
                            <li>шоколада</li>
                            <li>тротуарной плитки</li>
                        </ul>
                    </div>
                </div>

                <div class="col">
                    <img src="{{asset('img/armor.webp')}}" class="" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('meta-description')
    Компания Стамик - это разработка и производство пресс-форм, прототипов, мастер моделей.
    Для литья и вакуумной формовки.
@endsection

@section('meta-keywords')
    сканирование объектов, 3D-сканирование
@endsection
