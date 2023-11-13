<div class="container">
    <div class="index-title-block" id="index-block-title">
        <div class="index-title pb-3">
            Формы для литья
        </div>
        <div class="index-block-subtitle">
            Лучшая реклама любой работы - её качество!
            <div class="index-under-subtitle-line left" id="movelineleft"></div>
            <div class="index-under-subtitle-line right" id="movelineright"></div>
        </div>
        <div class="index-under-subtitle-container">
            <div class="index-under-subtitle-container-triangle" id="transparenttriangle"></div>
        </div>
        @push('custom_scripts')
            <script>
                registerForAnimation('index-block-title',[
                    {id:'movelineleft', addedClass:'moved', delay:300},
                    {id:'movelineright', addedClass:'moved', delay:300},
                    {id:'transparenttriangle', addedClass:'moved', delay:1500},
                ]);
            </script>
        @endpush
    </div>
    <div class="d-flex justify-content-center w-100">
        <div>
            <div class="index-block1-title-and-box">
                <div class="index-block-title flag-our-forms">
                    Наши формы
                </div>
                <div class="index-block1-empty-box"></div>
            </div>
            <div class="index-block1">
                <div class="index-block-text tab">
                    <div>
                        Корексы, блистеры, ложементы, формы для мыла, шоколада, тротуарной плитки, силиконовые формы
                        для выпечки, формы для литья пластиков, матрицы, прототипы и мастер модели,..
                    </div>
                    <br>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            Для них нужны &nbsp&nbsp<strong>ФОРМЫ.</strong>
                        </div>
                        <a href="{{route('uslugi')}}">
                            <button class="button-detailed">Подробнее</button>
                        </a>
                    </div>
                </div>
                <div class="index-block1-img" id="parent-wide-gray">
                    <div class="shred-right flag-our-forms" id="wide-gray"></div>
                </div>
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
            rectD = d.getBoundingClientRect();
        let result = rectD.right - rect.right;
        let wideGray = document.getElementById("wide-gray");
        wideGray.style.width = result + "px";
    }
    window.addEventListener("load", calculateGrayBlock);
    window.addEventListener('resize', calculateGrayBlock);
</script>
