<div class="container">
    <div class="examples-of-projects" id="examples-of-projects">
        <div class="index-block-title flag-examples" id="heading-examples-of-projects">
            <div class="d-inline-block position-relative pr-px-20">
                Примеры проектов
                <div class="h-line hl-eop-1" id="hl-eop-1"></div>
            </div>
        </div>
        <div class="index-block3">
            <div class="index-block3-list">
                <div class="d-md-block d-flex justify-content-between">
                    <a class="index-block3-list-item"
                       onmouseenter="$('#index-img-left').addClass('index-block3-z-4');$('#index-block3-start-item').removeClass('hovered');"
                       onmouseleave="$('#index-img-left').removeClass('index-block3-z-4')"
                       href="#index-img-left">
                        3Д
                        <div class="svg-arrow">
                            <div class="index-svg-arrow"></div>
                        </div>
                    </a>
                    <a class="index-block3-list-item hovered" id="index-block3-start-item"
                       onmouseenter="$('#index-img-center').addClass('index-block3-z-4');$('#index-block3-start-item').removeClass('hovered');"
                       onmouseleave="$('#index-img-center').removeClass('index-block3-z-4')"
                       href="#index-img-center">
                        МДФ
                        <div class="svg-arrow position-relative">
                            <div class="index-svg-arrow"></div>
                            <div class="block-animated-start" id="arrow-center"></div>
                        </div>
                    </a>
                    <a class="index-block3-list-item"
                       onmouseenter="$('#index-img-right').addClass('index-block3-z-4');$('#index-block3-start-item').removeClass('hovered');"
                       onmouseleave="$('#index-img-right').removeClass('index-block3-z-4')"
                       href="#index-img-right">
                        Д16Т
                        <div class="svg-arrow">
                            <div class="index-svg-arrow"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="index-block3-group-img" id="parent-scroll">
                <div class="v-line vl-eop-1" id="vl-eop-1"></div>
                <div class="index-img-left" id="index-img-left">
                    <img src="{{asset('img/form1.webp')}}" alt="">
                </div>
                <div class="index-img-center index-block3-z-4" id="index-img-center">
                    <img src="{{asset('img/form2.webp')}}" alt="">
                </div>
                <div class="index-img-right" id="index-img-right">
                    <img src="{{asset('img/form3.webp')}}" alt="">
                </div>
            </div>
        </div>
        <div class="p-md-0 pt-px-20 text-md-start text-center" id="examples-button-detailed">
            <a href="{{route('proekty')}}">
                <button class="button-detailed">Подробнее</button>
            </a>
        </div>
    </div>
</div>

@push('custom_scripts')
    <script>
        registerForAnimation('examples-of-projects',[
            {id:'vl-eop-1', addedClass:'moved', delay:1500},
            {id:'movetriangle', addedClass:'moved', delay:0},
            {id:'movetext', addedClass:'moved', delay:500},
        ]);
        registerForAnimation('heading-examples-of-projects',[
            {id:'vl-ot-1', addedClass:'moved', delay:0},
        ]);
        registerForAnimation('examples-button-detailed',[
            {id:'hl-eop-1', addedClass:'moved', delay:500},
        ]);
        registerForAnimation('arrow-center',[
            {id:'arrow-center', addedClass:'moved', delay:1000},
        ]);
    </script>
@endpush

<script>
    {{--устанавливаем скролл посередине--}}
    function scrollCenter() {
        let doc = document.getElementById('parent-scroll'),
            scroll = (doc.scrollWidth - $(window).width()) / 2;
        console.log(doc, scroll, doc.scrollWidth);
        if (doc.scrollWidth > $(window).width()) {
            $(doc).scrollLeft(scroll);
        }
    }
    {{--устанавливаем скролл на центральном элементе--}}
    // function scrollCenter(){
    //     let hiddenElement = document.getElementById("index-img-center");
    //     hiddenElement.scrollIntoView({ block: "center", behavior: "smooth" });
    // }
    window.addEventListener("load", scrollCenter);
    window.addEventListener('resize', scrollCenter);
</script>
