<div class="header-mobile">
    <div class="d-flex justify-content-between align-items-center p-2">
        <a href="{{--{{route('main')}}--}}" class="header-mobile-logo">
            <img src="{{--{{asset(config('utility.animatedLogo'))}}--}}" class="main-logo-image" alt="{{--{{config('seo.defaultSiteName')}}--}}">
        </a>
        <div class="d-flex gap-2">
            <button data-bs-toggle="modal" data-bs-target="#callForm"
                    class="header-mobile-button">
                <i class="fa-solid fa-phone"></i>
            </button>
            <button class="header-mobile-button" onclick="toggleMobileMenu()"><i class="fa-solid fa-bars"></i></button>
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
