<div class="header-mobile-side-menu">
    <div class="header-mobile-content p-2" onclick="preventToggelMobileMenu(this)">
        <div class="mb-3 d-flex justify-content-between align-items-center position-absolute top-0 start-0 w-100 p-2 bg-default"
             style="z-index:300; height: 56px">
            <a href="{{route('main')}}" class="header-mobile-logo">
                <img class="main-logo-image w-50" src="{{asset('img/logo-light.webp')}}" alt="stamic">
            </a>
            <button class="header-mobile-button" onclick="toggleMobileMenu()"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="header-menu-main-content pt-px-50">
            <a href="{{route('main')}}" class="header-link">
                Главная
            </a>
            <a href="{{route('uslugi')}}" class="header-link">
                Формы
            </a>
            <a href="{{route('tehnologii')}}" class="header-link">
                Технологии
            </a>
            <a href="{{route('proekty')}}" class="header-link">
                Проекты
            </a>
            <a href="{{route('kontakty')}}" class="header-link mb-3">
                Контакты
            </a>

            <div class="mt-4">
                <div class="header-link">Связаться с нами</div>
                <a href="tel:+79509120591" class="header-link ms-3">+7 950 912 05 91</a>
                <a href="tel:+79520183346" class="header-link ms-3">+7 952 018 33 46</a>
            </div>

            <a href="https://t.me/AndreMatro" class="header-link mt-px-20">
                <img class="messenger w-100" src="{{asset('img/telegram.png')}}" alt="stamic">&nbsp;&nbsp;Telegram
            </a>
            <a href="https://www.instagram.com/stamic_ru/" class="header-link">
                <img class="messenger w-100" src="{{asset('img/instagram.png')}}" alt="stamic">&nbsp;&nbsp;Фото
            </a>
        </div>
    </div>
</div>
