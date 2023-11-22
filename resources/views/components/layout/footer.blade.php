<footer class="footer">
    <div class="wrapper-footer">
        <div class="flex-column flex-md-row flex-wrap justify-content-between d-none d-md-flex position-relative"
             style="padding-top: 80px;">
            <div class=" " style="margin-right: 65px;">
                <div class="w-100 d-flex justify-content-center justify-content-md-start">
                </div>
                <div style="max-width: 172px;">
                    <a href="{{route('main')}}" class="">
                        <img src="{{asset('img/logo-light.webp')}}" class="footer-logo" alt="">
                    </a>
                    <div class="footer-txt mb-2 text-center text-md-start mt-px-30">
                        Компания <b>Стамик</b> - это разработка и производство пресс-форм,
                        прототипов, мастер моделей. Для литья и вакуумной формовки.
                    </div>
                </div>
                <div class="d-none d-md-block" style="padding-top: 195px;">
                    <x-footer.small-links/>
                </div>
            </div>

            <div class="">
                <div class="footer-block">
                    <a class="foot-title" href="{{route('uslugi')}}">
                        ФОРМЫ
                        <div class="foot-hr-line"></div>
                    </a>
                    <div class="">
                        <a href="{{route('uslugi')}}#vacuum" class="footer-linko ">Вакуум</a>
                        <a href="{{route('uslugi')}}#melters" class="footer-linko">Литье</a>
                        <a href="{{route('uslugi')}}#silicone" class="footer-linko ">Силикон</a>
                        <a href="{{route('uslugi')}}#matrixes" class="footer-linko ">Матрицы</a>
                        <a href="{{route('uslugi')}}#prototypes" class="footer-linko ">Прототипы</a>
                    </div>
                </div>
            </div>

            <div class=" ">
                <div class="footer-block">
                    <a class="foot-title" href="{{route('tehnologii')}}">
                        ТЕХНОЛОГИИ
                    </a>
                    <div class="foot-hr-line"></div>
                    <div class="">
                        <a href="{{route('tehnologii')}}#modeling" class="footer-linko d-flex">3D&nbsp;моделирование</a>
                        <a href="{{route('tehnologii')}}#printing" class="footer-linko">3D&nbsp;печать</a>
                        <a href="{{route('tehnologii')}}#scaning" class="footer-linko">3D&nbsp;сканирование</a>
                        <a href="{{route('tehnologii')}}#milling" class="footer-linko">Фрезеровка</a>
                        <a href="{{route('tehnologii')}}#injection" class="footer-linko">Литье&nbsp;под&nbsp;давлением</a>
                        <a href="{{route('tehnologii')}}#vacuum" class="footer-linko">Вакуумная&nbsp;формовка</a>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="footer-block with-line">
                    <a href="{{route('kontakty')}}" class="foot-title">
                        СВЯЖИТЕСЬ&nbsp;С&nbsp;НАМИ
                    </a>
                    <div class="foot-hr-line"></div>
                    <div class="">
                        <a href="{{route('kontakty')}}" class="footer-linko d-flex"><span class="text-small">Тульская обл. г.
                                Кимовск <br> ул. Октябрьская, 19</span></a>
                        <a href="tel:+79509120591" class="footer-linko"><span class="text-orange">+7 950 912 05 91</span></a>
                        <a href="tel:+79520183346" class="footer-linko"><span class="text-orange">+7 952 018 33 46</span></a>
                        <div href="" class="footer-linko"><span class="text-small">с 9.00-18.00 Пн-Пт</span></div>
                        <a href="mailto:info@stamic.ru" class="footer-linko"><span class="text-orange">info@stamic.ru</span></a>
                    </div>

                    <div class="d-block d-md-none">
                        <x-footer.small-links/>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="footer-block">
                    <a href="{{route('kontakty')}}" class="foot-title">
                        ИНФОРМАЦИЯ
                    </a>
                    <div class="foot-hr-line"></div>
                    <div class="">
                        <a href="{{route('main')}}#about" class="footer-linko d-flex">О нас</a>
                        <a href="{{route('proekty')}}" class="footer-linko">Проекты</a>
                        <a href="{{route('kontakty')}}" class="footer-linko">Контакты</a>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <img src="{{asset('img/tipo-logo.png')}}" alt="">
                </div>
            </div>

            <div class="basement-stam"></div>

            <div class="container">
                <div class="d-flex justify-content-center" style="margin-bottom: 13px;">
                    <div class="basement-stam-text basement-stam-text-big">
                        <b>Стамик.</b> Формы.Пресс-формы. Все права защищены.
                        2009-2022.
                    </div>
                </div>
            </div>
            <a href="{{route('main')}}#carouselExampleCaptions" class="only-up" id="only-up"></a>
        </div>





        {{--мобильная версия футера--}}
        <div class="flex-md-row d-md-none" style="padding-top: 60px; ">
            <div class=" ">
                <div class="w-100 d-flex justify-content-center justify-content-md-start" style="margin-bottom: 22px;">
                    <img src="{{asset('img/logo-light.webp')}}" class="footer-logo" alt="">
                </div>
                <div style="margin-bottom: 22px;">
                    <div class="footer-txt mb-2 text-center">
                        Компания <b>Стамик</b> - это разработка и производство пресс-форм,
                        прототипов, мастер моделей. Для литья и вакуумной формовки.
                    </div>
                </div>
                <div class="d-none d-md-block" style="padding-top: 195px;">
                    <x-footer.small-links/>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="">
                    <div class="footer-block">
                        <a class="foot-title" href="{{route('uslugi')}}">
                            ФОРМЫ
                            <div class="foot-hr-line foot-hr-low"></div>
                        </a>
                        <div class="">
                            <a href="{{route('uslugi')}}#vacuum" class="footer-linko ">Вакуум</a>
                            <a href="{{route('uslugi')}}#melters" class="footer-linko">Литье</a>
                            <a href="{{route('uslugi')}}#silicone" class="footer-linko ">Силикон</a>
                            <a href="{{route('uslugi')}}#matrixes" class="footer-linko ">Матрицы</a>
                            <a href="{{route('uslugi')}}#prototypes" class="footer-linko ">Прототипы</a>
                        </div>
                    </div>
                </div>

                <div class=" ">
                    <div class="footer-block">
                        <a class="foot-title foot-align-right" href="{{route('tehnologii')}}">
                            ТЕХНОЛОГИИ
                        </a>
                        <div class="d-flex w-100 justify-content-end justify-content-md-start">
                            <div class="foot-hr-line foot-hr-low"></div>
                        </div>
                        <div class="d-block justify-content-end">
                            <a href="{{route('tehnologii')}}#modeling" class="footer-linko small-align-right">3D&nbsp;моделирование</a>
                            <a href="{{route('tehnologii')}}#printing" class="footer-linko small-align-right">3D&nbsp;печать</a>
                            <a href="{{route('tehnologii')}}#scaning" class="footer-linko  small-align-right">3D&nbsp;сканирование</a>
                            <a href="{{route('tehnologii')}}#milling" class="footer-linko  small-align-right">Фрезеровка</a>
                            <a href="{{route('tehnologii')}}#injection" class="footer-linko  small-align-right">Литье&nbsp;под&nbsp;давлением</a>
                            <a href="{{route('tehnologii')}}#vacuum" class="footer-linko  small-align-right">Вакуумная&nbsp;формовка</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center" style="padding-top: 30px">
                <div class="footer-block">
                    <div class="foot-title foot-align-right">
                        СВЯЖИТЕСЬ С НАМИ
                    </div>
                    <div class="d-flex w-100 justify-content-center justify-content-md-start">
                        <div class="foot-hr-line foot-hr-center"></div>
                    </div>
                </div>

            </div>
            <div class="container" style="padding: 0 20px; margin-bottom: 26px">
                <a href="" class="footer-linko d-flex"><span class="text-small">Тульская обл. г. Кимовск ул. Октябрьская, 19</span></a>
                <a href="tel:+79509120591" class="footer-linko"><span class="text-orange">+7 950 912 05 91</span></a>
                <a href="tel:+79520183346" class="footer-linko"><span class="text-orange">+7 952 018 33 46</span></a>
                <div href="" class="footer-linko"><span class="text-small">с 9.00-18.00 Пн-Пт</span></div>
                <a href="mailto:info@stamic.ru" class="footer-linko"><span class="text-orange">info@stamic.ru</span></a>

                <div class="align-items-center d-flex">
                    <a href="">
                        <img src="{{asset('img/telegram.png')}}" class="messenger" style="margin-right: 10px" alt="">
                    </a>

                    <a href="">
                        <img src="{{asset('img/instagram.png')}}" style="width: 19px; height: 19px;" alt="">
                    </a>

                    <div class="messenger-hr-weight "></div>

                    <div class="stamik-tg-inst-text">
                        stamic_ru
                    </div>
                </div>
                <div class="d-flex justify-content-center ">
                    <img src="{{asset('img/tipo-logo.png')}}" alt="">
                </div>
            </div>

            <div class="d-flex">
                <div class="basement-stam"></div>
            </div>

            <div class="container">
                <div class="d-flex justify-content-center" style="margin-bottom: 13px;">
                    <div class="basement-stam-text">
                        <b>Стамик.</b> Формы.Пресс-формы. Все права защищены.
                        2009-2022.
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

@push('custom_scripts')
    <script>
        registerForAnimation('only-up',[
            {id:'only-up', addedClass:'moved', delay:2000},
        ]);
    </script>
@endpush
