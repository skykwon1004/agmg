$(function () {
    // header
    $(window).on('scroll', function () {
        // console.log('스크롤 : ', $(window).scrollTop());   
        if ($(window).scrollTop() > 0) {
            $('.header_top').addClass('on');
        } else {
            $('.header_top').removeClass('on');
        }
    });


    $('.main_slide').slick({
        arrows: false,
        autoplay: true,
        autoplaySpeed: 4000,
        pauseOnHover: false,
        pauseOnFocus: false,
    });


    $('.arrows i:nth-child(1)').on('click', function () {
        $('.main_slide').slick('slickPrev');
    });

    $('.arrows i:nth-child(2)').on('click', function () {
        $('.main_slide').slick('slickNext');
    })

    // main_produt_slide
    $('.main_pro_slide').slick({
        arrows: false,
        slidesToShow: 3,

    });


    $('.arrows i:nth-child(1)').on('click', function () {
        $('.main_pro_slide').slick('slickPrev');
    });

    $('.arrows i:nth-child(2)').on('click', function () {
        $('.main_pro_slide').slick('slickNext');
    })




    // to top button
    $(window).on('scroll', function () {
        var sct = $(window).scrollTop();
        console.log(sct);

        if (sct > 500) {
            //$('.toTop').fadeIn();
            $('.to_top').addClass('on')
        } else {
            $('.to_top').removeClass('on')
        }
    });

    $('.to_top').on('click', function () {
        $('html, body').animate({ scrollTop: 0 })
    });














})