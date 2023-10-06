@extends('layouts.app')

@section('header-title')
    Наши технологии
@endsection

@section('content')
    <div class="tech-bg-oliva w-100 py-4">
        <div class="wrapper-oliva">
            <div class="wide-block-description">
                Чтобы изготовить пресс-форму, прототип или матрицу нужно применить современные технологи. Смоделировать форму или отсканировать дизайнерский образец, отлить деталь или отфрезеровать модель. Можно напечать и подержать в руках, отформовать. Задачи разные и важно использовать весь арсенал оборудования и навыков.
                <br>
                <br>
                Ознакомьтесь с технологиями, которые мы используем в своем производстве.
            </div>
        </div>
    </div>

    <div class="tech-bg-white w-100 pt-8">
        <div class="tech-wrapper-white">
            <div class="title-first-letter mb-px-25">
                <span>3D</span> моделирование
            </div>

            <div class="d-flex justify-content-center">
                <img src="{{asset('img/form half real.webp')}}" class="tech-block1-img" alt="">
            </div>

            <div class="row d-flex">
                <div class="teh-text-oliva col-6 mt-2">
                    Мы различаем два вида моделирования.<br>
                    <b>3Д скульптор и 3Д проектирование.</b><br>
                    <b>Скульптурное</b> моделирование подходит для моделирования<br>
                    панно, форм для мыла и шоколада и подобных вещей.<br>
                    <b>Проектирование</b> нужно там, где есть точные параметры.<br>
                    Например, пластиковый кронштейн или форма для блистерной<br>
                    упаковки.
                </div>
                <div class="col-6 d-flex gap-2">
                    <img src="{{asset('img/form combined.webp')}}" class="tech-block1-img-small" alt="">

                    <img src="{{asset('img/form steel.webp')}}" class="tech-block1-img-small" alt="">

                    <img src="{{asset('img/pistol grip.webp')}}" class="tech-block1-img-small" alt="">
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
