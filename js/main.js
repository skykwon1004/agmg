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
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]

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




    $('.mopen').on('click', function () {
        $('.header').toggleClass('on')
    });


    $('.header .gnb>ul>li>a').on('click', function (e) {
        if ($('.header').hasClass('on')) {
            // header에 on이 붙었을때만 이벤트 정지하라
            e.preventDefault();
        };
        // return false;     a 이벤트 막는법 두번째
        console.log(e, e.currentTarget, $(this));
        $('.header .gnb>ul>li .smenu').removeClass('on');
        $(this).next().addClass('on');
        // 내가 클릭한 this 의 next에(자식) on을 붙여라
    });


    // 모바일 메뉴열었을때 뒤에 스크롤 안되게하는
    $('.header').on('scroll wheel touchmove', function (e) {
        if ($('.header').hasClass('on')) {
            // header에 on이 붙었을때만 이벤트 정지하라
            e.preventDefault();
        };
    });











})