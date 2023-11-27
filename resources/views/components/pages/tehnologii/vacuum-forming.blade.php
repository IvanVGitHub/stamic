<div class="wrapper-1314 pb-px-20" id="vacuum">
    <div class="d-block text-center text-md-start">
        <div class="title-first-letter">
            <h2 class="h2-empty">Вакуумная формовка</h2>
            <div class="to-right-arrow" id="arrow-vacuum"></div>
        </div>
    </div>

    <div class="vacuum-forming-block pt-px-20">
        <div class="vacuum-forming-block-left">
            <div class="flex-grow-1">
                <div class="text-responsive-18">
                    Наша автоматическая вакуум-формовочная машина:
                </div>
                <div class="py-px-15">
                    <ul>
                        <li>Нагрев осуществляется инфракрасными элементами производства Германии,</li>
                        <li>зоны нагрева регулируются при помощи семисторных регуляторов мощности,</li>
                        <li>Пневматическая система укомплектована о борудованием фирм « PNEUMAX» и «CAMOZZI», электронное управление циклами компонентами фирмы «OMRON», что в свою очередь гарантирует высокое качество аппарата, а также стабильность его работы.</li>
                    </ul>
                </div>
                <div class="minor-text flag-vacuum-forming">
                    <div class="gray-triangle-boll flag-vacuum-forming">
                        <div class="vertical-triangle"></div>
                        <div class="orange-ball flag-gray-triangle-boll"></div>
                    </div>
                    <div class="d-flex gap-3">
                        <div>
                            Рабочее поле
                            <br>
                            Толщина материала
                        </div>
                        <div>
                            650 х 400 мм.
                            <br>
                            0.2 - 7 мм.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vacuum-forming-wide-warm">
            <div class="vacuum-forming-wide-warm-content">
                <img class="vacuum-forming-wide-warm-img" src="{{asset('img/box.webp')}}" alt="Одноразовый контейнер для холодных продуктов">
                <div class="card-thumbnails flag-vacuum-forming">
                    <div class="position-relative">
                        <div class="card-thumbnails-content">
                            <div class="tehnologii-hover-image-scale">
                                <img src="{{asset('img/armor.webp')}}" alt="Наружные защитные элементы костюма">
                            </div>
                            <div class="tehnologii-hover-image-scale">
                                <img src="{{asset('img/proekty-3-2.webp')}}" alt="3Д модель формы">
                            </div>
                            <div class="tehnologii-hover-image-scale">
                                <img src="{{asset('img/proekty-2-2.webp')}}" alt="3Д модель формы">
                            </div>
                        </div>
                        <div class="card-thumbnails-description">
                            примеры формовки
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('custom_scripts')
    <script>
        registerForAnimation('vacuum',[
            {id:'arrow-vacuum', addedClass:'moved', delay:1000},
        ]);
    </script>
@endpush
