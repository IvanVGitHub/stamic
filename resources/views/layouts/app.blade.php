@extends('layouts.master')
@section('master_content')


<main class="main" id="main">
    <header class="header">
        asdasda
    </header>
    <div class="main-content" style="min-height: 70vh">
        @yield('content')
    </div>
    <footer class="footer">
        aasdasdadadas
    </footer>
</main>

@endsection

@push("custom_styles")

@endpush
@push("pre_scripts")
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(92611997, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true,
            ecommerce:"dataLayer"
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/92611997" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
{{--    <!-- Pixel -->--}}
{{--    <script type="text/javascript">--}}
{{--        (function (d, w) {--}}
{{--            var n = d.getElementsByTagName("script")[0],--}}
{{--                s = d.createElement("script");--}}
{{--            s.type = "text/javascript";--}}
{{--            s.async = true;--}}
{{--            s.src = "https://qoopler.ru/index.php?ref="+d.referrer+"&page=" + encodeURIComponent(w.location.href);--}}
{{--            n.parentNode.insertBefore(s, n);--}}
{{--        })(document, window);--}}
{{--    </script >--}}
{{--    <!-- /Pixel -->--}}
@endpush

@push("custom_scripts")
    <!--Start of Tawk.to Script-->
{{--    <script type="text/javascript">--}}
{{--        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();--}}
{{--        (function(){--}}
{{--            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];--}}
{{--            s1.async=true;--}}
{{--            s1.src='https://embed.tawk.to/650d6fbcb1aaa13b7a784d3c/1hau7ou2m';--}}
{{--            s1.charset='UTF-8';--}}
{{--            s1.setAttribute('crossorigin','*');--}}
{{--            s0.parentNode.insertBefore(s1,s0);--}}
{{--        })();--}}
{{--    </script>--}}
    <!--End of Tawk.to Script-->
@endpush
