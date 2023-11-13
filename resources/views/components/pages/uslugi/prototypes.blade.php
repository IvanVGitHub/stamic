<div class="d-md-block d-none uslugi-text-img-block-4 pt-px-180" id="prototypes">
    <div class="title-first-letter wrapper-1314">
        Прототипы
    </div>
    <div class="d-flex mt-px-20">
        <div class="block-4-grid-block-3-wrapper-left">
            <div class="block-4-grid-block-3-left-title">
                Прототип- это образец будущего изделия.
            </div>
            <div class="block-4-grid-block-3-left-text pt-px-55 pr-px-30">
                Его делают, чтобы оценить дизайн, функционал. Прототип можно изготовить и в ручную. Мы предпочитаем более технологичный подход. Это Фрезерование на станке с ЧПУ или послойная 3D печать.
                <br>
                Выбор способа изготовления прототипа зависит от сложности и размера. Как правило, большие вещи, например, корпус робота проще и дешевле отфрезеровать. Небольшие вещи, например, прототип пластиковой коробки, будет проще напечатать на 3D принтере.
            </div>
        </div>
        <div class="d-flex flex-grow-1" id="triangles-block">
            <div class="">
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


{{--мобильная--}}


<div class="d-md-none d-block uslugi-text-img-block-4 pt-px-40" id="m-prototypes">
    <div class="title-first-letter wrapper-1314">
        Прототипы
    </div>

    <div class="d-flex mt-px-20">
        <div class="block-4-grid-block-3-wrapper-left">
            <div class="block-4-grid-block-3-left-title mb-px-15">
                Прототип- это образец будущего изделия.
            </div>
            <div>
                <img class="object-fit-cover w-100" src="{{asset('img/monolasts.webp')}}" alt="">
                <div class="text-under-img">
                    прототип моноласты в масштабе 1:1
                </div>
            </div>


            <div class="block-4-grid-block-3-left-text pt-px-20 pr-px-10 pl-px-10">
                Его делают, чтобы оценить дизайн, функционал. Прототип можно изготовить и в ручную. Мы предпочитаем более технологичный подход. Это Фрезерование на станке с ЧПУ или послойная 3D печать.
                <br>
                Выбор способа изготовления прототипа зависит от сложности и размера. Как правило, большие вещи, например, корпус робота проще и дешевле отфрезеровать. Небольшие вещи, например, прототип пластиковой коробки, будет проще напечатать на 3D принтере.
            </div>
        </div>
    </div>

    <div class="mt-px-15">
        <img class="object-fit-cover w-100" src="{{asset('img/pistol grip.webp')}}" alt="">
        <div class="text-under-img">
            пистолетная рукоятка
        </div>
    </div>






</div>



@push('custom_scripts')
    <script>
        registerForAnimation("triangles-block", [
            {id:"triangle-left", delay:300, addedClass:"btc-show"},
            {id:"triangle-right", delay:700, addedClass:"btc-show"},
        ])
    </script>
@endpush
