@extends('layouts.app')

@section('title')
    Проекты
@endsection

@section('header-title')
    Наши проекты
@endsection

@section('content')
    <div class="pt-px-50 pt-px-md-0">
        <div class="proekty-block flag-animate" id="proekty-block-1">
            <div class="proekty-content">
                <x-pages.proekty.proekty-grid image="{{asset('img/proekty-1-1.webp')}}"
                                              name="Первый проект"
                                              description="Описание проекта первого">
                    <x-pages.proekty.modal-image image="{{asset('img/monolasts.webp')}}"/>
                    <x-pages.proekty.modal-image image="{{asset('img/pistol grip.webp')}}"/>
                    <x-pages.proekty.modal-image image="{{asset('img/form mdf.webp')}}"/>
                    <x-pages.proekty.modal-image image="{{asset('img/favicon.png')}}"/>
                </x-pages.proekty.proekty-grid>
                <x-pages.proekty.proekty-grid image="{{asset('img/proekty-1-2.webp')}}"
                                              name="Следующий проект"
                                              description="Описание очередного проекта">
                    <x-pages.proekty.modal-image image="{{asset('img/sequence4of5.webp')}}"/>
                    <x-pages.proekty.modal-image image="{{asset('img/logo-light.webp')}}"/>
                </x-pages.proekty.proekty-grid>
            </div>
            <div class="h-line hl1" id="hl1"></div>
            <div class="v-line vl1" id="vl1"></div>
        </div>
        <div class="proekty-block flag-animate" id="proekty-block-2">
            <div class="proekty-content">
                <x-pages.proekty.proekty-grid image="{{asset('img/proekty-2-1.webp')}}"
                                              name="Следующий проект"
                                              description="Описание очередного проекта">
                    <x-pages.proekty.modal-image image="{{asset('img/form with orange detail.webp')}}"/>
                    <x-pages.proekty.modal-image image="{{asset('img/tipo-logo.png')}}"/>
                </x-pages.proekty.proekty-grid>
                <x-pages.proekty.proekty-grid image="{{asset('img/proekty-2-2.webp')}}"
                                              name="Следующий проект"
                                              description="Описание очередного проекта">
                    <x-pages.proekty.modal-image image="{{asset('img/favicon.png')}}"/>
                    <x-pages.proekty.modal-image image="{{asset('img/logo-light.webp')}}"/>
                </x-pages.proekty.proekty-grid>
            </div>
            <div class="v-line vl2" id="vl2"></div>
            <div class="v-line vl3" id="vl3"></div>
            <div class="h-line hl2" id="hl2"></div>
        </div>
        <div class="proekty-block flag-animate" id="proekty-block-3">
            <div class="proekty-content">
                <x-pages.proekty.proekty-grid image="{{asset('img/proekty-3-1.webp')}}"
                                              name="Следующий проект"
                                              description="Описание очередного проекта">
                    <x-pages.proekty.modal-image image="{{asset('img/monolasts.webp')}}"/>
                    <x-pages.proekty.modal-image image="{{asset('img/pistol grip.webp')}}"/>
                </x-pages.proekty.proekty-grid>
                <x-pages.proekty.proekty-grid image="{{asset('img/proekty-3-2.webp')}}"
                                              name="Следующий проект"
                                              description="Описание очередного проекта">
                    <x-pages.proekty.modal-image image="{{asset('img/monolasts.webp')}}"/>
                    <x-pages.proekty.modal-image image="{{asset('img/pistol grip.webp')}}"/>
                </x-pages.proekty.proekty-grid>
            </div>
            <div class="h-line hl3" id="hl3"></div>
            <div class="v-line vl4" id="vl4"></div>
        </div>
        <div class="proekty-block flag-animate" id="proekty-block-4">
            <div class="proekty-content">
                <x-pages.proekty.proekty-grid image="{{asset('img/proekty-4-1.webp')}}"
                                              name="Следующий проект"
                                              description="Описание очередного проекта">
                    <x-pages.proekty.modal-image image="{{asset('img/monolasts.webp')}}"/>
                    <x-pages.proekty.modal-image image="{{asset('img/pistol grip.webp')}}"/>
                </x-pages.proekty.proekty-grid>
                <x-pages.proekty.proekty-grid image="{{asset('img/proekty-4-2.webp')}}"
                                              name="Следующий проект"
                                              description="Описание очередного проекта">
                    <x-pages.proekty.modal-image image="{{asset('img/monolasts.webp')}}"/>
                    <x-pages.proekty.modal-image image="{{asset('img/pistol grip.webp')}}"/>
                </x-pages.proekty.proekty-grid>
            </div>
            <div class="v-line vl5" id="vl5"></div>
        </div>
        <div class="proekty-block flag-animate" id="proekty-block-5">
            <div class="proekty-content">
                <x-pages.proekty.proekty-grid image="{{asset('img/pistol grip.webp')}}"
                                              name="Следующий проект"
                                              description="Описание очередного проекта">
                    <x-pages.proekty.modal-image image="{{asset('img/monolasts.webp')}}"/>
                    <x-pages.proekty.modal-image image="{{asset('img/pistol grip.webp')}}"/>
                </x-pages.proekty.proekty-grid>
            </div>
        </div>
    </div>

    @push('custom_scripts')
        <script>
            registerForAnimation('proekty-block-1',[
                {id:'proekty-block-1', addedClass:'moved', delay:300},
                {id:'vl1', addedClass:'moved', delay:500},
                {id:'hl1', addedClass:'moved', delay:1500},
            ]);
            registerForAnimation('proekty-block-2',[
                {id:'proekty-block-2', addedClass:'moved', delay:500},
                {id:'vl2', addedClass:'moved', delay:1000},
                {id:'vl3', addedClass:'moved', delay:3000},
                {id:'hl2', addedClass:'moved', delay:5000},
            ]);
            registerForAnimation('proekty-block-3',[
                {id:'proekty-block-3', addedClass:'moved', delay:300},
                {id:'vl4', addedClass:'moved', delay:500},
                {id:'hl3', addedClass:'moved', delay:4000},
            ]);
            registerForAnimation('proekty-block-4',[
                {id:'proekty-block-4', addedClass:'moved', delay:300},
                {id:'vl5', addedClass:'moved', delay:3000},
            ]);
            registerForAnimation('proekty-block-5',[
                {id:'proekty-block-5', addedClass:'moved', delay:300},
            ]);
        </script>
    @endpush
@endsection

@section('meta-description')
    Компания Стамик - это разработка и производство пресс-форм, прототипов, мастер моделей.
    Для литья и вакуумной формовки.
@endsection

@section('meta-keywords')
    сканирование объектов, 3D-сканирование
@endsection
