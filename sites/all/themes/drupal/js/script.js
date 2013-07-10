$(document).ready( function() {
    var after_start = {
        explore_and_discover: false,
        homepage_rotator_2: 0,
        big_resolution: (($(window).width() > 960) && ($(window).height() > 960)),
        big_resolution_init: 0
    };

    function resizeWindow() {
        if(after_start.big_resolution) {
            if($('.homepage-rotator-2:visible').length) {
                $('.homepage-rotator-2-v').show();

                if(after_start.big_resolution_init != 2) {
                    $('.homepage-rotator-2-v img').css({height: $('.homepage-rotator-2-v').height() + 'px'});
                    $('.homepage-rotator-2-v').jCarouselLite({
                        speed: 800, circular: true, infinite: false, scroll  : 1, visible : 1, wrap: 'circular', animation: 'fast', start: 0, btnPrev: ".homepage-rotator-2-left", btnNext: ".homepage-rotator-2-right"
                    });
                    $('.homepage-rotator-2-v ul').css('z-index', 'auto');

                    after_start.big_resolution_init++;
                }

                $('.homepage-rotator-2').hide();
            } else {
                $('.homepage-rotator-2').show();

                if(after_start.big_resolution_init != 2) {
                    $('.homepage-rotator-2 img').css({height: $('.homepage-rotator-2').height() + 'px'});
                    $('.homepage-rotator-2').jCarouselLite({
                        speed: 800, circular: true, infinite: false, scroll  : 1, visible : 1, wrap: 'circular', animation: 'fast', start: 0, btnPrev: ".homepage-rotator-2-left", btnNext: ".homepage-rotator-2-right"
                    });
                    $('.homepage-rotator-2 ul, .homepage-rotator-2-mobile ul').css('z-index', 'auto');

                    after_start.big_resolution_init++;
                }

                $('.homepage-rotator-2-v').hide();
            }
        }

        if($(window).width() <= 960) {
            $('.homepage-rotator').hide();
            $('.homepage-rotator-2').hide();
            $('.homepage-rotator-2-mobile').show();

            if($('.menu-main').css('display') == 'block') {
                $('.header').css({paddingTop: '55px', height: 'auto'});
            }

            if(after_start.homepage_rotator_2 != 2 && !after_start.big_resolution) {
                $('.homepage-rotator-2-mobile').jCarouselLite({
                    speed: 800, circular: true, infinite: false, scroll  : 1, visible : 1, wrap: 'circular', animation: 'fast', start: 0, btnPrev: ".homepage-rotator-2-left", btnNext: ".homepage-rotator-2-right"
                });
                $('.homepage-rotator-2 ul, .homepage-rotator-2-mobile ul').css('z-index', 'auto');

                after_start.homepage_rotator_2++;
            }

            var w = $(window).width();

            $('.footer-search-form-mobile .footer-search').css({width: (parseInt(w)-20) + 'px'});
            $('.footer-search-form-mobile .footer-search-center').css({width: (parseInt(w)-113-10) + 'px'});
        } else {
            $('.homepage-rotator').show();
            $('.homepage-rotator-2-mobile').hide();

            if(!after_start.big_resolution) {
                $('.homepage-rotator-2').show();
            }

            $('.header').css({paddingTop: '55px', height: '108px'});

            $('.menu-main > li > ul').css({display: 'none'});

            $('.explore-and-discover-list .more').remove();

            if(!after_start.explore_and_discover) {
                $('.explore-and-discover-slider').jCarouselLite({
                    speed: 1000, circular: true, infinite: false, scroll  : 1, visible : 3,  wrap: 'circular', animation: 'fast', start: 0, btnNext: ".explore-and-discover-right", btnPrev: ".explore-and-discover-left"
                });

                after_start.explore_and_discover = true;
            }

            if(after_start.homepage_rotator_2 != 2 && !after_start.big_resolution) {
                $('.homepage-rotator-2 img').css({height: $('.homepage-rotator-2').height() + 'px'});

                $('.homepage-rotator-2').jCarouselLite({
                    speed: 800, circular: true, infinite: false, scroll  : 1, visible : 1, wrap: 'circular', animation: 'fast', start: 0, btnPrev: ".homepage-rotator-2-left", btnNext: ".homepage-rotator-2-right"
                });
                $('.homepage-rotator-2 ul, .homepage-rotator-2-mobile ul').css('z-index', 'auto');

                after_start.homepage_rotator_2++;
            }
        }
    }

    if(after_start.big_resolution) {
        $('.homepage-rotator-2-v').append($('.homepage-rotator-2 ul').clone()).append($('.homepage-rotator-2 > div').clone());
    }


    $('.homepage-rotator-2-mobile').append($('.homepage-rotator-2 ul').clone()).append($('.homepage-rotator-2 > div').clone());
    $('.todays-tour-mobile').append($('.todays-tour > ').clone());

    $('.footer-search-form-mobile').append($('.footer-search-form > ').clone());

    $('.explore-and-discover-list-mobile').append($('.explore-and-discover-list > ').clone()).append('<li class="more"><a href="#">More</a></li>');

    $(window).resize(function () {resizeWindow(); });
    resizeWindow();

    var autoTime = 5000;

    if($('.homepage-rotator').length > 0){

        setInterval(function() {
            var w = $(window).width();
            //var left = $('.homepage-rotator ul').css('left');
            var col = $('.homepage-rotator li').length;
            var cur = $('.homepage-rotator li:visible').index();
            var slider = $('.homepage-rotator ul');


            //$('.homepage-rotator img').css({width: w});

            slider.animate({opacity:'0'}, 500, 'linear', function() {
                if(cur+1 != col) {
                    slider.find('li').eq(cur+1).show();
                    slider.find('li').eq(cur).hide();
                } else {
                    slider.find('li').eq(0).show();
                    slider.find('li').eq(cur).hide();
                }

                slider.animate({opacity:'1'}, 800);
            });
        }, 5000);
    }

    if($('.explore-and-discover-slider') && $(window).width() > 960) {
        $('.explore-and-discover-slider').jCarouselLite({
            speed: 1000, circular: true, infinite: false, scroll  : 1, visible : 3,  wrap: 'circular', animation: 'fast', start: 0, btnNext: ".explore-and-discover-right", btnPrev: ".explore-and-discover-left"
        });

        after_start.explore_and_discover = true;
    }

    $('.mobile-menu').on('click', function() {
        $('.menu-main').toggle();

        if($('.menu-main:visible').length) {
            $('.header').css({paddingTop: '55px', height: 'auto'});
            $(this).css({height: '108px'});
        } else {
            $('.header').css({paddingTop: '55px', height: '108px'});
        }
    });

    $('.menu-main > li > a').on('click', function() {
        $(this).parent().trigger('click');

        return false;
    });

    $('.menu-main > li').on('click', function() {
        if($(window).width() > 960) {
            return;
        }
        var li = $(this);
        var ul = li.find('ul');

        ul.toggle();

        if(!$(":visible", ul).length) {
            li.css({backgroundImage: 'url("images/mobile-nav-hide.png")'});
        } else {
            li.css({backgroundImage: 'url("images/mobile-nav-show.png")'});
        }
    });

    $('.styling-select-bgr').on('click', function() {
        $(this).parent().find('option').trigger('click');
    });

    if($('select').length) {
        $('select').selectbox();
    }

    if($('.content-slider').length) {
        $('.content-slider').jCarouselLite({
            speed: 800, circular: true, infinite: false, scroll  : 1, visible : 1, wrap: 'circular', animation: 'fast', start: 0, btnPrev: ".content-slider-left", btnNext: ".content-slider-right"
        });
    }
});
