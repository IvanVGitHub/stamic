@extends('layouts.app')

@section('header-title')
    Наши технологии
@endsection

@section('content')
{{--    <x-index.section id="start" header="">--}}
        <div class="teh-back-oliva w-100 py-4">
            <div class="oliva-teh-wrapper">
                <div class="wide-block-description">
                    Чтобы изготовить пресс-форму, прототип или матрицу нужно применить современные технологи.
                    Смоделировать
                    форму или отсканировать дизайнерский образец, отлить деталь или отфрезеровать модель. Можно напечать
                    и
                    подержать в руках, отформовать. Задачи разные и важно использовать весь арсенал оборудования и
                    навыков.
                    <br>
                    <br>
                    Ознакомьтесь с технологиями, которые мы используем в своем производстве.
                </div>
            </div>
        </div>

        <div class="teh-back-white w-100" style="padding-top: 80px;">
            <div class="white-teh-wrapper">
                <div class="index-block-title" style="margin-bottom: 24px;">
                    3D <span class="text-balck">моделирование</span>
                </div>

                <div class="d-flex justify-content-center">
                    <img src="{{asset('img/1-teh.webp')}}" class="img1-teh" style="width: 1053px; height: 425px;">
                </div>

                <div class="row d-flex" >
                    <div class="teh-text-oliva col-6" style="margin-top: 20px; ">
                        Мы различаем два вида моделирования.<br>
                        <b>3Д скульптор и 3Д проектирование.</b><br>
                        <b>Скульптурное</b> моделирование подходит для моделирования<br>
                        панно, форм для мыла и шоколада и подобных вещей.<br>
                        <b>Проектирование</b> нужно там, где есть точные параметры.<br>
                        Например, пластиковый кронштейн или форма для блистерной<br>
                        упаковки.
                    </div>
                        <div class="col-6 d-flex gap-2">
                                <img src="{{asset('img/2(1)-teh.webp')}}" class="img1-teh-small">

                                <img src="{{asset('img/2(2)-teh.webp')}}" class="img1-teh-small">

                                <img src="{{asset('img/2(3)-teh.webp')}}" class="img1-teh-small">
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--    </x-index.section>--}}
@endsection

@section('meta-description')
    Компания Стамик - это разработка и производство пресс-форм, прототипов, мастер моделей.
    Для литья и вакуумной формовки.
@endsection

@section('meta-keywords')
    сканирование объектов, 3D-сканирование
@endsection
