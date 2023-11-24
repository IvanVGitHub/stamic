@extends('layouts.app')

@section('title')
    Контакты
@endsection

@section('header-title')
    Наши контакты
@endsection

@section('content')
    <div class="kontakty">
        <div class="bg-white">
            <div class="kontakty-map" id="stamic-map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A579655227e9d4f0440f6ddd274295e472bf6fc04a6c8bb71bebf05b278bcd07b&amp;width=100%25&amp;height=350&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
            <div class="kontakty-content">
                <div class="col-12 col-md-9 d-grid row-gap-4">
                    <div>
                        <div class="text-responsive-21">
                            <strong>Производство. пн-сб 9.00-19.00</strong>
                        </div>
                        <div class="text-responsive-15">
                            Тульская область, г. Кимовск, ул. Октябрьская, д. 19.
                        </div>
                        <br>
                        <div class="text-responsive-14">
                            Уважаемые клиенты, в связи с большим объемом работы просьба заранее звонить до приезда (за 1-2 дня).
                        </div>
                    </div>
                    <div>
                        <div class="text-responsive-21">
                            <strong>Прием и выдача заказов. пн-чт 8.00-19.00</strong>
                        </div>
                        <div class="text-responsive-15">
                            Москва, 1-й Институтский пр-д, дом 5, стр. 2
                        </div>
                        <br>
                        <div class="text-responsive-14">
                            Мы можем отправить ваши формы ТК Деловые Линиии и СДЭК
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 kontakty-content-phone">
                    <div class="text-responsive-16">
                        <a href="tel:{{config('utility.phone')}}">{{config('utility.phone-show')}}</a>
                    </div>
                    <div class="text-responsive-16">
                        <a href="tel:{{config('utility.phone2')}}">{{config('utility.phone2-show')}}</a>
                    </div>
                    <br>
                    <div class="text-responsive-15">
                        с 9.00-18.00 Пн-Пт
                    </div>
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
