$(window).on('load', () => {





    //_______________HEADER-MENU_______________





    $('.header-menu__item').hover(


    function() {


        $('.header-menu__item').removeClass('active')


        $(this).addClass('active')


    },


    function() {


        $(this).removeClass('active')


    })





    $('.header-search').click(e => {


        e.preventDefault()


        $('.header-search__input').toggle()


    })





    $('.header-profile').click(e => {


        e.preventDefault()


        $('.header-profile__dropdown').toggle()


    })








    //_______________MOBILE-MENU_______________








    $('.mobile-menu__item').click(function() {


        $(this).toggleClass('active')


        $(this).find('.mobile-menu__submenu').slideToggle(500)


    })





    $('.header-mobile').click(() => {


        $('.mobile-menu').slideDown(800)


        $('body').addClass('overflowH')


    })





    $('.mobile-menu__close').click(() => {


        $('.mobile-menu').slideUp(800)


        $('body').removeClass('overflowH')


    })

















    //_______________MAIN SLIDER_______________





    $('.main-carousel').owlCarousel({


        dots: false,


        nav: false,


        loop: true,


        items: 1,


        autoplay: true,


        autoWidth: true,


        autoplayTimeout: 5000,


        smartSpeed: 700,


    })


    


    $('.main-arrows .arrow-left').click(() => {


        $('.main-carousel').trigger('prev.owl.carousel', [700]);


        $('.main-carousel').trigger('stop.owl.autoplay')


    })


    


    $('.main-arrows .arrow-right').click(() => {


        $('.main-carousel').trigger('next.owl.carousel', [700]);


        $('.main-carousel').trigger('stop.owl.autoplay')


    })








    //______________ADD TO FAVOURITE______________





    $('.new-item__fav').click(function() {
        $(this).addClass('active')
        $('.favourite').css({
            transform: 'none',
            opacity: '1',
        })
    })
    $('.new-item__basket').click(function() {
        $(this).addClass('active')
        $('.favourite').css({
            transform: 'none',
            opacity: '1',
        })
    })





    $('.products-item__fav').click(function() {


        $(this).addClass('active')


        $('.favourite').css({


            transform: 'none',


            opacity: '1',


        })


    })





    $('.favourite__close').click(function() {


        $('.favourite').css({


            transform: 'translateY(110%)',


            opacity: '0',


        })


    })





    //_______________BASKET_______________





    $('.basket-open').click(e => {


        e.preventDefault()


        $('.basket').fadeToggle(500)


    })








    //_______________PRODUCTS CAROUSEL_______________








    $('.products-carousel__items').owlCarousel({


        dots: false,


        nav: false,


        items: 1,


        autoWidth: true,


        smartSpeed: 700,


    })


    


    $('.products-carousel__arrows .arrow-left').click(() => {


        $('.products-carousel__items').trigger('prev.owl.carousel', [700]);


    })


    


    $('.products-carousel__arrows .arrow-right').click(() => {


        $('.products-carousel__items').trigger('next.owl.carousel', [700]);


    })





    //_______________PRODUCTS FILTER_______________








    $(".products-filter__range #price").ionRangeSlider({


        min: 0,


        max: 15000000, 


        step: 1,


        type: 'double',


        onChange: function() {


            let min = $('.irs-from').text()


            let max = $('.irs-to').text()


            $('.irs-min').text(min)


            $('.irs-max').text(max)


        }


    });








    $('.products-filter__reset').click(e => {


        e.preventDefault();


        $(".products-filter__range #price").data("ionRangeSlider").reset()


        $('.products-filter__price input').val('')


        $('.products-filter__item input').prop('checked', false)


    })





    $('.products-filter__title svg').click(function() {


        $(this).parents('.products-filter__item').find('.products-filter__list').slideToggle(400)


        $(this).parents('.products-filter__item').toggleClass('closed')


    })





    $('.products-filter__item-closed').find('.products-filter__list').slideToggle(400)


    $('.products-filter__item-closed').find('.products-filter__list').toggleClass('closed')








    $('.products-filter__open').click(() => {


        $('.products-filter').addClass('products-filter__show')


        $('body').addClass('overflowH')


    })





    


    $('.products-filter__close svg').click(() => {


        $('.products-filter').removeClass('products-filter__show')


        $('body').removeClass('overflowH')


    })











    //_____________PRODUCT-SINGLE_______________





    $('.product-tab').eq(0).show()


    $('.product-tabs__head li').eq(0).addClass('current')





    $('.product-tabs__head li').click(function() {


        let index = $(this).index()


        $('.product-tabs__head li').removeClass('current')


        $(this).addClass('current')


        $('.product-tab').hide()


        $('.product-tab').eq(index).show()


    })





    $('.product-gallery__thumbs div').click(function() {


        $('.product-gallery__thumbs div').removeClass('current')


        $(this).addClass('current')


        let image = $(this).find('img').attr('src')


        $('.product-gallery__img img').attr('src', image)


    })





    //______________BUY_______________





    let rem =  parseInt($(':root').css('font-size'))





    


    let buyStep1 = () => {


        $('html').scrollTop(0)


        $('.buy-head__step').removeClass('current')


        $('.buy-head__step').removeClass('done')


        $('.buy-head__step').eq(0).addClass('current')


        $('.buy-head__line').removeClass('half')


        $('.buy-head__line').removeClass('full')


        $('.buy-order').hide()


        $('.buy-pay').hide()


        $('.buy-basket').show()


    }





    let buyStep2 = () => {


        $('html').scrollTop(0)


        $('.buy-head__step').removeClass('current')


        $('.buy-head__step').removeClass('done')


        $('.buy-head__step').eq(0).addClass('done')


        $('.buy-head__step').eq(1).addClass('current')


        $('.buy-head__line').removeClass('half')


        $('.buy-head__line').removeClass('full')


        $('.buy-head__line').addClass('half')


        $('.buy-head').scrollLeft(8*rem)


        $('.buy-basket').hide()


        $('.buy-pay').hide()


        $('.buy-order').show()


    }





    let buyStep3 = () => {


        $('html').scrollTop(0)


        $('.buy-head__step').removeClass('current')


        $('.buy-head__step').removeClass('done')


        $('.buy-head__step').eq(0).addClass('done')


        $('.buy-head__step').eq(1).addClass('done')


        $('.buy-head__step').eq(2).addClass('current')


        $('.buy-head__line').removeClass('half')


        $('.buy-head__line').removeClass('full')


        $('.buy-head__line').addClass('full')


        $('.buy-head').scrollLeft($(window).width())


        $('.buy-basket').hide()


        $('.buy-order').hide()


        $('.buy-pay').show()


    }





    $('.buy-head__step').eq(0).click(function() {


        buyStep1()


    })





    $('.buy-head__step').eq(1).click(function() {


        buyStep2()


    })





    $('.buy-head__step').eq(2).click(function() {


        buyStep3()


    })





    $('.buy-info__btn-basket').click(function(e) {


        e.preventDefault()


        buyStep2()


    })





    $('.buy-info__btn-order').click(function(e) {


        e.preventDefault()


        buyStep3()


    })





    $('.buy-basket__count-btns .plus').click(function() {


        let current = parseInt($(this).parent().find('.value').text())


        current++


        $(this).parent().find('.value').text(current)


    })


    $('.buy-basket__count-btns .minus').click(function() {


        let current = parseInt($(this).parent().find('.value').text())


        if(current == 1) {


            return false


        } else {


            current--


            $(this).parent().find('.value').text(current)


        }





    })











    //_______________PRODUCTS CAROUSEL_______________








    $('.buy-carousel__items').owlCarousel({


        dots: false,


        nav: false,


        items: 1,


        autoWidth: true,


        smartSpeed: 700,


    })


    


    $('.buy-carousel__arrows .arrow-left').click(() => {


        $('.buy-carousel__items').trigger('prev.owl.carousel', [700]);


    })


    


    $('.buy-carousel__arrows .arrow-right').click(() => {


        $('.buy-carousel__items').trigger('next.owl.carousel', [700]);


    })








    //______________PROFILE______________








    $('.profile-edit').click((e) => {


        e.preventDefault()


        $('.profile-popup').fadeIn(600); 


    })


    


    


    


    $('.profile-popup__btns .save').click((e) => {


        e.preventDefault()


        $('.profile-popup').fadeOut(600); 


    })


    


    


    


    $('.profile-popup').click(e => {


        let div = $(".profile-popup__content");


        if (!div.is(e.target) 


            && div.has(e.target).length === 0) { 


            $('.profile-popup').fadeOut(600); 


        }


    })








    $('.profile-popup__btns .reset').click((e) => {


        e.preventDefault()


        $('.profile-popup input').val('')


    })


    





    //_______________LOGIN_______________





    $('.login-registr .login__input input').on('input', () => {


        if($('.login-registr .login__input input').eq(0).val() == ''


        || $('.login-registr .login__input input').eq(1).val() == ''


        || $('.login-registr .login__input input').eq(2).val() == ''


        || $('.login-registr .login__input input').eq(3).val() == '') {


            $('.login-registr .login__btn').addClass('disabled')


        }  else {


            $('.login-registr .login__btn').removeClass('disabled')


        }








    })








    //_________FEEDBACK _____________





    $('.feedback-open').click(e => {


        e.preventDefault()


        $('.feedback-call').fadeIn(700)


    })


    


    $('.feedback-close').click(e => {


        e.preventDefault()


        $('.feedback').fadeOut(700)


    })


    





    $('.feedback').click(e => {


        let div = $(".feedback-content");


        if (!div.is(e.target) 


            && div.has(e.target).length === 0) { 


            $('.feedback').fadeOut(600); 


        }


    })











    //_____________INPUTMASK__________








    $('.form__tel').inputmask("+\\9\\98 99 999 99 99")
















































































})