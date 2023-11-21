<div class="wrapper-1314" id="matrixes">
    <div class="d-block text-center text-md-start">
        <div class="title-first-letter flag-forms" id="m-title">
            Матрицы
        </div>
    </div>

    <div class="uslugi-text-img-block-3">
        <div class="uslugi-text-img-block-3-content">
            <div class="matrixes-image-block">
                <img src="{{asset('img/form mdf.webp')}}" alt="">
                <div class="text-under-img">
                    матрица спинки автокресла
                </div>
            </div>
            <div class="matrixes-right-block">
                <div class="position-relative">
                    <div class="block-3-title">
                        Для чего делают матрицу
                    </div>
                    <div class="block-3-text">
                        Матрица нужна чтобы получить "скорлупу", чаще всего из стеклопластика. Скорлупа может служить
                        как формой для вакуумной формовки, так и бампером или крылом автомобиля.
                        <br>
                        Если планируемая скорлупа сложной формы, с поднутрениями, матрицы могут быть разборные, из
                        нескольких частей. Вынуть изделие не составит труда, просто разобрав матрицу.
                        <br>
                        Вручную изготовить сложный элемент кузова автомобиля очень не просто. Еще и соблюдая все
                        размеры. Сделав матрицу на станке с ЧПУ по компьютерной модели, вы точно будете уверены, что
                        получите предсказуемый результат.
                        <br>
                        Матрицы мы изготавливаем из МДФ и покрываем их защитными составами.
                    </div>
                    <div class="v-line vl-m" id="vl-m"></div>
                </div>
                <div class="block-3-subtext" id="parent-wide-darkgray">
                    <div class="orange-ball flag-animate" id="orange-ball-5"></div>
                    <div>Материал формы</div>
                    <div>МДФ</div>
                    <div class="shred-right flag-matrix" id="wide-darkgray"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('custom_scripts')
    <script>
        registerForAnimation('m-title',[
            {id:'m-title', addedClass:'moved', delay:1000},
            {id:'vl-m', addedClass:'moved', delay:500},
        ]);
        registerForAnimation('orange-ball-5',[
            {id:'orange-ball-5', addedClass:'moved', delay:500},
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
        wideGray.style.width = result - 40 + "px"; //40 - это отступ от края страницы, т. к. margin в данном случае не работает
    }
    window.addEventListener("load", calculateGrayBlock);
    window.addEventListener('resize', calculateGrayBlock);
</script>
