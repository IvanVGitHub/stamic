<div class="wrapper-1314" id="milling">
    <div class="d-block text-center text-md-start">
        <div class="title-first-letter">
            <h1 class="m-0">Фрезеровка</h1>
            <div class="to-right-arrow" id="arrow-milling"></div>
        </div>
    </div>

    <div class="position-relative pt-px-20">
        <div class="milling-content">
            <div class="wide-gray-translucent-background px-px-5">
                <div class="tehnologii-text pl-px-md-80 py-px-md-10 pr-px-md-50 p-px-10">
                    Мы используем 3х и 4х осевые фрезерные станки с ЧПУ. Работаем по цветным металлам, сплавам, сталям, пластикам, МДФ и другим материалам.
                    <br>
                    Всегда точное время обработки, высокая скорость и качество наших форм остаются нашими приоритетами в работе. Наш парк фрезерных станков с ЧПУ позволяет изготовлять формы любых размеров и сложности.
                </div>
                <div class="">
                    <div class="card-thumbnails flag-milling">
                        <div class="position-relative">
                            <div class="card-thumbnails-content">
                                <div class="tehnologii-hover-image-scale">
                                    <img src="{{asset('img/form-steel.webp')}}" alt="Стальная форма">
                                </div>
                                <div class="tehnologii-hover-image-scale">
                                    <img src="{{asset('img/proekty-4-2.webp')}}" alt="Колумбик">
                                </div>
                                <div class="tehnologii-hover-image-scale">
                                    <img src="{{asset('img/proekty-1-2.webp')}}" alt="Пресс-форма">
                                </div>
                            </div>
                            <div class="card-thumbnails-description">
                                примеры фрезерования
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('custom_scripts')
    <script>
        registerForAnimation('milling',[
            {id:'arrow-milling', addedClass:'moved', delay:1000},
        ]);
    </script>
@endpush
