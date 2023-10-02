<div class="header-mobile-side-menu">
    <div class="header-mobile-content p-2" onclick="preventToggelMobileMenu(this)">
        <div class="mb-3 d-flex justify-content-between align-items-center position-absolute top-0 start-0 w-100 p-2 bg-default"
             style="z-index:300; height: 56px">
            <a href="{{--{{route('main')}}--}}" class="header-mobile-logo">
                <img src="{{--{{asset(config('utility.animatedLogo'))}}--}}" class="main-logo-image" alt="Autlet shin">
            </a>
            <button class="header-mobile-button" onclick="toggleMobileMenu()"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="header-menu-main-content pt-px-50">
            <a href="{{--{{route('main')}}--}}" class="header-link">
                Главная
            </a>
            <a href="{{--{{route('service.about')}}--}}" class="header-link">
                О студии
            </a>
            <a href="{{--{{route('service.price')}}--}}" class="header-link">
                Прайс-лист
            </a>
            @can('ap_access')
                <a href="{{--{{route('adm.index')}}--}}" class="header-link">
                    Адм. панель
                </a>
            @endcan
            {{--            <a href="{{route('service.contacts')}}" class="header-link mb-3">--}}
            {{--                Контакты--}}
            {{--            </a>--}}
            <div class="mt-4">
                <a href="{{--{{route('landings.webdev')}}--}}"
                   class="header-link">Разработка сайтов</a>
                <a class="header-link ms-3" href="{{--{{route("landings.landing-page")}}--}}">Лендинг</a>
                <a class="header-link ms-3" href="{{--{{route("landings.personal-page")}}--}}">Сайт-визитка</a>
                <a class="header-link ms-3" href="{{--{{route("landings.shop")}}--}}">Интернет-магазин</a>
                <a class="header-link ms-3" href="{{--{{route("landings.custom")}}--}}">Сайт под заказ</a>
                <a class="header-link ms-3" href="{{--{{route("landings.modification")}}--}}">Переработка сайта</a>
                <a class="header-link ms-3" href="{{--{{route("landings.design")}}--}}">Web-дизайн</a>
            </div>
            <div class="">
                <a href="{{--{{route('landings.adv')}}--}}"
                   class="header-link">Продвижение сайтов</a>
                <a class="header-link ms-3" href="{{--{{route('landings.seo')}}--}}">SEO</a>
                <a class="header-link ms-3" href="{{--{{route('landings.smo')}}--}}">Продвижение в соц-сетях</a>
            </div>


            <button type="button" data-bs-target="#callForm" data-bs-toggle="modal" class="header-link mt-px-20 ">
                <i class="fa-solid fa-phone"></i>&nbsp;&nbsp;Связаться с нами
            </button>
            <a href="{{--{{route('service.contacts')}}--}}" class="header-link">
                <i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;Контакты
            </a>
            <a href="{{--{{route('service.credentials')}}--}}" class="header-link">
                <i class="fa-solid fa-circle-info"></i>&nbsp;&nbsp;Реквизиты
            </a>
        </div>
    </div>
</div>
