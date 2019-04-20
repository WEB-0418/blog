const noUiSlider = require('nouislider');

$( document ).ready(function() {
    searchSlide($('.search-cart__input'), $('.search-cart__btn'), 340);//Выпадающий поиск в шапке

    var gridProps = {
        columnWidth: '.grid__sizer',
        itemSelector: '.grid__item'
    };

    // initGrid($('.grid'), gridProps);//Инит кирпичной кладки на главной

    var mainSlider = {
        arrows: false,
        dots: true,
        fade: true,
        speed: 1000,
        autoplay: true,
    }

    initSlick($('.main-sect__slider'), mainSlider);//Слайдер на главной

    var mainNewsSlider = {
        items: 5,
        loop: true,
        dots: false,
        nav: true,
        stagePadding: 30,
        margin: 31,
        autoplay: true,
        autoplayTimeout: 3000,
        navText: ['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            700:{
                items: 3
            },
            992: {
                items: 4
            },
            1200: {
                items: 5
            }
        }
    };

    // initMap();

    initOwl($('.main-news__slider'), mainNewsSlider);//Слайдер новинок на главной

    var headerSlider = {
        items: 1,
        loop: true,
        dots: false,
        autoplay: true,
    };

    initOwl($('.header__slider'), headerSlider); //Инит слайдера в хедере на НЕ главных страницах

    var hitsSlider = {
        items: 1,
        loop: true,
        dots: false,
        nav: true,
        autoplay: true,
        autoplayTimeout: 2000,
        navText: ['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>']
    };

    initOwl($('.filter-col__hits-slider'), hitsSlider); //Инит слайдера хитов в каталоге

    var shareSlider = {
        items: 1,
        loop: true,
        dots: false,
        nav: true,
        autoplay: true,
        autoplayTimeout: 2000,
        navText: ['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>']
    };

    initOwl($('.filter-col__share-slider'), shareSlider); //Инит слайдера акций в каталоге

    var recSlider = {
        loop: true,
        dots: false,
        nav: true,
        margin: 30,
        navText: ['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 2
            },
            481:{
                items: 3
            }
        }
    };

    initOwl($('.tovar-block__recommend'), recSlider); //Инит слайдера рекоммендаций в карточке товара

    lazyScroll($('.footer-anchor'), 500);//Плавный скролл от футера к хедеру при нажатии на стрелочку над футером

    var tovarMain = {
            items : 1,
            slideSpeed : 2000,
            nav: false,
            dots: false,
            loop: true,
            responsiveRefreshRate : 200,
        },
        tovarNav = {
            items : 3,
            dots: false,
            nav: false,
            smartSpeed: 200,
            slideSpeed : 500,
            slideBy: 3,
            responsiveRefreshRate : 100,
            responsive : {
                0: {
                    items : 2
                },
                993: {
                    items : 3
                },
            }
        };

    initOwlSync($('.tovar-block__main-slider'),tovarMain, $('.tovar-block__nav-slider'), tovarNav);//Инит синхронных слайдеров в карточке товара

    mmenuToggle($("#menu"), $("#mmenu-icon"));//Инит мобильного меню

    var fancy = [{
        trigger: $('#enter'),
        modal: $('#enterForm'),
        options: {
            padding: 0,
        }
    },{
        trigger: $('#mobileReg'),
        modal: $('#regForm'),
        options: {
            padding: 0,
        }
    },{
        trigger: $('#mobileEnter'),
        modal: $('#enterForm'),
        options: {
            padding: 0,
        }
    },{
        trigger: $('#regEnter'),
        modal: $('#enterForm'),
        options: {
            padding: 0,
        }
    },{
        trigger: $('#regModal'),
        modal: $('#regForm'),
        options: {
            padding: 0,
        }
    },{
        trigger: $('#reg'),
        modal: $('#regForm'),
        options: {
            padding: 0,
        }
    },{
        trigger: $('#calc'),
        modal: $('#calcForm'),
        options: {
            padding: 0,
        }
    }];

    fancyInit(fancy);//Инит модалек

    initRangeSlider(document.getElementById('range'),document.getElementById('leftDigit'),document.getElementById('rightDigit'));//Инит ренж слайдера в каталоге

    accordion($('.filter-col__drop-title'));//Аккордион в фильтре каталога

    accordion($('.news__drop-title'));//Аккордион в новостях

    mediaCuts();//Перемещения ДОМа, которых требует адаптация

    filterFade();//Появление фильтра на адаптиве и манипуляции с ним

    counter($('.basket__counter'), $('.basket__input-counter'));//Счетчик кол-ва товаров в корзине

    selectMagic();//Костыль с выбором цвета в карточке товара

    var tabs = {

    }
    tabsInit($('.single-news__tabs'), tabs);//Инит табов на странице товара

    if($('.basket__total-input').is('input')){
        totalCount();//Расчет цен в корзине
    }

    preloader();//Прелоадер
});

// Функции **************************************************************************************************************

