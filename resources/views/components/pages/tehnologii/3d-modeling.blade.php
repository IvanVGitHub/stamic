<div class="wrapper-1314" id="modeling">
    <div class="d-block text-center text-md-start">
        <div class="title-first-letter">
            <span>3D</span> моделирование
            <div class="to-right-arrow" id="arrow-modeling"></div>
        </div>
    </div>

    <div class="wrapper-1218">
        <div class="d-flex justify-content-center">
            <img src="{{asset('img/form half real.webp')}}" class="tehnologii-block1-img" alt="Форма">
        </div>
        <div class="modeling-description-and-icons">
            <div class="tehnologii-text pt-px-20">
                Мы различаем два вида моделирования.
                <br>
                <strong>3Д скульптор и 3Д проектирование.</strong>
                <br>
                <br class="d-md-none">
                <strong>Скульптурное</strong> моделирование подходит для моделирования
                панно, форм для мыла и шоколада и подобных вещей.
                <br>
                <br class="d-md-none">
                <strong>Проектирование</strong> нужно там, где есть точные параметры.
                Например, пластиковый кронштейн или форма для блистерной
                упаковки.
            </div>
            <div class="">
                <div class="d-inline-block">
                    <div class="card-thumbnails-content">
                        <div class="tehnologii-hover-image-scale">
                            <img src="{{asset('img/form combined.webp')}}" alt="Форма">
                        </div>
                        <div class="tehnologii-hover-image-scale">
                            <img src="{{asset('img/form steel.webp')}}" alt="Форма">
                        </div>
                        <div class="tehnologii-hover-image-scale">
                            <img src="{{asset('img/pistol grip.webp')}}" alt="Форма">
                        </div>
                    </div>
                    <div class="text-center">
                        примеры 3Д моделирования
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('custom_scripts')
    <script>
        registerForAnimation('modeling',[
            {id:'arrow-modeling', addedClass:'moved', delay:1000},
        ]);
    </script>
@endpush
