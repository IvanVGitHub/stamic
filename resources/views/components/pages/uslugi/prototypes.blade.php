<div class="uslugi-text-img-block-4" id="prototypes">
    <div class="wrapper-1314">
        <div class="d-block text-center text-md-start">
            <div class="title-first-letter flag-forms m-0" id="p-title">
                <h1>Прототипы</h1>
            </div>
        </div>
    </div>

    <div class="prototypes-block">
        <div>
            <div class="block-4-grid-block-3-left-title" id="prototypes-padding-left-title">
                <div class="block-4-grid-block-3-left-title-content">
                    Прототип - это образец будущего изделия.
                </div>
            </div>
            <div class="block-4-grid-block-3-left-text" id="prototypes-padding-left-text">
                <div class="block-4-grid-block-3-left-text-content">
                    Его делают, чтобы оценить дизайн, функционал. Прототип можно изготовить и в ручную. Мы предпочитаем
                    более технологичный подход. Это Фрезерование на станке с ЧПУ или послойная 3D печать.
                    <br>
                    Выбор способа изготовления прототипа зависит от сложности и размера. Как правило, большие вещи,
                    например, корпус робота проще и дешевле отфрезеровать. Небольшие вещи, например, прототип
                    пластиковой коробки, будет проще напечатать на 3D принтере.
                </div>
            </div>
        </div>
        <div class="d-flex flex-grow-1 prototypes-images" id="triangles-block">
            <div class="">
                <div class="block-4-img-left">
                    <img class="object-fit-cover w-100" src="{{asset('img/pistol grip.webp')}}" alt="Декоративная часть пистолетной рукояти">
                    <div class="block-triangle-container left" id="triangle-left">
                        <div class="block-4-triangle">
                            <div>
                                3D печать
                            </div>
                            <div>
                                ABS
                                <br>
                                PLA
                            </div>
                        </div>
                    </div>
                    <div class="v-line vl-p" id="vl-p"></div>
                </div>
                <div class="text-under-img">
                    пистолетная рукоятка
                </div>
            </div>
            <div class="">
                <div class="block-4-img-right">
                    <img class="object-fit-cover w-100" src="{{asset('img/monolasts.webp')}}" alt="Моноласты">
                    <div class="block-triangle-container right" id="triangle-right">
                        <div class="block-4-triangle">
                            <div>
                                Фрезеровка
                            </div>
                            <div>
                                Пластик
                                <br>
                                МДФ
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-under-img flag-prototypes">
                    прототип моноласты в масштабе 1:1
                </div>
            </div>
        </div>
    </div>
</div>

@push('custom_scripts')
    <script>
        registerForAnimation('p-title',[
            {id:'p-title', addedClass:'moved', delay:1000},
        ]);
        registerForAnimation("triangles-block", [
            {id:"triangle-left", addedClass:"btc-show", delay:1500},
            {id:"triangle-right", addedClass:"btc-show", delay:3000},
            {id:"vl-p", addedClass:"moved", delay:500},
        ])
    </script>
@endpush

<script>
    {{--вычисляем расстояние от родительского блока до левого края страницы и ставим справа дочерний блок с вычисленной величиной--}}
    function calculateGrayBlock(){
        let div = document.getElementById('matrixes'),
            rect = div.getBoundingClientRect(),
            title = document.getElementById("prototypes-padding-left-title"),
            text = document.getElementById("prototypes-padding-left-text");
        title.style.paddingLeft = rect.left + "px";
        text.style.paddingLeft = rect.left + "px";
    }
    window.addEventListener("load", calculateGrayBlock);
    window.addEventListener('resize', calculateGrayBlock);
</script>
