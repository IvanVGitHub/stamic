@extends('layouts.app')

@section('header-title')
    Наши технологии
@endsection

@section('content')
    <div class="wide-bg-oliva w-100 py-px-25">
        <x-pages.tehnologii.wide-oliva-block />
    </div>
    <div class="wide-bg-white w-100">
        <x-pages.tehnologii.3d-modeling />
    </div>





    <div class="wide-bg-white w-100 pt-8">
        <div class="d-flex justify-content-center position-relative">
            <div class="position-relative">
                <img src="{{asset('img/HomePage_Grey_Banner 1.png')}}" class="tech-block2-img" style="margin-left: 110px;" alt="">
                <div class="test d-flex justify-content-between">
                    <div class="photo-card">
                        <a href="" class="tehnologii-hover-image-scale">
                            <img src="{{asset('img/1.png')}}" class="tech-block-img-small" alt="">
                        </a>
                        <a href="" class="tehnologii-hover-image-scale">
                            <img src="{{asset('img/2.png')}}" class="tech-block-img-small" alt="">
                        </a>
                        <a href="" class="tehnologii-hover-image-scale">
                            <img src="{{asset('img/3.png')}}" class="tech-block-img-small" alt="">
                        </a>
                        <div class="photo-card-comment">примеры 3Д печати</div>
                    </div>
                </div>
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




@endsection

@section('meta-description')
    Компания Стамик - это разработка и производство пресс-форм, прототипов, мастер моделей.
    Для литья и вакуумной формовки.
@endsection

@section('meta-keywords')
    сканирование объектов, 3D-сканирование
@endsection
