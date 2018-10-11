$(document).ready(function() { 

//mobile menu
$(".burger").on('click', function() {
    $(".h_menu").slideToggle(200, function() {
        if ($(this).css('display') === 'none') {
            $(this).removeAttr('style');
        }
    });
});
$(".login1").on('click', function() {
    $(".animenu_nav_child").slideToggle(200, function() {
        if ($(this).css('display') === 'none') {
            $(this).removeAttr('style');
        }
    });
});
//Слайдеры
$('.slider').bxSlider({  
	mode: 'fade',
	auto: true,
	controls: false,
	pager: false
});
/*
$('.mob_slider').bxSlider({  	
	controls: false,
	pager: false,
}); */


//footer_mob_lists
var hq = window.matchMedia('all and (max-width: 640px)');
if (hq.matches) {
    $(".fl_head").click(function() {
        $(this).next(".f_list").slideToggle();
        $(this).toggleClass('open');
    });
} else {}


//tabs
$(".tab_item").not(":first").hide();
$(".tabs_block .tab").click(function() {
    $(".tabs_block .tab").removeClass("active").eq($(this).index()).addClass("active");
    $(".tab_item").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("active");

//menu left
$(".ml_switch").click(function() {
    $(this).siblings("ul").slideToggle();
    $(this).toggleClass('open');
});

//filter mobile
$(".filter_btn").click(function() {
    $(".m_left").slideToggle();
    $(this).toggleClass('open');
});


//popup-window

        $('.login-popup').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,
            
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });
        $('.register-popup').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,
            
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });
        $('.info-restaurant-popup').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,
            
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });
        $('.ingredients-popup').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,
            
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

        $('.basket-popup').bind('click',function(){
               $('#ingredients-popup').magnificPopup('close');
               $('#basket-popup').fadeIn( "fast" );
               $('#basket-popup').animate({'bottom':'0px'},500);

        });

        $('.comments-popup').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,
            
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });
        $('.ordering-popup').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,
            
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

        









});