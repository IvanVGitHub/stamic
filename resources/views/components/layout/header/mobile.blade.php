<div class="header-mobile">
    <div class="d-flex justify-content-between align-items-center p-2">
        <div class="d-flex gap-2 align-items-center">
            <a href="{{route('main')}}" class="header-mobile-logo">
                <img src="{{asset('img/favicon.png')}}" alt="Stamic">
            </a>
            <div class="text-size-18">
                @yield('header-title')
            </div>
        </div>

        <div class="d-flex gap-2">
            <a href="tel:+79509120591" class="header-mobile-button">
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
