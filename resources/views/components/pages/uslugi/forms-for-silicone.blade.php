<div class="wrapper-1314" id="silicone">
    <div class="uslugi-text-img-block-2">
        <div class="d-block text-center text-md-start">
            <div class="title-first-letter flag-forms" id="f-f-s-title">
                Формы для силикона
            </div>
        </div>

        <div class="position-relative">
            <div class="silicone-wide-gray-block mt-px-20">
                <div class="d-flex h-100 gap-4">
                    <img src="{{asset('img/graphic form1.webp')}}" alt="">
                    <div class="d-flex flex-column justify-content-between">
                        <div>Пуансон</div>
                        <div>Матрица</div>
                    </div>
                </div>
                <div class="silicone-wide-gray-block-right-block">
                    <div class="d-flex flex-column align-items-center">
                        <div class="vertical-triangle"></div>
                        <div class="orange-ball flag-animate" id="orange-ball-4"></div>
                    </div>
                    <div class="right-block-text">
                        Материал форм
                        <br>
                        ДЮРАЛЬ <strong>Д16Т</strong>
                    </div>
                </div>
            </div>
            <div class="uslugi-text-img-block-2-grid-block-3">
                <div class="block-2-left-block">
                    Силиконовые резины прессуют под действием температуры. Определенное количество резины закладывается
                    в нижнюю часть формы. Затем сильно (пресс) прижимаеют верхней частью. Разогретая резина равномерно
                    заполняет все полости и застывает. Так делают, например, кондитерские силиконовые формы для выпечки.
                </div>
                <div class="block-2-central-block">
                    <div class="block-2-central-block-content">
                        <img src="{{asset('img/silicone form.webp')}}" alt="">
                        <div class="text-under-img p-px-10">
                            силиконовая форма для выпечки
                        </div>
                    </div>
                </div>
                <div class="block-2-right-block">
                    <strong class="pl-px-md-30">Для чего формы</strong>
                    <ul class="pt-px-md-20">
                        <li>Формы для выпечки, мыла, шоколада.</li>
                        <li>рыболовные приманки,</li>
                        <li>браслеты,</li>
                        <li>подставки и много другое..</li>
                    </ul>
                </div>
            </div>
            <div class="v-line vl-ffs" id="vl-ffs"></div>
        </div>
    </div>
</div>

@push('custom_scripts')
    <script>
        registerForAnimation('f-f-s-title',[
            {id:'f-f-s-title', addedClass:'moved', delay:1000},
            {id:'vl-ffs', addedClass:'moved', delay:500},
        ]);
        registerForAnimation('orange-ball-4',[
            {id:'orange-ball-4', addedClass:'moved', delay:500},
        ]);
    </script>
@endpush