function initSlick(item, props) {
    item.slick(props);
}
function preloader () {
    $(window).on('load', function () {
        $('.loader-outer').fadeOut();
    });
}
function totalCount () {
    var arr = Array.from(document.getElementsByClassName('basket__total-input'));
    var delivery = +$('.basket__pay-way-input:checked').attr('data-delCost').replace(/[^0-9]/gim,'');
    var result = arr.reduce(function(sum, current) {
        return sum + +$(current).val().replace(/[^0-9]/gim,'');
    }, 0);
    $('#goodsTotal').val(result + " руб.");
    $('#delTotal').val(delivery + " руб.");
    result +=  delivery;
    $('#superTotal').val(result + " руб.");
}
function tabsInit(item, props) {
    $(item).responsiveTabs(props);
}
function selectMagic(){
    $('.tovar-block__color-select').each(function(i, it){
        var item = $(it);
        item.find('.tovar-block__color-item_active .tovar-block__color-item-inner').clone().insertBefore(item);
    });
    $('.tovar-block__proxy-select').on('click', function(){
        var item = $(this);
        if(!item.hasClass('color-open')){
            item.addClass('color-open').children('ul').slideDown();
        }
    });

    $('.tovar-block__color-select .tovar-block__color-item').on('click', function(){
        var item  = $(this),
            color = item.find('.tovar-block__color-item-inner').attr('data-color'),
            proxy = item.parent().parent();
        item.addClass('tovar-block__color-item_active').siblings().removeClass('tovar-block__color-item_active');
        proxy.siblings('input').val(color);
        proxy.children('.tovar-block__color-item-inner').remove();
        item.find('.tovar-block__color-item-inner').clone().insertBefore(proxy.find('ul').slideUp());
        setTimeout(function(){
            proxy.removeClass('color-open')
        }, 1);
    });
}

function initOwlSync(slider, sliderProps, nav, navProps){

    var sync1 = slider,
        sync2 = nav,
        syncedSecondary = true;
    sync1.owlCarousel(sliderProps).on('changed.owl.carousel', syncPosition);
    sync2.on('initialized.owl.carousel', function () {
        sync2.find(".owl-item").eq(0).addClass("current");
    }).owlCarousel(navProps).on('changed.owl.carousel', syncPosition2);
    function syncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;
        //if you disable loop you have to comment this block
        var count = el.item.count-1,
            current = Math.round(el.item.index - (el.item.count/2) - .5);
        if(current < 0) {
            current = count;
        }
        if(current > count) {
            current = 0;
        }
        //end block
        sync2.find(".owl-item").removeClass("current").eq(current).addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();

        if (current > end) {
            sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
            sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
    }
    function syncPosition2(el) {
        if(syncedSecondary) {
            var number = el.item.index;
            sync1.data('owl.carousel').to(number, 100, true);
        }
    }
    sync2.on("click", ".owl-item", function(e){
        e.preventDefault();
        var number = $(this).index();
        sync1.data('owl.carousel').to(number, 300, true);
    });
}

function counter(counters, counter){
    counter.each(function(i, it){
        var item = $(it);
        item.parent().parent().siblings(".basket__total").children("input").val(item.attr('data-price') * item.val() + " руб.");
    });

    counter.on('input', function(){
        $(this).val($(this).val().replace(/[^0-9]/gim,''));
        var item  = $(this),
            total = item.parent().parent().siblings(".basket__total").children("input");
        total.val(item.attr('data-price') * item.val() + " руб.");
        totalCount();
    });

    counters.on('click', function(e) {
        var item  = $(e.currentTarget),
            input = item.siblings("input");
        if(item.hasClass('plus')){
            buff = +input.val() + 1;
        } else {
            if(+input.val() > 1) {
                buff = +input.val() - 1;
            } else {
                buff = 1;
            }
        }
        input.val(buff);
        input.parent().parent().siblings(".basket__total").children("input").val(input.attr('data-price') * input.val() + " руб.");
        totalCount();
    });
    $('.basket__pay-way-input').on('input', function() {
        totalCount();
    });
}

function mediaCuts() {
    $(window).on('load resize', function(){
        if ($(window).width() <= 1024) {
            $('.catalog__filter-row').insertBefore('.filter-col__title_first');
            $('.filter-col').hide();
        } else {
            $('.catalog__filter-row').insertAfter('.catalog__trigger-row');
            $('.filter-col').show();
        }
    });
}

function filterFade() {
    $("#filterMob").on('click', function(){
        var filter  = $('.catalog__filter-col'),
            trigger = $(this);
        $(window).on('load resize', function(){
            trigger.text("Фильтры").removeClass('triggered');
            if ($(window).width() <= 1024) {
                filter.removeClass('filter-open').slideUp();
            } else {
                filter.removeClass('filter-open').show();
            }
        });
        if(filter.hasClass('filter-open')){
            trigger.text("Фильтры").removeClass('triggered');
            filter.removeClass('filter-open').slideUp();
        } else {
            trigger.text("Закрыть фильтры").addClass('triggered');
            filter.addClass('filter-open').slideDown();
        }
    });
}

