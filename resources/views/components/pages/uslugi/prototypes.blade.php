<div class="uslugi-text-img-block-4" id="prototypes">
    <div class="wrapper-1314">
        <div class="d-block text-center text-md-start">
            <div class="title-first-letter flag-forms" id="p-title">
                Прототипы
            </div>
        </div>
    </div>

    <div class="prototypes-block">
        <div>
            <div class="block-4-grid-block-3-left-title">
                Прототип - это образец будущего изделия.
            </div>
            <div class="block-4-grid-block-3-left-text">
                Его делают, чтобы оценить дизайн, функционал. Прототип можно изготовить и в ручную. Мы предпочитаем более технологичный подход. Это Фрезерование на станке с ЧПУ или послойная 3D печать.
                <br>
                Выбор способа изготовления прототипа зависит от сложности и размера. Как правило, большие вещи, например, корпус робота проще и дешевле отфрезеровать. Небольшие вещи, например, прототип пластиковой коробки, будет проще напечатать на 3D принтере.
            </div>
        </div>
        <div class="d-flex flex-grow-1 prototypes-images" id="triangles-block">
            <div class="prototypes-images-left">
                <div class="block-4-img-left">
                    <img class="object-fit-cover w-100" src="{{asset('img/pistol grip.webp')}}" alt="">
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
                            <div class="v-line vl-p" id="vl-p"></div>
                        </div>
                    </div>
                </div>
                <div class="text-under-img">
                    пистолетная рукоятка
                </div>
            </div>
            <div class="">
                <div class="block-4-img-right">
                    <img class="object-fit-cover w-100" src="{{asset('img/monolasts.webp')}}" alt="">
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
                <div class="text-under-img">
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
