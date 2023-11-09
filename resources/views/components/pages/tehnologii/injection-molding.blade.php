<div class="wrapper-1314 pb-px-20">
    <div class="title-first-letter">
        Литье под давлением
    </div>

    <div class="injection-wide-darkgray mt-px-20">
        <div class="injection-wide-darkgray-image">
            <img src="{{asset('img/detail-plastic-white.webp')}}" alt="">
        </div>
        <div class="position-relative" id="parent-wide-darkgray">
            <div class="injection-wide-darkgray-content-text">
                Если вам нужен небольшой тираж пластиковых изделий, мы сможем предоставить вам мелкосерийное литье из
                различных пластиков. Это могут быть различные полиамиды, полипропиллен, абс, резиноподобные пластики. Мы
                поможем подобрать подходящий материал и по цвету и по характерристикам.
            </div>
            <div class="w-100 d-flex justify-content-center">
                <div class="card-thumbnails-content">
                    <div class="tehnologii-hover-image-scale">
                        <img src="{{asset('img/woman_and_text.webp')}}" alt="">
                    </div>
                    <div class="tehnologii-hover-image-scale">
                        <img src="{{asset('img/flowers.webp')}}" alt="">
                    </div>
                    <div class="tehnologii-hover-image-scale">
                        <img src="{{asset('img/yellow_door.webp')}}" alt="">
                    </div>
                </div>
                <div class="card-thumbnails-description">
                    примеры 3Д печати
                </div>
            </div>
            <div class="shred-right" id="wide-darkgray"></div>
        </div>
    </div>
</div>

<script>
    {{--вычисляем расстояние от родительского блока до правого края страницы и ставим справа дочерний блок с вычисленной величиной--}}
    function calculateGrayBlock(){
        let div = document.getElementById('parent-wide-darkgray'),
            rect = div.getBoundingClientRect(),
            d = document.documentElement,
            rectD = d.getBoundingClientRect(),
            result = rectD.right - rect.right,
            wideGray = document.getElementById("wide-darkgray");
        wideGray.style.width = result + "px";
    }
    window.addEventListener("load", calculateGrayBlock);
    window.addEventListener('resize', calculateGrayBlock);
</script>
