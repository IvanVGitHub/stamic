<div class="header-content">
    <div class="header-wrapper">
        <div class="d-flex justify-content-between">
            <div class="d-inline-block">
                <a href="{{route('main')}}" class="header-logo text-center">
                    <img src="{{asset('img/logo-light.webp')}}"
                         class="header-logo-img" alt="{{route('main')}}">
                    <div class="header-logo-text">
                        Формы.Пресс-формы.
                    </div>
                </a>
            </div>
            <div class="d-inline-block">
                <div class="d-flex header-navigation align-items-start">
                    <a href="{{route('uslugi')}}" class="header-navigation-link">
                        Формы
                    </a>
                    <a href="{{route('tehnologii')}}" class="header-navigation-link">
                        Технологии
                    </a>
                    <a href="{{route('proekty')}}" class="header-navigation-link">
                        Проекты
                    </a>
                    <a href="{{route('kontakty')}}" class="header-navigation-link">
                        Контакты
                    </a>
                    <a href="{{route('kontakty')}}" class="header-navigation-phone">
                        <div class="d-flex flex-column gap-3">
                            <div>
                                +7 950 912 05 91
                            </div>
                            <div>
                                +7 952 018 33 46
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container container-fluid">
            <h3 class="section-title">
                @yield('header-title')
            </h3>
        </div>
        <hr class="header-hr"/>
    </div>
</div>
