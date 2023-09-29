
function processPhoneMask(){
    let uiMasked = $('input.phone-input');
    uiMasked.mask('+7(000) 000-00-000');

    $.each( uiMasked, function() {
        let el = $(this);
        el.focus(() => {
            let val = $(this).val().trim();
            if(val == "" || val == "+" || val == "+7" || val == "8")
                $(this).val("+7(");
        });
        // el.on('input',() => {
        //     let val = $(this).val().replace(/\D+/g, '');
        //     if(val.length == 11)
        //         el.removeClass('invalid')
        //     else
        //         el.addClass('invalid');
        // })
    });
}
processPhoneMask();


function elementInViewport2(el) {
    var top = el.offsetTop;
    var left = el.offsetLeft;
    var width = el.offsetWidth;
    var height = el.offsetHeight;

    while(el.offsetParent) {
        el = el.offsetParent;
        top += el.offsetTop;
        left += el.offsetLeft;
    }

    return (
        top < (window.pageYOffset + window.innerHeight) &&
        left < (window.pageXOffset + window.innerWidth) &&
        (top + height) > window.pageYOffset &&
        (left + width) > window.pageXOffset
    );
}
function onShow(id, callback){
    if(typeof callback != 'function')
        return;
    let el = document.getElementById(id);
    if(elementInViewport2(el))
        callback();
}
let __animated = {};
function animateEnterOnShow(triggerId, animates, once = true){
    if(once && __animated[triggerId])
        return;
    onShow(triggerId, function(){
        if(typeof animates == 'string'){
        }
        if(!Array.isArray(animates))
            return;
        if(once)
            __animated[triggerId] = true;
        animates.forEach(item => {
            if(typeof item == 'string'){
                let elm = $(item);
                elm.addClass('shown');
                return;
            }
            if(typeof item != 'object')
                return;
            let selector = item.selector ?? ('#' + item.id) ?? ('.' + item.class);
            let addedClass = item?.addedClass ?? 'shown';
            let removedClass = item?.removedClass ?? '';
            let delay = item.delay;
            let elm = $(selector);
            if(delay > 0){
                setTimeout(()=>{
                    elm.addClass(addedClass);
                    elm.removeClass(removedClass);
                }, delay)
            } else {
                elm.addClass(addedClass);
                elm.removeClass(removedClass);
            }
        });
    })
}
function registerForAnimation(triggerId, animates, once = true){
    animateEnterOnShow(triggerId, animates, once);
    $(window).on('scroll resize', function() {
        animateEnterOnShow(triggerId, animates, once);
    })
}

$.each( $('*'), function() {
    if( $(this).width() > $('body').width()) {
        console.log("Wide Element: ", $(this), "Width: ",
            $(this).width());
    }
});
function h_scroll(el, direction = 'right'){
    let elm = $("#" + el);
    elm.animate({scrollLeft:elm.scrollLeft() + (direction == 'right' ? 300 : -300)}, 220);
    // alert(elm.scrollLeft());
}
function msg_e(msg, title = 'Ошибка'){
    toastr["error"](msg, title)
}
function msg_w(msg, title = ''){
    toastr["warning"](msg, title)
}
function msg_s(msg, title = ''){
    toastr["success"](msg, title)
}
function msg_i(msg, title = ''){
    toastr["info"](msg, title)
}
function h_scroll(el, direction = 'right'){
    let elm = $("#" + el);
    elm.animate({scrollLeft:elm.scrollLeft() + (direction == 'right' ? 300 : -300)}, 220);
    // alert(elm.scrollLeft());
}

function smoothScroll (targetEl, duration) {
    const headerElHeight =  document.querySelector('.header').clientHeight;
    let target = document.querySelector(targetEl);
    let targetPosition = target.getBoundingClientRect().top - headerElHeight;
    let startPosition = window.pageYOffset;
    let startTime = null;

    const ease = function(t,b,c,d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
    };

    const animation = function(currentTime){
        if (startTime === null) startTime = currentTime;
        const timeElapsed = currentTime - startTime;
        const run = ease(timeElapsed, startPosition, targetPosition, duration);
        window.scrollTo(0,run);
        if (timeElapsed < duration) requestAnimationFrame(animation);
    };
    requestAnimationFrame(animation);

}
// Scroll to anchors
(function () {

    const smoothScroll = function (targetEl, duration) {
        const headerElHeight =  document.querySelector('.header').clientHeight;
        let target = document.querySelector(targetEl);
        let targetPosition = target.getBoundingClientRect().top - headerElHeight;
        let startPosition = window.pageYOffset;
        let startTime = null;

        const ease = function(t,b,c,d) {
            t /= d / 2;
            if (t < 1) return c / 2 * t * t + b;
            t--;
            return -c / 2 * (t * (t - 2) - 1) + b;
        };

        const animation = function(currentTime){
            if (startTime === null) startTime = currentTime;
            const timeElapsed = currentTime - startTime;
            const run = ease(timeElapsed, startPosition, targetPosition, duration);
            window.scrollTo(0,run);
            if (timeElapsed < duration) requestAnimationFrame(animation);
        };
        requestAnimationFrame(animation);

    };

    const scrollTo = function () {
        const links = document.querySelectorAll('.js-scroll');
        links.forEach(each => {
            each.addEventListener('click', function () {
                const currentTarget = this.getAttribute('href');
                smoothScroll(currentTarget, 1000);
            });
        });
    };
    const scrollToTop = function () {
        const links = document.querySelectorAll('.js-scrollTop');
        links.forEach(each => {
            each.addEventListener('click', function () {
                const currentTarget = document.querySelector('.main');
                smoothScroll(currentTarget, 1000);
            });
        });
    };
    scrollTo();
}());


function toggleHeaderSearch(){
    let d = $('.header__bottom-search').first();
    if(d.hasClass('active')){
        d.removeClass('active');
        $('.header__bottom-element').show();
    } else {
        $('.header__bottom-element').hide();
        d.addClass('active');
        let input = $(d.find('.header__bottom-search-input')).first();
        input.focus();
    }
}
function toggleHeaderMobileSearch(){
    let d = $('.header__mobile-search').first();
    if(d.hasClass('active')){
        d.removeClass('active');
    } else {
        d.addClass('active');
        let input = $(d.find('.header__mobile-search-input')).first();
        input.focus();
    }
}
function preventToggelMobileMenu(e){
    if(e.preventDefault)
        e.preventDefault();
}
function toggleMobileMenu(){
    $(".header-mobile-side-menu").toggleClass("show");
}
function closeMobileMenu(){
    $(".header-mobile-side-menu").removeClass("show");
}
function openMobileMenu(){
    $(".header-mobile-side-menu").addClass("show");
}

function lerp (start, end, amt){
    return (1-amt)*parseInt(start)+amt*end
}

/*разворачивание/сворачивание текста*/
$(function() {
    let btns = $('.collapse-text-btn');
    $.each(btns, function (i, button){
        let btn = $(button);
        btn.on('click' ,function(){
            let container = $(btn.data("nml-target"));
            container.toggleClass("collapse-text-show");
        })
    });
});
