<div class="wrapper-1314 pb-px-20" id="injection">
    <div class="d-block text-center text-md-start">
        <div class="title-first-letter">
            Литье под давлением
            <div class="to-right-arrow" id="arrow-injection"></div>
        </div>
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
            <div class="card-thumbnails flag-injection">
                <div class="card-thumbnails-content">
                    <div class="tehnologii-hover-image-scale">
                        <img src="{{asset('img/casting-example-1.jpg')}}" alt="">
                    </div>
                    <div class="tehnologii-hover-image-scale">
                        <img src="{{asset('img/casting-example-2.jpg')}}" alt="">
                    </div>
                    <div class="tehnologii-hover-image-scale">
                        <img src="{{asset('img/casting-example-3.jpg')}}" alt="">
                    </div>
                </div>
                <div class="card-thumbnails-description">
                    примеры литья
                </div>
            </div>
            <div class="shred-right flag-injection-wide-darkgray" id="wide-darkgray"></div>
        </div>
    </div>
</div>

@push('custom_scripts')
    <script>
        registerForAnimation('injection',[
            {id:'arrow-injection', addedClass:'moved', delay:1000},
        ]);
    </script>
@endpush

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
