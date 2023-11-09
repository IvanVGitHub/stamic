<div class="wrapper-1314 pb-px-20">
    <div class="title-first-letter">
        <span>3D</span> печать
    </div>

    <div class="wrapper-1218 pt-px-20">
        <div class="tehnologii-block2">
            <div class="block-3d-printing-description tehnologii-text" id="parent-wide-gray-border">
                Мы печатаем прототипы и детали на 3d принтерах собственного производства.
                Высочайшая точность, скорость и качество проверенно сотнями часов печати. Печатаем ABS и PLA
                пластиками.
                Возможна печать с водорастворимыми поддержками.
                <div class="shred-left" id="wide-gray-border"></div>
            </div>
            <div class="position-relative flag-right">
                <div class="card-thumbnails flag-3d-printing">
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
            </div>
        </div>
    </div>
</div>

<script>
    {{--вычисляем расстояние от родительского блока до правого края страницы и ставим справа дочерний блок с вычисленной величиной--}}
    function calculateGrayBlock(){
        let div = document.getElementById('parent-wide-gray-border'),
            rect = div.getBoundingClientRect(),
            wideGray = document.getElementById("wide-gray-border");
        wideGray.style.width = rect.left + "px";
    }
    window.addEventListener("load", calculateGrayBlock);
    window.addEventListener('resize', calculateGrayBlock);

/*    {{--вычисляем расстояние от родительского блока до правого края страницы и ставим справа дочерний блок с вычисленной величиной--}}
    function calculateGrayBlock() {
        let div = document.getElementById('wide-printing-gray'),
            rect = div.getBoundingClientRect(),
            wideGray = getComputedStyle(div);
        div.style.transform = `translate(-${rect.left}px, ${getTranslateXY(wideGray).translateY}px)`;
        div.style.paddingLeft = `${rect.left}px`;
        div.style.width = `${rect.left * 3}px`;
    }

    {{--получаем отдельные зачения "X" и "Y" "transform: translate(_px,_px)"--}}
    function getTranslateXY(elementStyle) {
        const matrix = new DOMMatrixReadOnly(elementStyle.transform)
        return {
            translateX: matrix.m41,
            translateY: matrix.m42
        }
    }

    window.addEventListener("load", calculateGrayBlock);
    window.addEventListener('resize', calculateGrayBlock);
    $(document).ready(function(){
        calculateGrayBlock();
    })*/
</script>
