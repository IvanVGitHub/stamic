@extends('layouts.app')

@section('header-title')
    Наши формы
@endsection

@section('content')
    <div class="tech-bg-oliva w-100 py-px-25">
        <div class="wrapper-oliva">
            <div class="wide-block-description">
                Для изготовления деталей и товаров нужны Формы. Будь это вакуумная формовка формочки для мыла или силиконовая форма для выпечки.
                <br>
                Для каждого случая есть своя форма. Мы изготовляем практически весь ассортимент форм.
                <br>
                Поможем подобрать и изготовим именно ту форму, которая вам нужна.
                <br>
                Ознакомьтесь с видами форм, их особенностями, материалами и технологиями изготовления.
            </div>
        </div>
    </div>
    <div class="tech-bg-white w-100">
        <div class="tech-wrapper-white">
            <div class="title-first-letter pt-px-90">
                Формы для вакуумной формовки
            </div>

            <div class="uslugi-grid-block-3 gap-x-2 pt-px-50">
                <div class="img-with-stripe p-0">
                    <img src="{{asset('img/box.webp')}}" alt="">
                    <div class="text-on-img">
                        <div class="text">ДЮРАЛЬ&nbsp<strong>Д16Т</strong>&nbsp&nbsp<div class="orange-ball"></div>&nbsp&nbsp<div class="bold">PS и PET</div></div>
                    </div>
                    <div class="text-under-img">
                        упаковка из PET
                    </div>
                </div>

                <div class="central-block pb-px-15">
                    <div class="flex-grow-1 list-with-title">
                        <h3 class="text-center">
                            Что формуют
                        </h3>
                        <div class="d-flex justify-content-between p-px-15">
                            <ul>
                                <li>Корпуса</li>
                                <li>Авто тюнинг</li>
                                <li>Детали роботов</li>
                                <li>Бытовые вещи</li>
                                <li>Игрушки</li>
                            </ul>
                            <ul>
                                <li>Упаковку</li>
                                <li>Блистеры</li>
                                <li>Формы для мыла,</li>
                                <li>шоколада</li>
                                <li>тротуарной плитки</li>
                            </ul>
                        </div>
                        <div class="text-under-list">
                            Эти и другие вещи изготовляются вакуумным формованием. Наша компания занимается не только
                            вакуумной формовкой, мы также проектируем и фрезеруем пресс-формы для нее.
                            <br>
                            Мы проектируем блистерную упаковку и отправляем Вам макет будущей пластиковой детали.
                            Учитывая Ваши пожелания, определяем размер плиты и количество матриц для формовки.
                        </div>
                    </div>
                    <div class="bottom-text">
                        Мы фрезеруем на высокоточных станках с ЧПУ , поэтому гарантируем 100%  соблюдение всех размеров.
                    </div>
                </div>

                <div class="img-with-stripe p-0">
                    <img src="{{asset('img/armor.webp')}}" alt="">
                    <div class="text-on-img">
                        <div class="text">
                            МДФ
                            &nbsp&nbsp<div class="orange-ball"></div>&nbsp&nbsp
                            <div class="bold">ABS</div>
                        </div>
                    </div>
                    <div class="text-under-img">
                        щитки из ABS
                    </div>
                </div>
            </div>

            <div class="uslugi-gray-wide-block pt-px-35">
                <div class="title">
                    Для качественной вакуумной формовки пластика, нужно соблюдать несколько условий
                </div>
                <div class="d-flex">
                    <div class="left-block">
                        <ul class="m-0">
                            <li>наличие уклонов</li>
                            <li>вытяжные отверстия</li>
                            <li>растяжение пластика</li>
                            <li>отсутствие поднутрений</li>
                        </ul>
                    </div>
                    <div class="right-block">
                        Уклоны необходимы для легкого съема отформованного пластика с формы.
                        <br>
                        Поднутрения (отрицательные углы) будут препятствовать этому. Пластик вытягивается по разному в
                        зависимости от поверхности матрицы. Замки, защелки, глубокие места и резко выступающие детали
                        нужно качественно спроектировать.
                        <br>
                        После фрезеровки, в форме сверлятся вытяжные отверстия диаметром 0.4 мм - диаметр, который
                        позволяет избежать следов вытяжки на пластике.
                        <br>
                        Форма полируется и доставляется Вам.Чертежи вырубных ножей (штанц-форм) идут в комплекте.
                    </div>
                </div>
            </div>

            <div class="uslugi-text-img-block-1 d-flex mt-px-150">
                <div class="text-left">
                    <div class="flex-grow-1">
                        <div class="title-first-letter">
                            Формы для литья
                        </div>
                        <div class="pt-px-70 pr-px-30">
                            Мы фрезеруем формы для литья из <strong>Д16Т</strong>. Почему дюраль, а не сталь?
                            <br>
                            Наши заказчики ищут мелкосерейное литье и недорогие пресс формы. Формы из стали такими не
                            являются.
                            <br>
                            Дюраль же отлично себя зарекомендовала в производстве . Д16Т не так дорог и обработка его
                            тоже
                            не так трудозотратна. Формы легко ремонтируются напылением, сваркой. И их всегда можно
                            заказать
                            повторно. Чтобы отлить пару тысяч изделий, которые никогда не окупят стоимость стальной
                            оснастки. Дюралевую форму можно поставить за несколько дней, стальную же придется ждать
                            иногда
                            годами.
                        </div>
                    </div>
                    <ul class="m-0">
                        <li>Быстро.</li>
                        <li>Качественно</li>
                        <li>Ремонтопригодность</li>
                        <li>Низкая стоимость</li>
                    </ul>
                </div>
                <div class="img-width-text pl-px-30">
                    <div class="img">
                        <img src="{{asset('img/form with orange detail.webp')}}" alt="">
                    </div>
                    <div class="text-top">
                        ДЮРАЛЬ&nbsp&nbsp
                        <div class="d-flex flex-column align-items-center">
                            <div class="vertical-triangle"></div>
                            <div class="orange-ball"></div>
                        </div>
                        &nbsp&nbsp<strong>Д16Т</strong>
                    </div>
                    <div class="text-bottom pt-px-40">
                        Дюраль Д16Т наиболее "выгодный" Вам вариант материала для формы. Дюраль отлично зарекомендовала себя в соотношении цена-качество. У нее большая теплопроводность, долговечность, твердость. Поэтому мы всегда рекомендуем Нашим Заказчикам выбирать именно ее .
                    </div>
                </div>
            </div>
            <div class="uslugi-text-img-block-2 mt-px-185">
                <div class="title-first-letter">
                    Формы для силикона
                </div>
                <div class="wide-gray-block d-flex justify-content-between mt-px-20">
                    <div class="d-flex h-100 gap-4">
                        <img src="{{asset('img/graphic form1.webp')}}" alt="">
                        <div class="d-flex flex-column justify-content-between">
                            <div>Пуансон</div>
                            <div>Матрица</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 pr-px-80">
                        <div class="d-flex flex-column align-items-center">
                            <div class="vertical-triangle"></div>
                            <div class="orange-ball"></div>
                        </div>
                        <div class="right-block">
                            Материал форм
                            <br>
                            ДЮРАЛЬ <strong>Д16Т</strong>
                        </div>
                    </div>
                </div>
                <div class="grid-block-3 pt-px-20">
                    <div class="left-block">
                        Силиконовые резины прессуют под действием температуры. Определенное количество резины закладывается в нижнюю часть формы. Затем сильно ( пресс) прижимаеют верхней частью. Разогретая резина равномерно заполняет все полости и застывает. Так делают, например, кондитерские силиконовые формы для выпечки.
                    </div>
                    <div class="central-block">
                        <img src="{{asset('img/silicone form.webp')}}" alt="">
                        <div class="text p-px-10">
                            силиконовая форма для выпечки
                        </div>
                    </div>
                    <div class="right-block">
                        <strong>Для чего формы</strong>
                        <ul>
                            <li>Формы для выпечки, мыла, шоколада.</li>
                            <li>рыболовные приманки,</li>
                            <li>браслеты,</li>
                            <li>подставки и много другое..</li>
                        </ul>
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
