@extends('layouts.app')

@section('header-title')
    Наши технологии
@endsection

@section('content')
{{--    <x-index.section id="start" header="">--}}
        <div class="teh-back-oliva w-100" style="margin-top: 43px; padding-top: 25px;">
            <div class="oliva-teh-wrapper">
                <div class="teh-text-oliva" style="margin-bottom: 24px;">
                        Чтобы изготовить пресс-форму, прототип или матрицу нужно применить современные технологи. Смоделировать
                        форму или отсканировать дизайнерский образец, отлить деталь или отфрезеровать модель. Можно напечать и
                        подержать в руках, отформовать. Задачи разные и важно использовать весь арсенал оборудования и навыков.
                        не могу шрифт установить
                </div>
                <div class="teh-text-oliva" style="padding-bottom: 41px;">
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
                    <img src="{{asset('img/1-teh.png')}}" class="img1-teh">
                </div>

                <div class="d-flex" >

                    <div class="teh-text-oliva" style="margin-top: 20px; ">
                        Мы различаем два вида моделирования.<br>
                        <b>3Д скульптор и 3Д проектирование.</b><br>
                        <b>Скульптурное</b> моделирование подходит для моделирования<br>
                        панно, форм для мыла и шоколада и подобных вещей.<br>
                        <b>Проектирование</b> нужно там, где есть точные параметры.<br>
                        Например, пластиковый кронштейн или форма для блистерной<br>
                        упаковки.
                    </div>


                        <img src="{{asset('img/2(1)-teh.png')}}" class="">



                        <img src="{{asset('img/2(2)-teh.png')}}" class="">



                        <img src="{{asset('img/2(3)-teh.png')}}" class="">

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
