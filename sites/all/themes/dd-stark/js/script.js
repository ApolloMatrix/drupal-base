(function ($) {

    Drupal.behaviors.stark = {

        attach: function (context) {

            $(document).ready( function() {

            var after_start = {
                explore_and_discover: false,
                homepage_rotator_2: 0,
                big_resolution: (($(window).width() > 1136) && ($(window).height() > 1136)),
                big_resolution_init: 0
            };

            $('.content-block img').each(function() {
                $(this).data('width', $(this).width());
            });

            if($('#sidebar-second').length > 0 ){
                // do nothing
                } else {
                $('.region.region-content').removeClass("region-content").addClass("fullwidtharea");
            }
            
                        

            function resizeWindow() {

                /** Ресайзим верхний слайдер */
                if($('.homepage-rotator img').height()) {
                    $('.homepage-slider').css({ height: $('.homepage-rotator img').height() + 'px' });
                }


            	$('.wrapper').css({'width': '100%'});

            	//$('.content-slider-wrapper li > div').css({ width: $('.content-slider-wrapper').width() + 'px' });
            
                if(after_start.big_resolution) {



                 if($(window).width() > 1136) {
                                 var $toursAnchor =   $('.visit-nav').find("a:contains('Mobile Tour')");

                   $toursAnchor.text('Tours');
                    $toursAnchor.attr("href", "/tours-us-botanic-garden");
               }
                
                    if($('.homepage-rotator-2:visible').length) {
                        $('.homepage-rotator-2-v').show();

                        if(after_start.big_resolution_init != 2) {
                       //     $('.homepage-rotator-2-v img').css({height: $('.homepage-rotator-2-v').height() + 'px'});
                            $('.homepage-rotator-2-v').jCarouselLite({
                                speed: 500, circular: true, infinite: false, scroll  : 1, visible : 1, wrap: 'circular', animation: 'fast', start: 0, btnPrev: ".homepage-rotator-2-left", btnNext: ".homepage-rotator-2-right", swipe: false,
                            });
                            $('.homepage-rotator-2-v ul').css('z-index', 'auto');

                            after_start.big_resolution_init++;
                        }

                        $('.homepage-rotator-2').hide();
                    } else {

                       if($(window).width() > 1136) {
                                 var $toursAnchor =   $('.visit-nav').find("a:contains('Mobile Tour')");

                   $toursAnchor.text('Tours');
                    $toursAnchor.attr("href", "/tours-us-botanic-garden");
               }
                        $('.homepage-rotator-2').show();

                        if(after_start.big_resolution_init != 2) {
                      //      $('.homepage-rotator-2 img').css({height: $('.homepage-rotator-2').height() + 'px'});
                            $('.homepage-rotator-2').jCarouselLite({
                                speed: 500, circular: true, infinite: false, scroll  : 1, visible : 1, wrap: 'circular', animation: 'fast', start: 0, btnPrev: ".homepage-rotator-2-left", btnNext: ".homepage-rotator-2-right", swipe: false,
                            });
                            $('.homepage-rotator-2 ul, .homepage-rotator-2-mobile ul').css('z-index', 'auto');

                            after_start.big_resolution_init++;
                        }

                        $('.homepage-rotator-2-v').hide();
                    }
                }
                
                $('.content-block img').each(function() {
                    if($(this).width() > ($(window).width()-50)) {
                        $(this).css('width','100%');
                    }
                    else {
                    	if($(this).data('width')) {
                        	//$(this).css('width', $(this).data('width'));
                        }
                    }
                });
                
                $('.menu-main > li').css({'backgroundImage': 'url("/sites/all/themes/stark/images/mobile-nav-hide.png")', 'background-repeat':'no-repeat'});
				$('.menu-main > li > ul').hide();

                 if($(window).width() > 1136) {
                                 var $toursAnchor =   $('.visit-nav').find("a:contains('Mobile Tour')");

                   $toursAnchor.text('Tours');
                    $toursAnchor.attr("href", "/tours-us-botanic-garden");
               }


                if($(window).width() <= 1136 ) {
                    $('.homepage-rotator').hide();
                    $('.homepage-rotator-2').hide();
                    $('.homepage-rotator-2-mobile').show();



                    if($('.menu-main').css('display') == 'block') {
                        $('.header').css({paddingTop: '55px', height: 'auto'});
                    }

                    if(after_start.homepage_rotator_2 != 2 && !after_start.big_resolution) {
                        $('.homepage-rotator-2-mobile').jCarouselLite({
                            speed: 500, circular: true, infinite: false, scroll  : 1, visible : 1, wrap: 'circular', animation: 'fast', start: 0, btnPrev: ".homepage-rotator-2-left", btnNext: ".homepage-rotator-2-right", swipe: false,
                        });
                        $('.homepage-rotator-2 ul, .homepage-rotator-2-mobile ul').css('z-index', 'auto');

                        $('.homepage-rotator-2').hide();

                        after_start.homepage_rotator_2++;
                    }
//                    } else {
//                        // 5.06
//                        $('.homepage-rotator-2').jCarouselLite({
//                            speed: 500, circular: true, infinite: false, scroll  : 1, visible : 1, wrap: 'circular', animation: 'fast', start: 0, btnPrev: ".homepage-rotator-2-left", btnNext: ".homepage-rotator-2-right", swipe: false,
//                        });
//                    }

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
                            speed: 1000, circular: false, infinite: false, scroll  : 1, visible : 3,  wrap: 'circular', animation: 'fast', start: 0, btnNext: ".explore-and-discover-right", btnPrev: ".explore-and-discover-left"
                        });

                        after_start.explore_and_discover = true;
                    }

                    if(after_start.homepage_rotator_2 != 2 && !after_start.big_resolution) {
                      //  $('.homepage-rotator-2 img').css({height: $('.homepage-rotator-2').height() + 'px'});

                        $('.homepage-rotator-2').jCarouselLite({
                            speed: 500, circular: true, infinite: false, scroll  : 1, visible : 1, wrap: 'circular', animation: 'fast', start: 0, btnPrev: ".homepage-rotator-2-left", btnNext: ".homepage-rotator-2-right", swipe: false,
                        });
                        $('.homepage-rotator-2 ul, .homepage-rotator-2-mobile ul').css('z-index', 'auto');

                        after_start.homepage_rotator_2++;
                    }
                    
                    var w = $(window).width();

                    $('.footer-search-form-mobile .footer-search').css({width: (parseInt(w)-20) + 'px'});
                    $('.footer-search-form-mobile .footer-search-center').css({width: (parseInt(w)-113-10) + 'px'});
                }
                
                $('.wrapper').css({ width: '100%' });
            }

            if(after_start.big_resolution) {
                $('.homepage-rotator-2-v').append($('.homepage-rotator-2 ul').clone()).append($('.homepage-rotator-2 > div').clone());
            } 


           	$('.homepage-rotator-2-mobile').append($('.homepage-rotator-2 ul').clone()).append($('.homepage-rotator-2 > div').clone());
            $('.todays-tour-mobile').append($('.todays-tour > div ').clone());

            $('.footer-search-form-mobile').append($('.footer-search').clone());

            $('.explore-and-discover-list-mobile').append($('.explore-and-discover-list li').clone()).append('<li class="more"><a href="#">More</a></li>');
            
            $('.explore-and-discover-list-mobile li').hide();
            $('.explore-and-discover-list-mobile li:eq(0), .explore-and-discover-list-mobile li:eq(1), .explore-and-discover-list-mobile li:last-child').show();
            
            $('.menu-main > li > ul').attr('class', '');

            $(window).resize(function () {resizeWindow(); });
            resizeWindow();
            
            $('.field-name-body span').css({fontSize: '24px'});
            
            
            if(!after_start.big_resolution && $('body.front').length) {
            	$('.homepage-rotator-2').show();
            }
            
           
  
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

                        slider.animate({opacity:'1'}, 500);
                    });
                }, 5000);
            }

            if($('.explore-and-discover-slider') && $(window).width() > 960  ) {
                $('.explore-and-discover-slider').jCarouselLite({
                    speed: 500, circular: false, infinite: false, scroll  : 1, visible : 3,  wrap: 'circular', animation: 'fast', start: 0, btnNext: ".explore-and-discover-right", btnPrev: ".explore-and-discover-left"
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
            
            $('.menu-main > li > ul a').on('click', function() {
				window.location = $(this).attr('href');
            	return false;
            });
            
            $('.menu-main > li > a').on('click', function() {
            
       
            	if($(this).parent().find('ul').css('display') == 'block' && $(window).width() <= 960 ) {
                	return true;
             	}
             	
             	
            	if(!($(window).width() > 1136)) {
            		//return;
            	}
            	
            	var li = $(this).parent();
                var ul = li.find('ul');
                var ind = li.index();
                
                if(ul.css('display') == 'block') {
                	return true;
             	}
   
            	$('.menu-main > li:not(:eq(' + ind + ')) > ul').hide();
                ul.toggle();
                
                return false;
            });

       

            $('.menu-main > li').on('click', function() {
               if(!($(window).width() > 1136 )) {
                var li = $(this);
                var ul = li.find('ul');
                
                

                ul.toggle();

                if(!$(":visible", ul).length) {
                    li.css({backgroundImage: 'url("/sites/all/themes/stark/images/mobile-nav-hide.png")'});
                } else {
                    li.css({backgroundImage: 'url("/sites/all/themes/stark/images/mobile-nav-show.png")'});
                }
                
                return false;
              } 
            });
            
            

            $('.styling-select-bgr').on('click', function() {
                $(this).parent().find('option').trigger('click');
            });

            if($('select').length) {
                $('select').selectbox();
            }
            
            if($('.content-slider-wrapper').length && !$('.homepage-whats-in-bloom').length) {
				$('.content-slider-wrapper').jCarouselLite({
				    speed: 500, circular: true, infinite: false, scroll  : 1, visible : 1, wrap: 'circular', animation: 'fast', start: 0, btnPrev: ".content-slider-left", btnNext: ".content-slider-right", swipe: false,
				});
				
				$('.content-slider-wrapper ul').css('z-index', 'auto');
			}

            $('.attach-submit').click(function() {
                $('#edit-submit').click();
                return false;
            });
            
            $('.explore-and-discover-list-mobile li.more').on('click', function() {
            	$('.explore-and-discover-list-mobile li').show();
            	
            	$(this).hide();
            	
            	return false;
            });
            
            // Contact Us
            if($('.page-node-36').length) {
            	var block = $('.field-name-field-post-desc .field-item');
            	var b1 = block.find('h3:eq(0), p');
            	var b2 = block.find('h3:eq(1), ul');
            	var links = $('.sharethis-buttons');
            	
            	var nb1 = $('<div>').addClass('width-50').append(b1);
            	var nb2 = $('<div>').addClass('width-50').append(b2);
            	var nb0 = $('<div>').addClass('gray-line-2');
            	
            	block.empty().append(nb0, nb1, nb2);
            	
            	$('.field-name-field-post-desc').after(links);
            }
            
            // Homepage

            var hitEvent = 'ontouchstart' in document.documentElement
                ? 'touchstart'
                : 'click';

            $('.menu-main > li > a, .menu-main > li, .menu-main > li > ul > li > a, .menu-main > li > ul > li').on('click', function() {
                window._menu_unhide = true;
            });

            $(window).on(hitEvent, function() {
                setTimeout(function() {
                    if($(window).width() > 1136 && !window._menu_unhide) {
                        if($('.menu-main > li > ul:visible').length) {
                            $('.menu-main > li > ul').hide();
                        }
                    }

                    window._menu_unhide = false;
                }, 700);
            });


            if($('#sidebar-second').length) {
                $('#sidebar-second').after($('.content .links'));
            }

            $('.st_fblike_button').after($('.print-mail').html('<img src="/sites/all/themes/stark/images/share-email.png">'));

            $('.field-type-text-with-summary img').css({ marginRight: '40px', 'marginLeft': '0px' });
        


        });

        }
    }

})(jQuery);
