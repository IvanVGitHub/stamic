<div class="wrapper-1314" id="vacuum">
    <div class="d-block text-center text-md-start">
        <div class="title-first-letter flag-forms" id="f-f-v-title">
            <h1>Формы для вакуумной формовки</h1>
        </div>
    </div>

    <div class="d-flex flex-column pt-px-20">
        <div class="uslugi-grid-block-3">
            <div class="img-with-stripe">
                <img src="{{asset('img/box.webp')}}" alt="Одноразовый контейнер для холодных продуктов">
                <div class="text-under-img flag-forms">
                    упаковка из PET
                    <div class="text-on-img">
                        <div class="text-on-img-text">
                            <div>ДЮРАЛЬ&nbsp<strong>Д16Т</strong></div>
                            <div class="orange-ball flag-animate" id="orange-ball-1"></div>
                            <div class="bold">PS и PET</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="img-with-stripe">
                <img src="{{asset('img/armor.webp')}}" alt="Наружные защитные элементы костюма">
                <div class="text-under-img flag-forms">
                    щитки из ABS
                    <div class="text-on-img">
                        <div class="text-on-img-text">
                            <div>МДФ</div>
                            <div class="orange-ball flag-animate" id="orange-ball-2"></div>
                            <div class="bold">ABS</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="central-block">
                <div class="list-with-title">
                    <h3 class="text-center">
                        Что формуют
                    </h3>
                    <div class="list-with-title-list">
                        <ul>
                            <li>Корпуса</li>
                            <li>Авто тюнинг</li>
                            <li>Детали роботов</li>
                            <li>Бытовые вещи</li>
                            <li>Игрушки</li>
                        </ul>
                        <ul>
                            <li>Упаковку</li>
                            <li>Блистеры</li>
                            <li>Формы для мыла,</li>
                            <li>шоколада</li>
                            <li>тротуарной плитки</li>
                        </ul>
                    </div>
                    <div class="text-under-list">
                        Эти и другие вещи изготовляются вакуумным формованием. Наша компания занимается не только
                        вакуумной формовкой, мы также проектируем и фрезеруем пресс-формы для нее.
                        <br>
                        Мы проектируем блистерную упаковку и отправляем Вам макет будущей пластиковой детали.
                        Учитывая Ваши пожелания, определяем размер плиты и количество матриц для формовки.
                    </div>
                </div>
                <div class="bottom-text">
                    Мы фрезеруем на высокоточных станках с ЧПУ , поэтому гарантируем 100% соблюдение всех размеров.
                </div>
            </div>
        </div>
        <div class="uslugi-gray-wide-block pt-px-20">
            <div class="title">
                Для качественной вакуумной формовки пластика, нужно соблюдать несколько условий
            </div>
            <div class="d-md-flex">
                <div class="wide-block-left-block" id="wide-block-left-block">
                    <ul>
                        <li>наличие уклонов</li>
                        <li>вытяжные отверстия</li>
                        <li>растяжение пластика</li>
                        <li>отсутствие поднутрений</li>
                    </ul>
                </div>
                <div class="wide-block-right-block" id="parent-wide-gray">
                    Уклоны необходимы для легкого съема отформованного пластика с формы.
                    <br>
                    Поднутрения (отрицательные углы) будут препятствовать этому. Пластик вытягивается по разному в
                    зависимости от поверхности матрицы. Замки, защелки, глубокие места и резко выступающие детали
                    нужно качественно спроектировать.
                    <br>
                    После фрезеровки, в форме сверлятся вытяжные отверстия диаметром 0.4 мм - диаметр, который
                    позволяет избежать следов вытяжки на пластике.
                    <br>
                    Форма полируется и доставляется Вам.Чертежи вырубных ножей (штанц-форм) идут в комплекте.
                    <div class="shred-right flag-f-f-v" id="wide-gray"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('custom_scripts')
    <script>
        registerForAnimation('f-f-v-title',[
            {id:'f-f-v-title', addedClass:'moved', delay:1000},
        ]);
        registerForAnimation('orange-ball-1',[
            {id:'orange-ball-1', addedClass:'moved', delay:500},
            {id:'orange-ball-2', addedClass:'moved', delay:500},
        ]);
        registerForAnimation('melters',[
            {id:'wide-block-left-block', addedClass:'moved', delay:0},
        ]);
    </script>
@endpush

<script>
    {{--вычисляем расстояние от родительского блока до правого края страницы и ставим справа дочерний блок с вычисленной величиной--}}
    function calculateGrayBlock(){
        let div = document.getElementById('parent-wide-gray'),
            rect = div.getBoundingClientRect(),
            d = document.documentElement,
            rectD = d.getBoundingClientRect(),
            result = rectD.right - rect.right,
            wideGray = document.getElementById("wide-gray");
        wideGray.style.width = result - 60 + "px"; //60 - это отступ от края страницы, т. к. margin в данном случае не работает
    }
    window.addEventListener("load", calculateGrayBlock);
    window.addEventListener('resize', calculateGrayBlock);
</script>
