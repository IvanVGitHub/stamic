@extends('layouts.app')

@section('header-title')
@endsection

@section('content')
    <x-index.section id="start" header="">
        <div class="text-center " id="">
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
        <div class="pl-px-115">
            <div class="index-block-title">
                Примеры проектов
            </div>
            <div class="index-block3">
                <div class="index-block3-list">
                    <div class="index-block3-list-item">
                        3Д
                        <div class="svg-arrow">
                            <svg preserveAspectRatio="none" data-bbox="19.5 47.5 161 105.001" viewBox="19.5 47.5 161 105.001" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true">
                                <g>
                                    <path d="M100 52.558c5.054 0 10.111 1.912 13.944 5.735l55.772 55.611c7.668 7.646 7.668 20.158 0 27.804-3.833 3.823-8.887 5.735-13.944 5.735-5.054 0-10.108-1.912-13.941-5.735L100 100l-41.829 41.707c-3.835 3.823-8.889 5.735-13.944 5.735s-10.111-1.912-13.944-5.735c-7.668-7.646-7.668-20.158 0-27.804l55.772-55.61v-.001c3.834-3.823 8.891-5.734 13.945-5.734m0-5.058c-6.619 0-12.831 2.558-17.487 7.202l-55.772 55.611c-4.668 4.656-7.241 10.868-7.241 17.493 0 6.625 2.573 12.838 7.241 17.493 4.656 4.644 10.868 7.202 17.487 7.202s12.831-2.558 17.487-7.202L100 107.124l38.288 38.175c4.656 4.644 10.868 7.202 17.484 7.202 6.619 0 12.831-2.558 17.487-7.202 4.668-4.655 7.241-10.868 7.241-17.493s-2.573-12.838-7.241-17.493l-55.772-55.611C112.831 50.058 106.619 47.5 100 47.5z"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="index-block3-list-item">
                        МДФ
                        <div class="svg-arrow">
                            <svg preserveAspectRatio="none" data-bbox="19.5 47.5 161 105.001" viewBox="19.5 47.5 161 105.001" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true">
                                <g>
                                    <path d="M100 52.558c5.054 0 10.111 1.912 13.944 5.735l55.772 55.611c7.668 7.646 7.668 20.158 0 27.804-3.833 3.823-8.887 5.735-13.944 5.735-5.054 0-10.108-1.912-13.941-5.735L100 100l-41.829 41.707c-3.835 3.823-8.889 5.735-13.944 5.735s-10.111-1.912-13.944-5.735c-7.668-7.646-7.668-20.158 0-27.804l55.772-55.61v-.001c3.834-3.823 8.891-5.734 13.945-5.734m0-5.058c-6.619 0-12.831 2.558-17.487 7.202l-55.772 55.611c-4.668 4.656-7.241 10.868-7.241 17.493 0 6.625 2.573 12.838 7.241 17.493 4.656 4.644 10.868 7.202 17.487 7.202s12.831-2.558 17.487-7.202L100 107.124l38.288 38.175c4.656 4.644 10.868 7.202 17.484 7.202 6.619 0 12.831-2.558 17.487-7.202 4.668-4.655 7.241-10.868 7.241-17.493s-2.573-12.838-7.241-17.493l-55.772-55.611C112.831 50.058 106.619 47.5 100 47.5z"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="index-block3-list-item">
                        Д16Т
                        <div class="svg-arrow">
                            <svg preserveAspectRatio="none" data-bbox="19.5 47.5 161 105.001" viewBox="19.5 47.5 161 105.001" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true">
                                <g>
                                    <path d="M100 52.558c5.054 0 10.111 1.912 13.944 5.735l55.772 55.611c7.668 7.646 7.668 20.158 0 27.804-3.833 3.823-8.887 5.735-13.944 5.735-5.054 0-10.108-1.912-13.941-5.735L100 100l-41.829 41.707c-3.835 3.823-8.889 5.735-13.944 5.735s-10.111-1.912-13.944-5.735c-7.668-7.646-7.668-20.158 0-27.804l55.772-55.61v-.001c3.834-3.823 8.891-5.734 13.945-5.734m0-5.058c-6.619 0-12.831 2.558-17.487 7.202l-55.772 55.611c-4.668 4.656-7.241 10.868-7.241 17.493 0 6.625 2.573 12.838 7.241 17.493 4.656 4.644 10.868 7.202 17.487 7.202s12.831-2.558 17.487-7.202L100 107.124l38.288 38.175c4.656 4.644 10.868 7.202 17.484 7.202 6.619 0 12.831-2.558 17.487-7.202 4.668-4.655 7.241-10.868 7.241-17.493s-2.573-12.838-7.241-17.493l-55.772-55.611C112.831 50.058 106.619 47.5 100 47.5z"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="pt-5">
                        <button class="button-detailed">Подробнее</button>
                    </div>
                </div>
                <div class="index-block3-group-img">
                    <div class="index-img-left">
                        <img src="{{asset('img/form1.webp')}}" alt="">
                    </div>
                    <div class="index-img-center">
                        <img src="{{asset('img/form2.webp')}}" alt="">
                    </div>
                    <div class="index-img-right">
                        <img src="{{asset('img/form3.webp')}}" alt="">
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
