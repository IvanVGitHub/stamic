<div class="header-content">
    <div class="header-wrapper">
        <div class="d-flex justify-content-between">
            <div class="d-inline-block logo-fhd">
                <a href="{{route('main')}}" class="header-logo text-center">
                    <img src="{{asset('img/logo-light.webp')}}"
                         class="header-logo-img" alt="{{route('main')}}">
                    <div class="header-logo-text">
                        Формы.Пресс-формы.
                    </div>
                </a>
            </div>
            <div class="d-inline-block logo-l-lg">
                <a href="{{route('main')}}" class="header-logo text-center">
                    <img src="{{asset('img/favicon.png')}}"
                         class="header-logo-img" alt="{{route('main')}}">
                </a>
            </div>
            <div class="d-inline-block">
                <div class="d-flex header-navigation align-items-start">
                    <a href="{{route('uslugi')}}" class="header-navigation-link {{request()->route()->getName() == 'uslugi' ? 'selected' : ''}}">
                        Формы
                    </a>
                    <a href="{{route('tehnologii')}}" class="header-navigation-link {{request()->route()->getName() == 'tehnologii' ? 'selected' : ''}}">
                        Технологии
                    </a>
                    <a href="{{route('proekty')}}" class="header-navigation-link {{request()->route()->getName() == 'proekty' ? 'selected' : ''}}">
                        Проекты
                    </a>
                    <a href="{{route('kontakty')}}" class="header-navigation-link {{request()->route()->getName() == 'kontakty' ? 'selected' : ''}}">
                        Контакты
                    </a>
                    <div class="d-flex flex-column gap-3">
                        <a class="header-navigation-phone" href="tel:{{config('utility.phone')}}">{{config('utility.phone-show')}}</a>
                        <a class="header-navigation-phone" href="tel:{{config('utility.phone2')}}">{{config('utility.phone2-show')}}</a>
                    </div>
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
