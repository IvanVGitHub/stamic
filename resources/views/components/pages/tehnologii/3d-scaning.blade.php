<div class="wrapper-1314">
    <div class="title-first-letter">
        <span>3D</span> сканирование
    </div>
    <div class="wrapper-1218">
        <div class="d-flex tehnologii-3d-scaning">
            <div class="pt-px-20 z-1">
                <div class="tehnologii-text">
                    Мы используем оптический 3D сканер с разрешением до <strong>0.01мм</strong>.
                    <br>
                    Сможем отсканировать любой объект или деталь. Будь то автомобиль или ювелирное изделие.
                    <br>
                    На выходе получаем 3D модель, полностью повторяющую оригинал.
                </div>
                <div class="minor-text flag-tehnologii-3d-scaning pt-px-15 pt-px-md-50">
                    Наши специалисты смогут осуществить
                    <br class="d-lg-inline">
                    выезд для сканирования.
                    <div class="d-flex flex-column align-items-center gray-triangle-boll pr-px-md-30 pr-px-10">
                        <div class="vertical-triangle"></div>
                        <div class="orange-ball"></div>
                    </div>
                </div>
                <div class="tehnologii-3d-scaning-cards">
                    <div class="card-thumbnails-content position-relative">
                        <div class="tehnologii-hover-image-scale">
                            <img src="{{asset('img/sea-star.webp')}}" alt="">
                        </div>
                        <div class="tehnologii-hover-image-scale">
                            <img src="{{asset('img/scan-drill.webp')}}" alt="">
                        </div>
                        <div class="tehnologii-hover-image-scale">
                            <img src="{{asset('img/clothespin.webp')}}" alt="">
                        </div>
                        <div class="wide-to-right-gray-translucent-background position-absolute" id="parent-wide-gray">
                            <div class="shred-right" id="wide-gray"></div>
                        </div>
                    </div>
                    <div class="text-center">
                        примеры сканирования
                    </div>
                </div>
            </div>
            <div class="tehnologii-3d-scaning-image">
                <img src="{{asset('img/scaning-cameras.webp')}}" alt="">
            </div>
        </div>
    </div>
</div>

<script>
    {{--вычисляем расстояние от родительского блока до правого края страницы и ставим справа дочерний блок с вычисленной величиной--}}
    function calculateGrayBlock(){
        let div = document.getElementById('parent-wide-gray'),
            rect = div.getBoundingClientRect(),
            d = document.documentElement,
            rectD = d.getBoundingClientRect(),
            result = rectD.right - rect.right,
            wideGray = document.getElementById("wide-gray");
        wideGray.style.width = result + "px";
    }
    window.addEventListener("load", calculateGrayBlock);
    window.addEventListener('resize', calculateGrayBlock);
</script>
