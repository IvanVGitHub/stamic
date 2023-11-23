<div class="container animations">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade position-relative"
         data-bs-ride="carousel"
         data-bs-wrap="true"
{{--         keyboard="true"--}}
         data-bs-keyboard="true"
{{--         touch="true"--}}
         data-bs-touch="true">
        <div class="carousel-inner">
            <div class="carousel-item active"
                 data-bs-interval="10800"
            >
                <video
{{--                    autoplay--}}
{{--                    loop--}}
                    muted
                    preload="metadata"
                    playsinline
                >
                    <source src="video/m1.mp4" type="video/mp4">
                </video>
                <div class="carousel-caption">
                    <div class="index-title">Вакуумная формовка</div>
                </div>
            </div>
            <div class="carousel-item"
                 data-bs-interval="8000"
            >
                <video
{{--                    autoplay--}}
{{--                    loop--}}
                    muted
                    preload="metadata"
                    playsinline
                >
                    <source src="video/m2-1.mp4" type="video/mp4">
                </video>
                <div class="carousel-caption">
                    <div class="index-title">Литье под давлением</div>
                </div>
            </div>
            <div class="carousel-item"
                 data-bs-interval="13467"
            >
                <video
{{--                    autoplay--}}
{{--                    loop--}}
                    muted
                    preload="metadata"
                    playsinline>
                    <source src="video/m3.mp4" type="video/mp4">
                </video>
                <div class="carousel-caption">
                    <div class="index-title">3D печать</div>
                </div>
            </div>
            <div class="carousel-item"
                 data-bs-interval="7000"
            >
                <video
{{--                    autoplay--}}
{{--                    loop--}}
                    muted
                    preload="metadata"
                    playsinline>
                    <source src="video/m4-3.mp4" type="video/mp4">
                </video>
                <div class="carousel-caption">
                    <div class="index-title">Фрезерование ЧПУ</div>
                </div>
            </div>
            <div class="carousel-item"
                 data-bs-interval="7000"
            >
                <video
{{--                    autoplay--}}
{{--                    loop--}}
                    muted
                    preload="metadata"
                    playsinline>
                    <source src="video/m5-1.mp4" type="video/mp4">
                </video>
                <div class="carousel-caption">
                    <div class="index-title">3D моделирование</div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev position-absolute" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next position-absolute" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>
</div>

@push('custom_scripts')
    <script type="text/javascript">
        let indexCarousel = $("#carouselExampleCaptions");
        function indexCarouselRunVideo(){
            var vids = $(this).find(".active video");
            if(vids.length > 0){
                vids[0].pause();
                vids[0].currentTime = 0;
                vids[0].play();
            }
        }
        $(window).ready(indexCarouselRunVideo);
        indexCarousel.on('slid.bs.carousel', indexCarouselRunVideo);
    </script>
@endpush
