{{--<div class="header-mobile">--}}
{{--    <div class="d-flex justify-content-between align-items-center p-2">--}}
{{--        <a href="{{route('main')}}" class="header-mobile-logo">--}}
{{--            <img src="{{asset('img/favicon.png')}}" alt="Stamic">--}}
{{--        </a>--}}
{{--        <div class="d-flex gap-2">--}}
{{--            <a href="tel:+79509120591">--}}
{{--                <button class="header-mobile-button">--}}
{{--                    <i class="fa-solid fa-phone"></i>--}}
{{--                </button>--}}
{{--            </a>--}}
{{--            <button class="header-mobile-button" onclick="toggleMobileMenu()">--}}
{{--                <i class="fa-solid fa-bars"></i>--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<div class="header-mobile">
    <div class="d-flex justify-content-between align-items-center p-2">
        <a href="{{route('main')}}" class="header-mobile-logo">
            <img src="{{asset('img/favicon.png')}}" alt="Stamic">
        </a>
        <div class="d-flex gap-2">
            <a href="tel:+79509120591" class="header-mobile-button">
{{--                    <img src="{{asset('img/phone-receiver(1).png')}}" class="header-mobile-button" alt="">--}}
                <i class="fa-solid fa-phone fa-lg"></i>
            </a>
            <button class="header-mobile-button" onclick="toggleMobileMenu()">
                <i class="fa-solid fa-bars fa-lg"></i>
            </button>
        </div>
    </div>
</div>

@once
    @push("custom_scripts")
        <script>
            function preventToggelMobileMenu(e){
                if(e.preventDefault)
                    e.preventDefault();
            }
            function toggleMobileMenu(){
                $(".header-mobile-side-menu").toggleClass("show");
            }
            function closeMobileMenu(){
                $(".header-mobile-side-menu").removeClass("show");
            }
            function openMobileMenu(){
                $(".header-mobile-side-menu").addClass("show");
            }
        </script>
    @endpush
@endonce