function accordion(item){
    item.click(function () {
        $(this).toggleClass('in').next().slideToggle();
        item.not(this).removeClass('in').next().slideUp();
    });
}

function fancyInit(fancy) {
    fancy.forEach(function(item) {
        item.trigger.on('click', function(e) {
            e.preventDefault();
            $.fancybox.close(true);
            $.fancybox.open(item.modal, item.options);
        });
    });
}

function lazyScroll(anchor, speed) {
    $(window).scroll(function(){
        if ($(window).scrollTop() >= 450) {
            anchor.fadeIn();
        }else{
            anchor.fadeOut();
        }
    });
    anchor.on('click', function(e) {
        e.preventDefault();
        var href = $(this).attr("href");
        $("html, body").animate({scrollTop:$(href).offset().top}, speed);
    });
}
function initGrid (item, props) {
    item.masonry(props);
    $( window ).resize(function() {
        item.masonry('destroy');
        item.masonry(props);
    });
}

function initOwl(item, props) {
    setTimeout(function(){
        item.owlCarousel(props);
    }, 100);
}

function searchSlide(item, trigger, width) {
    trigger.on('click', function(e) {
        e.preventDefault();
        if ($(this).hasClass('search-btn-open')) {
            item.animate({width: 0,}, 500, function() {});
            $(this).removeClass('search-btn-open');
            setTimeout(function(){
                item.removeClass('search-padding');
            }, 500);
        } else {
            item.animate({width: width,}, 500, function() {});
            item.addClass('search-padding');
            $(this).addClass('search-btn-open');
        }
    });
}

function mmenuToggle($menu, $icon){
    
    var $menu = $menu.mmenu({
        "extensions": [
            "position-right",
            "theme-black",
            "border-none"
        ],
        navbar: {
            title: '<img src="../img/logo.png" style="width: 220px" alt="Лого">'
        }
    });
    // var $icon = icon;
    var api = $menu.data( "mmenu" );
    $icon.on( "click", function() {
        api.open();
    });
    api.bind( "open:finish", function() {
        setTimeout(function() {
            $icon.addClass( "is-active" );
        }, 100);
        $icon.on( "click", function() {
            api.close();
        });
    });
    api.bind( "close:finish", function() {
        setTimeout(function() {
            $icon.removeClass( "is-active" );
        }, 100);
        $icon.on( "click", function() {
            api.open();
        });
    });
}

function initRangeSlider(obj,leftInput,rightInput){
    var slider = obj;
    if(slider){
        var input0 = leftInput;
        var input1 = rightInput;
        var inputs = [input0, input1];
        noUiSlider.create(slider, {
            start: [Math.floor(+slider.dataset.min), +slider.dataset.max + 1],
            connect: true,
            range: {
                'min': Math.floor(+slider.dataset.min),
                'max': +slider.dataset.max + 1
            },
            // format: wNumb({
            //     decimals: 0
            // }),
        });
        slider.noUiSlider.on('update', function( values, handle ) {
            inputs[handle].value = Math.round(values[handle]);
        });
        function setSliderHandle(i, value) {
            var r = [null,null];
            r[i] = value;
            slider.noUiSlider.set(r);
        }
        // Listen to keydown events on the input field.
        inputs.forEach(function(input, handle) {
            input.addEventListener('change', function(){
                setSliderHandle(handle, this.value);
            });
            input.addEventListener('keydown', function( e ) {
                var values = slider.noUiSlider.get();
                var value = Number(values[handle]);
                var steps = slider.noUiSlider.steps();
                var step = steps[handle];
                var position;
                switch ( e.which ) {
                    case 13:
                        setSliderHandle(handle, this.value);
                        break;
                    case 38:
                        // Get step to go increase slider value (up)
                        position = step[1];
                        // false = no step is set
                        if ( position === false ) {
                            position = 1;
                        }
                        // null = edge of slider
                        if ( position !== null ) {
                            setSliderHandle(handle, value + position);
                        }
                        break;
                    case 40:
                        position = step[0];
                        if ( position === false ) {
                            position = 1;
                        }
                        if ( position !== null ) {
                            setSliderHandle(handle, value - position);
                        }
                        break;
                }
            });
        });
    }
}


// function initMap() {
//     var geo = new google.maps.Geocoder(),
//         center,
//         maps = Array.from(document.getElementsByClassName('googleMaps'));
//     if(maps.length > 0){
//         maps.forEach((item, i) => {
//             let mapObj = new google.maps.Map(item,{zoom : 17});
//             geo.geocode({'address' : item.getAttribute('data-location') }, function(results, status){
//                 center = results[0].geometry.location;
//                 mapObj.setCenter(center);
//                 let marker = new google.maps.Marker({
//                     map: mapObj,
//                     position: center,
//                 });
//             });
//         });
//     }
// }

// window.initMap = initMap;