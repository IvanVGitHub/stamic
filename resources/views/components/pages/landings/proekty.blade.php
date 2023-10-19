@extends('layouts.app')

@section('header-title')
    Наши проекты
@endsection

@section('content')
    <div class="proekty-block">
        <div class="proekty-content">
            <x-pages.proekty.grid-image image="{{asset('img/proekty-1-1.webp')}}" >
                <div class="carousel-item">
                    <img src="{{asset('img/pistol grip.webp')}}" alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/sequence5of5.webp')}}" alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/sequence4of5.webp')}}" alt="">
                </div>
            </x-pages.proekty.grid-image>
            <x-pages.proekty.grid-image image="img/pistol grip.webp" />
        </div>
    </div>
    <div class="proekty-block">
        <div class="proekty-content">
            <x-pages.proekty.grid-image image="img/pistol grip.webp" />
            <x-pages.proekty.grid-image image="img/pistol grip.webp" />
        </div>
    </div>
    <div class="proekty-block">
        <div class="proekty-content">
            <x-pages.proekty.grid-image image="img/pistol grip.webp" />
            <x-pages.proekty.grid-image image="img/pistol grip.webp" />
        </div>
    </div>
    <div class="proekty-block">
        <div class="proekty-content">
            <x-pages.proekty.grid-image image="img/pistol grip.webp" />
            <x-pages.proekty.grid-image image="img/pistol grip.webp" />
        </div>
    </div>
    <div class="proekty-block">
        <div class="proekty-content">
            <x-pages.proekty.grid-image image="img/pistol grip.webp" />
            <x-pages.proekty.grid-image image="img/pistol grip.webp" />
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
