<div class="wrapper-1314 padding-x" id="melters">
    <div class="d-block text-center text-md-start">
        <div class="title-first-letter flag-forms" id="f-f-m-title">
            Формы для литья
        </div>
    </div>

    <div class="uslugi-text-img-block-1">
        <div class="text-left">
            <div class="flex-grow-1">
                <div class="pt-px-20 pt-px-md-40 pr-px-md-30">
                    Мы фрезеруем формы для литья из <strong>Д16Т</strong>. Почему дюраль, а не сталь?
                    <br>
                    Наши заказчики ищут мелкосерейное литье и недорогие пресс формы. Формы из стали такими не
                    являются.
                    <br>
                    Дюраль же отлично себя зарекомендовала в производстве . Д16Т не так дорог и обработка его
                    тоже
                    не так трудозотратна. Формы легко ремонтируются напылением, сваркой. И их всегда можно
                    заказать
                    повторно. Чтобы отлить пару тысяч изделий, которые никогда не окупят стоимость стальной
                    оснастки. Дюралевую форму можно поставить за несколько дней, стальную же придется ждать
                    иногда
                    годами.
                </div>
            </div>
            <div class="text-left-list">
                <ul>
                    <li>Быстро.</li>
                    <li>Качественно</li>
                    <li>Ремонтопригодность</li>
                    <li>Низкая стоимость</li>
                </ul>
            </div>
            <div class="v-line vl-ffm" id="vl-ffm"></div>
            <div class="h-line hl-ffm"></div>
        </div>
        <div class="img-width-text pl-px-md-30">
            <div class="img-width-text-img">
                <div>
                    <img src="{{asset('img/form with orange detail.webp')}}" alt="3Д модель детали и формы для отливки">
                </div>
                <div class="text-top">
                    ДЮРАЛЬ&nbsp&nbsp
                    <div class="d-flex flex-column align-items-center">
                        <div class="vertical-triangle"></div>
                        <div class="orange-ball flag-animate" id="orange-ball-3"></div>
                    </div>
                    &nbsp&nbsp<strong>Д16Т</strong>
                </div>
            </div>
            <div class="text-bottom pt-px-15 pt-px-md-40">
                Дюраль Д16Т наиболее "выгодный" Вам вариант материала для формы. Дюраль отлично зарекомендовала себя в соотношении цена-качество. У нее большая теплопроводность, долговечность, твердость. Поэтому мы всегда рекомендуем Нашим Заказчикам выбирать именно ее .
            </div>
        </div>
    </div>
</div>

@push('custom_scripts')
    <script>
        registerForAnimation('f-f-m-title',[
            {id:'f-f-m-title', addedClass:'moved', delay:1000},
            {id:'vl-ffm', addedClass:'moved', delay:2500},
        ]);
        registerForAnimation('orange-ball-3',[
            {id:'orange-ball-3', addedClass:'moved', delay:500},
        ]);
    </script>
@endpush
