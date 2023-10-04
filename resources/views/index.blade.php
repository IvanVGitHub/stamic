@extends('layouts.app')

@section('header-title')
@endsection

@section('content')
    <x-index.section id="start" header="">
        <div class="text-center" id="">
            <div class="index-block1-title pb-3">
                Формы для литья
            </div>
            <div class="index-block1-subtitle">
                Лучшая реклама любой работы - её качество!
            </div>
        </div>
        <div class="d-flex justify-content-center w-100">
            <div>
                <div class="index-block-title">
                    Наши формы
                </div>
                <div class="index-block1">
                    <div class="index-block-text tab">
                        <div>
                            Корексы, блистеры, ложементы, формы для мыла, шоколада, тротуарной плитки, силиконовые формы
                            для выпечки, формы для литья пластиков, матрицы, прототипы и мастер модели,..
                        </div>
                        <br>
                        <div>
                            Для них нужны &nbsp&nbsp<strong>ФОРМЫ.</strong>
                            <div class="d-flex justify-content-end">
                                <button class="button-detailed">Подробнее</button>
                            </div>
                        </div>
                    </div>
                    <div class="index-block1-img">
                        <img src="{{asset('img/cutters.webp')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="d-flex justify-content-center w-100">
            <div>
                <div class="index-block2">
                    <div class="index-block2-list">
                        <ul>
                            <li>Вакуумная формовка</li>
                            <li>Фрезеровка ЧПУ</li>
                            <li>Гравировка ЧПУ</li>
                            <li>3d печать</li>
                            <li>3d сканирование</li>
                            <li>3d моделирование</li>
                            <li>Литье под давлением</li>
                        </ul>
                    </div>
                    <div class="index-block2-content">
                        <div class="index-block-title w-100 text-center mb-3">
                            Наши технологии
                        </div>
                        <div class="index-block2-text">
                            Все наши технологии мы используем в той или иной степени в изготовлении форм . Вы можете
                            воспользоваться любой из них как отдельной услугой или как частью вашего проекта. С
                            помощью этих технологий можно реализовать самые смелые проекты вашего бизнеса
                            <button class="button-detailed float-end mt-3">Подробнее</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-index.section>
@endsection

@section('meta-description')
    Компания Стамик - это разработка и производство пресс-форм, прототипов, мастер моделей.
    Для литья и вакуумной формовки.
@endsection

@section('meta-keywords')
    сканирование объектов, 3D-сканирование
@endsection
