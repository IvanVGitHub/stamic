<div class="container">
    <div class="d-flex justify-content-center w-100 pt-px-25 pt-px-md-40">
        <div>
            <div class="index-block2">
                <div class="index-block2-list">
                    <ul>
                        <li>Вакуумная формовка</li>
                        <li>Фрезеровка ЧПУ</li>
                        <li>Гравировка ЧПУ</li>
                        <li>3d печать</li>
                        <li>3d сканирование</li>
                        <li>3d моделирование</li>
                        <li>Литье под давлением</li>
                    </ul>
                </div>
                <div class="index-block2-content" id="index-block2">
                    <div class="index-block-title flag-our-technology">
                        Наши технологии
                    </div>
                    <div class="index-block2-text" id="movetext">
                        Все наши технологии мы используем в той или иной степени в изготовлении форм . Вы можете
                        воспользоваться любой из них как отдельной услугой или как частью вашего проекта. С
                        помощью этих технологий можно реализовать самые смелые проекты вашего бизнеса
                        <a href="{{route('tehnologii')}}">
                            <button class="button-detailed float-end mt-3">Подробнее</button>
                        </a>
                    </div>
                    <div class="index-block2-triangle-container" id="movetriangle">
                        <div class="index-block2-triangle"></div>
                    </div>
                    @push('custom_scripts')
                        <script>
                            registerForAnimation('index-block2',[
                                {id:'movetriangle', addedClass:'moved', delay:300},
                                {id:'movetext', addedClass:'moved', delay:500},
                            ]);
                        </script>
                    @endpush
                </div>
            </div>
        </div>
    </div>
</div>
