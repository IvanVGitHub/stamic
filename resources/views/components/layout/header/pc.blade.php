<div class="header-content">
    <div class="container-xxl">
        <div class="d-flex justify-content-between align-items-center p-2">
            <div>
                <a href="{{route('main')}}">
                    <img src="{{asset('img/logo.webp')}}" style="height: 30px; width:auto;" alt="{{route('main')}}">
                </a>
            </div>
            <div class="d-flex gap-2 align-items-center">
                <div class="dropdown wm-dropdown">
                    <a href="{{route('uslugi')}}" class="header-link dropdown-toggle" aria-expanded="false">Формы</a>
                    <ul class="dropdown-menu wm-header-dropdown">
                        <li><a class="dropdown-item" href="">Вакуум</a></li>
                        <li><a class="dropdown-item" href="">Литье</a></li>
                        <li><a class="dropdown-item" href="">Силикон</a></li>
                        <li><a class="dropdown-item" href="">Матрицы</a></li>
                        <li><a class="dropdown-item" href="">Прототипы</a></li>
                    </ul>
                </div>
                <div class="dropdown wm-dropdown">
                    <a href="{{route('tehnologii')}}" class="header-link dropdown-toggle" aria-expanded="false">Формы</a>
                    <ul class="dropdown-menu wm-header-dropdown">
                        <li><a class="dropdown-item" href="">3D моделирование</a></li>
                        <li><a class="dropdown-item" href="">3D печать</a></li>
                        <li><a class="dropdown-item" href="">3D сканирование</a></li>
                        <li><a class="dropdown-item" href="">Фрезеровка</a></li>
                        <li><a class="dropdown-item" href="">Литье под давлением</a></li>
                        <li><a class="dropdown-item" href="">Вакуумная формовка</a></li>
                    </ul>
                </div>
                <a href="{{route('proekty')}}" class="header-link">
                    Проекты
                </a>
                <a href="{{route('kontakty')}}" class="header-link">
                    Контакты
                </a>
                <a href="{{route('kontakty')}}" class="header-link">
                    +7 950 912 05 91
                    <br/>
                    +7 952 018 33 46
                </a>
            </div>
        </div>
        <div class="container-xxl container-fluid">
            <h3 class="section-title">
                @yield('header-title')
            </h3>
        </div>
        <hr/>
    </div>
</div>
