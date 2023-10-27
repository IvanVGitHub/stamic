@extends('layouts.app')

@section('header-title')
    Наши проекты
@endsection

@section('content')
    <div class="proekty-block">
        <div class="proekty-content">
            <x-pages.proekty.grid-image image="{{asset('img/proekty-1-1.webp')}}"
                                        name="Первый проект"
                                        description="Описание проекта первого">
                <x-pages.proekty.modal-image image="{{asset('img/monolasts.webp')}}" />
                <x-pages.proekty.modal-image image="{{asset('img/pistol grip.webp')}}" />
                <x-pages.proekty.modal-image image="{{asset('img/form mdf.webp')}}" />
                <x-pages.proekty.modal-image image="{{asset('img/favicon.png')}}" />
            </x-pages.proekty.grid-image>
            <x-pages.proekty.grid-image image="img/proekty-1-2.webp"
                                        name="Следующий проект"
                                        description="Описание очередного проекта">
                <x-pages.proekty.modal-image image="{{asset('img/sequence4of5.webp')}}" />
                <x-pages.proekty.modal-image image="{{asset('img/logo-light.webp')}}" />
            </x-pages.proekty.grid-image>
        </div>
        <div class="h-line hl1"></div>
        <div class="v-line vl1"></div>
    </div>
    <div class="proekty-block">
        <div class="proekty-content">
            <x-pages.proekty.grid-image image="img/proekty-2-1.webp"
                                        name="Следующий проект"
                                        description="Описание очередного проекта">
                <x-pages.proekty.modal-image image="{{asset('img/form with orange detail.webp')}}" />
                <x-pages.proekty.modal-image image="{{asset('img/tipo-logo.png')}}" />
            </x-pages.proekty.grid-image>
            <x-pages.proekty.grid-image image="img/proekty-2-2.webp"
                                        name="Следующий проект"
                                        description="Описание очередного проекта">
                <x-pages.proekty.modal-image image="{{asset('img/telegram.png')}}" />
                <x-pages.proekty.modal-image image="{{asset('img/logo-light.webp')}}" />
            </x-pages.proekty.grid-image>
        </div>
        <div class="h-line hl2"></div>
        <div class="v-line vl2"></div>
    </div>
    <div class="proekty-block">
        <div class="proekty-content">
            <x-pages.proekty.grid-image image="img/proekty-3-1.webp"
                                        name="Следующий проект"
                                        description="Описание очередного проекта">
                <x-pages.proekty.modal-image image="{{asset('img/monolasts.webp')}}" />
                <x-pages.proekty.modal-image image="{{asset('img/pistol grip.webp')}}" />
            </x-pages.proekty.grid-image>
            <x-pages.proekty.grid-image image="img/proekty-3-2.webp"
                                        name="Следующий проект"
                                        description="Описание очередного проекта">
                <x-pages.proekty.modal-image image="{{asset('img/monolasts.webp')}}" />
                <x-pages.proekty.modal-image image="{{asset('img/pistol grip.webp')}}" />
            </x-pages.proekty.grid-image>
        </div>
        <div class="h-line hl3"></div>
        <div class="v-line vl3"></div>
    </div>
    <div class="proekty-block">
        <div class="proekty-content">
            <x-pages.proekty.grid-image image="img/proekty-4-1.webp"
                                        name="Следующий проект"
                                        description="Описание очередного проекта">
                <x-pages.proekty.modal-image image="{{asset('img/monolasts.webp')}}" />
                <x-pages.proekty.modal-image image="{{asset('img/pistol grip.webp')}}" />
            </x-pages.proekty.grid-image>
            <x-pages.proekty.grid-image image="img/proekty-4-2.webp"
                                        name="Следующий проект"
                                        description="Описание очередного проекта">
                <x-pages.proekty.modal-image image="{{asset('img/monolasts.webp')}}" />
                <x-pages.proekty.modal-image image="{{asset('img/pistol grip.webp')}}" />
            </x-pages.proekty.grid-image>
        </div>
        <div class="v-line vl4"></div>
    </div>
    <div class="proekty-block">
        <div class="proekty-content">
            <x-pages.proekty.grid-image image="img/pistol grip.webp"
                                        name="Следующий проект"
                                        description="Описание очередного проекта">
                <x-pages.proekty.modal-image image="{{asset('img/monolasts.webp')}}" />
                <x-pages.proekty.modal-image image="{{asset('img/pistol grip.webp')}}" />
            </x-pages.proekty.grid-image>
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
