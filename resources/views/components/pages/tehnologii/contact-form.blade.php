<div class="uslugi-contact-form-block">
    <div>
        <div class="uslugi-contact-form-block-form">
            <form class="row gy-2 g-md-4 w-100 mx-0" action="{{route('form')}}" method="post">
                @csrf
                <div class="uslugi-contact-form-block-form-title">
                    Узнайте стоимость
                </div>
                <div class="col-md-6">
                    <input class="default-form-input"
                           type="text"
                           id="fname"
                           name="name"
                           placeholder="Имя"
                           maxlength="100"
                           aria-required="false">
                </div>
                <div class="col-md-6">
                    <input class="default-form-input"
                           type="text"
                           id="lname"
                           name="lastname"
                           placeholder="Фамилия"
                           maxlength="100"
                           aria-required="false">
                </div>
                <div class="col-md-6">
                    <input class="default-form-input"
                           type="email"
                           id="email"
                           name="email"
                           placeholder="Эл. почта"
                           maxlength="250"
                           aria-required="true"
                           pattern="^.+@.+\.[a-zA-Z]{2,63}$"
                           required>
                </div>
                <div class="col-md-6">
                    <input class="default-form-input"
                           type="tel"
                           id="phone"
                           name="phone"
                           placeholder="Телефон"
                           maxlength="50"
                           aria-required="false"
{{--                           pattern="\+?[7,8]{0,1}[0-9]{3}[0-9]{3}[0-9]{4}"--}}
                    >
                </div>
                <div class="col-12">
                    <select class="default-form-input" id="cars" name="data">
                        <option hidden placeholder="Выберите вариант" selected>Выберите вариант</option>
                        <option value="3D моделирование">3D моделирование</option>
                        <option value="3D печать">3D печать</option>
                        <option value="3D сканирование">3D сканирование</option>
                        <option value="Фрезеровка">Фрезеровка</option>
                        <option value="Литье под давлением">Литье под давлением</option>
                        <option value="Вакуумная формовка">Вакуумная формовка</option>
                    </select>
                </div>
                <div class="col-12">
                    <textarea class="default-form-input" name="comment" placeholder="Комментарии" aria-required="false"></textarea>
                </div>
                <div class="col-12">
                    <button class="w-100 default-form-btn" onclick="validateFunction()" type="submit">Запросить цену</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // проверка ввода
    function validateFunction() {
        const inputs = document.querySelectorAll("input, select, textarea");

        inputs.forEach(input => {
            input.addEventListener(
                "invalid",
                event => {
                    input.classList.add("invalid");
                },
                false
            );
        });
    }
</script>
