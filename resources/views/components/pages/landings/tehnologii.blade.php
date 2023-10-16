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
        <div class="tech-wrapper-white pt-px-50">
            <div class="title-first-letter mb-px-25">
                <span>3D</span> моделирование
            </div>

            <div class="d-flex justify-content-center">
                <img src="{{asset('img/form half real.webp')}}" class="tech-block1-img" alt="">
            </div>

            <div class="row d-flex">
                <div class="teh-text-oliva col-5 mt-2" style="margin-left: 110px">
                    Мы различаем два вида моделирования.<br>
                    <b>3Д скульптор и 3Д проектирование.</b><br>
                    <b>Скульптурное</b> моделирование подходит для моделирования<br>
                    панно, форм для мыла и шоколада и подобных вещей.<br>
                    <b>Проектирование</b> нужно там, где есть точные параметры.<br>
                    Например, пластиковый кронштейн или форма для блистерной<br>
                    упаковки.
                </div>

                <div class="col-4 d-flex justify-content-between">
                    <div class="d-flex">
                        <div>
                            <img src="{{asset('img/form combined.webp')}}" class="tech-block1-img-small me-3" alt="">
                        </div>
                        <div class="d-flex">
                            <img src="{{asset('img/form steel.webp')}}" class="tech-block1-img-small me-3" alt="">
                        </div>
                        <div>
                            <img src="{{asset('img/pistol grip.webp')}}" class="tech-block1-img-small" alt="">
                        </div>
                    </div>
                </div>

                <div class="row d-flex">
                    <div class="col-6">
                        <div class="text-center">

                        </div>
                    </div>
                    <div class="col-6 justify-content-center">
                        <div class="text-center" style="padding-right: 100px;">
                            примеры 3Д моделирования
                        </div>
                    </div>
                    <div class="title-first-letter mb-px-25">
                        <span>3D</span> печать
                    </div>
                </div>
            </div>
        </div>
{{--    </div>--}}

{{--    <div class="tech-bg-white w-100">--}}


        <div class="cont-img">

        </div>


        <div class="d-flex justify-content-center cont-img">
            <div class="position-relative">

                <img src="{{asset('img/HomePage_Grey_Banner 1.png')}}" class="tech-block2-img" style="margin-left: 110px;" alt="">
                <div class="test d-flex justify-content-between">
                    <div class="photo-card">

                        <a href="" class="hidden-img">
                            <img src="{{asset('img/1.png')}}" class="tech-block2-img-small" alt="">

                        </a>


                        <a href="" class="hidden-img">
                            <img src="{{asset('img/2.png')}}" class="tech-block2-img-small" alt="">
                        </a>


                        <a href="" class="hidden-img">
                            <img src="{{asset('img/3.png')}}" class="tech-block2-img-small" alt="">
                        </a>
                        <div class="photo-card-comment">примеры 3Д печати</div>
                    </div>
                </div>
            </div>

        </div>


                <div class="d-flex justify-content-end">
                    <div class="" style="margin-right: 590px;">

                    </div>
                </div>



        <div class="tech-grey-blok row">
            <div class="d-none d-sm-block col-md-1 col-lg-2 col-xl-3 col-xxl-5"></div>
            <div class="col-12 col-md-11 col-lg-10 col-xl-9 col-xxl-7">
                <div class="p-px-30 pl-px-10 tech-block-left-grey">
                    Мы печатаем прототипы и детали на 3d принтерах собственного производства.
                    Высочайшая точность,&nbsp;скорость и качество проверенно сотнями часов печати. Печатаем ABS и PLA пластиками.
                    Возможна печать с&nbsp; водорастворимыми поддержками.
                </div>
            </div>

        </div>


        <div class="tech-bg-white w-100">
            <div class="tech-wrapper-white relative">
                <div class="title-first-letter mb-px-25">
                    <span>3D</span> моделирование
                </div>


                    <div class="back-skan absolute">
                        <div>
                            <div class="teh-text-oliva mt-2" style="margin-left: 110px">
                                Мы используем оптический 3D сканер с разрешением ​до 0.01мм.
                                Сможем отсканировать любой объект или деталь. Будь то автомобиль или ювелирное изделие.
                                На выходе получаем 3D модель, полностью повторяющую оригинал.
                            </div>
                            <div class="teh-text-oliva mt-2" style="margin-left: 110px">
                                Мы используем оптический 3D сканер с разрешением ​до 0.01мм.
                                Сможем отсканировать любой объект или деталь. Будь то автомобиль или ювелирное изделие.
                                На выходе получаем 3D модель, полностью повторяющую оригинал.
                            </div>
                            <div class="teh-text-oliva mt-2" style="margin-left: 110px">
                                Мы используем оптический 3D сканер с разрешением ​до 0.01мм.
                                Сможем отсканировать любой объект или деталь. Будь то автомобиль или ювелирное изделие.
                                На выходе получаем 3D модель, полностью повторяющую оригинал.
                            </div>
                            <div class="teh-text-oliva mt-2" style="margin-left: 110px">
                                Мы используем оптический 3D сканер с разрешением ​до 0.01мм.
                                Сможем отсканировать любой объект или деталь. Будь то автомобиль или ювелирное изделие.
                                На выходе получаем 3D модель, полностью повторяющую оригинал.
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
