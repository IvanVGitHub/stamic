<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{trim(View::getSection('meta-description', config('seo.defaultDescription')))}}"/>
    <meta name="keywords" content="{{config('seo.defaultTitle').','.trim(View::getSection('meta-keywords'))}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="author"  content="Bedivierre"/>
    <meta name="MobileOptimized" content="380" />

    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{config('seo.defaultTitle')}}">
    <meta property="og:description" content="{{trim(View::getSection('meta-description', config('seo.defaultDescription')))}}">
    <meta property="og:url" content="{{config('app.url')}}">
    <meta property="og:site_name" content="{{config('seo.defaultSiteName')}}">
    <meta property="og:image" content="{{trim(View::getSection('meta-image', '/img/favicon.png'))}}">
    <meta name="google-site-verification" content="{{config('seo.googleSiteVerification')}}" />
    <meta name="yandex-verification" content="{{config('seo.yandexSiteVerification')}}" />

    <!-- favicon links -->
{{--    <link rel="shortcut icon" type="image/x-icon" href="{{asset("/img/favicon.ico")}}" />--}}
    <link rel="icon" type="image/png" href="{{asset("/img/favicon.png")}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open Sans Condensed:ital,wght@0,300;0,700;1,300' rel='stylesheet'>
    <link rel="icon" href="{{asset("/img/favicon.ico")}}" sizes="32x32" type="image/x-icon">
    <link rel="icon" href="{{asset("/img/favicon.ico")}}" sizes="150x150" type="image/x-icon">
    @stack('meta')

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

{{--    <link href="{{asset("/css/normalize.css")}}" rel="stylesheet" type="text/css" />--}}
{{--    <link href="{{asset("/css/app.css")}}" rel="stylesheet" type="text/css" />--}}

    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"--}}
    {{--          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="--}}
    {{--          crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
    {{--    <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">--}}
    <link href="{{asset("/css/fa-all.min.css")}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700;900&display=swap">--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Jost&display=swap" rel="stylesheet">
    {{--    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>--}}

    <link href="{{asset("/css/jquery-ui.min.css")}}" rel="stylesheet" type="text/css" />
    @livewireStyles

    <link href="{{asset("/css/main.css")}}" rel="stylesheet" type="text/css" />
    {{--    <link rel="manifest" href="{{asset('/manifest.json')}}" />--}}

    @stack('custom_styles')
    @stack('pre_scripts')

    <title>@yield('title', config('seo.defaultTitle'))</title>
</head>
<body class="antialiased m-0">
    @stack('body_start')
    <div class="app">
        @yield('master_content')
    </div>
    <div>
        @stack('modals')
    </div>


    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#available-libraries -->
    {{--    <script src="https://www.gstatic.com/firebasejs/8.2.10/firebase-app.js"></script>--}}
    {{--    <script src="https://www.gstatic.com/firebasejs/8.2.10/firebase-messaging.js"></script>--}}
    {{--    <script src="{{asset("/js/firebase.js")}}"></script>--}}
    @livewireScripts

    <script src="{{asset("/js/app.js")}}"></script>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>


    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.js"--}}
    {{--        integrity="sha512-TsDUjQW16/G8fz4gmgTOBW2s2Oi6TPUtQ6/hm+TxZZdkQtQrK5xEFIE0rgDuz5Cl1xQU1u3Yer7K5IuuBeiCqw=="--}}
    {{--        crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
    {{--<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>--}}
    <script src="{{asset("/js/fa-all.min.js")}}"></script>

    <script src="{{asset("/js/jquery-3.5.1.min.js")}}"></script>
    {{--    <script src="{{asset("/js/jquery-ui.min.js")}}"></script>--}}
    <script src="{{asset("/js/jquery.mask.js")}}"></script>
    {{--    <script src="{{asset("/js/owl.carousel.min.js")}}"></script>--}}
    <script src="{{asset("/js/common.js")}}"></script>

    @stack('custom_scripts')
    @stack('body_end')
</body>


</html>
