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

/*
    $("#card-add").on('click',function() {
        $.ajax({
            type: "GET",
            url: "ajax/card",
            data: '' ,
            success: function (data) {
                
            }


            });
            alert("1");

            /*
        $(".animenu_nav_child").slideToggle(200, function() {
            if ($(this).css('display') === 'none') {
                $(this).removeAttr('style');
            }
        });*/
    /*});*/
    $('#ingredients .ingredients-popup').on('click',function(e) {
        e.preventDefault();
        var product_id = $('#ingredients').find('input[name="product_id"]').val();
        var affiliate_id = $('#ingredients').find('input[name="s_id"]').val();
        $.ajax({
            type: 'GET',
            url: '/ajax/ingredients',
            data: product_id,
            success: function(data){
                console.log(data);
                //Формируем список ингредиентов в буффер
                var buffer = '<ul class="ingredients_ul">';
                var length = data.length;
                var limit = 0;
                var text = "<h2>Хот Карри 30 см</h2>\n" +
                    "    <div class=\"ingredients-item\">\n" +
                    "        <div class=\"composition-food\">\n" +
                    "            Соус сити пицца, сыр моцарелла, <br>\n" +
                    "            ветчина , свинина, <br>\n" +
                    "            болгарский перец,<br>\n" +
                    "            лук фри, перец холопеньо\n" +
                    "            <div class=\"number-food\">\n" +
                    "                <img src=\"images/b-minus.png\" alt=\"minus\">\n" +
                    "                <input type=\"text\" value=\"1\">\n" +
                    "                <img src=\"images/b-plus.png\" alt=\"plus\">\n" +
                    "            </div>\n" +
                    "        </div>\n" +
                    "        <div class=\"image-food\">\n" +
                    "            <img src=\"images/food-image.png\" alt=\"food-image\">\n" +
                    "        </div>\n" +
                    "    </div>\n" +
                    "    <div class=\"ingredients-item\">\n" +
                    "        <p>Выберите:</p>\n" +
                    "        <ul>\n" +
                    "            <li>\n" +
                    "                <label>\n" +
                    "                    <input class=\"checkbox\" type=\"checkbox\" name=\"checkbox-test\">\n" +
                    "                    <span class=\"checkbox-custom\"></span>\n" +
                    "                    <span class=\"label\">Тонкое</span>\n" +
                    "                </label>\n" +
                    "            </li>\n" +
                    "            <li>\n" +
                    "                <label>\n" +
                    "                    <input class=\"checkbox\" type=\"checkbox\" name=\"checkbox-test\">\n" +
                    "                    <span class=\"checkbox-custom\"></span>\n" +
                    "                    <span class=\"label\">Толстое</span>\n" +
                    "                </label>\n" +
                    "            </li>\n" +
                    "            <li>\n" +
                    "                <label>\n" +
                    "                    <input class=\"checkbox\" type=\"checkbox\" name=\"checkbox-test\">\n" +
                    "                    <span class=\"checkbox-custom\"></span>\n" +
                    "                    <span class=\"label\">Сырный борт</span>\n" +
                    "                </label>\n" +
                    "                <div class=\"b-price\">189р</div>\n" +
                    "            </li>\n" +
                    "            <li>\n" +
                    "                <label>\n" +
                    "                    <input class=\"checkbox\" type=\"checkbox\" name=\"checkbox-test\">\n" +
                    "                    <span class=\"checkbox-custom\"></span>\n" +
                    "                    <span class=\"label\">Мясной борт</span>\n" +
                    "                </label>\n" +
                    "            </li>\n" +
                    "        </ul>\n" +
                    "    </div>\n" +
                    "    <div class=\"ingredients-item\">\n" +
                    "        <p>Дополнительные ингридиенты:</p>\n" +
                    "        <ul>\n" +
                    "            <li>\n" +
                    "                <label>\n" +
                    "                    <input class=\"checkbox\" type=\"checkbox\" name=\"checkbox-test\">\n" +
                    "                    <span class=\"checkbox-custom\"></span>\n" +
                    "                    <span class=\"label\">Перец сладкий</span>\n" +
                    "                </label>\n" +
                    "                <div class=\"b-price\">70р</div>\n" +
                    "            </li>\n" +
                    "            <li>\n" +
                    "                <label>\n" +
                    "                    <input class=\"checkbox\" type=\"checkbox\" name=\"checkbox-test\">\n" +
                    "                    <span class=\"checkbox-custom\"></span>\n" +
                    "                    <span class=\"label\">Помидоры свежие</span>\n" +
                    "                </label>\n" +
                    "                <div class=\"b-price\">70р</div>\n" +
                    "            </li>\n" +
                    "            <li>\n" +
                    "                <label>\n" +
                    "                    <input class=\"checkbox\" type=\"checkbox\" name=\"checkbox-test\">\n" +
                    "                    <span class=\"checkbox-custom\"></span>\n" +
                    "                    <span class=\"label\">Сосиски с сыром</span>\n" +
                    "                </label>\n" +
                    "                <div class=\"b-price\">70р</div>\n" +
                    "            </li>\n" +
                    "            <li>\n" +
                    "                <label>\n" +
                    "                    <input class=\"checkbox\" type=\"checkbox\" name=\"checkbox-test\">\n" +
                    "                    <span class=\"checkbox-custom\"></span>\n" +
                    "                    <span class=\"label\">Митболы из говядины</span>\n" +
                    "                </label>\n" +
                    "                <div class=\"b-price\">70р</div>\n" +
                    "            </li>\n" +
                    "            <li>\n" +
                    "                <label>\n" +
                    "                    <input class=\"checkbox\" type=\"checkbox\" name=\"checkbox-test\">\n" +
                    "                    <span class=\"checkbox-custom\"></span>\n" +
                    "                    <span class=\"label\">Сыр моцарелла</span>\n" +
                    "                </label>\n" +
                    "                <div class=\"b-price\">70р</div>\n" +
                    "            </li>\n" +
                    "            <li>\n" +
                    "                <label>\n" +
                    "                    <input class=\"checkbox\" type=\"checkbox\" name=\"checkbox-test\">\n" +
                    "                    <span class=\"checkbox-custom\"></span>\n" +
                    "                    <span class=\"label\">Колбаса пеперони</span>\n" +
                    "                </label>\n" +
                    "                <div class=\"b-price\">70р</div>\n" +
                    "            </li>\n" +
                    "            <li>\n" +
                    "                <label>\n" +
                    "                    <input class=\"checkbox\" type=\"checkbox\" name=\"checkbox-test\">\n" +
                    "                    <span class=\"checkbox-custom\"></span>\n" +
                    "                    <span class=\"label\">Ветчина</span>\n" +
                    "                </label>\n" +
                    "                <div class=\"b-price\">70р</div>\n" +
                    "            </li>\n" +
                    "            <li>\n" +
                    "                <label>\n" +
                    "                    <input class=\"checkbox\" type=\"checkbox\" name=\"checkbox-test\">\n" +
                    "                    <span class=\"checkbox-custom\"></span>\n" +
                    "                    <span class=\"label\">Шампиньены</span>\n" +
                    "                </label>\n" +
                    "                <div class=\"b-price\">70р</div>\n" +
                    "            </li>\n" +
                    "            <li>\n" +
                    "                <label>\n" +
                    "                    <input class=\"checkbox\" type=\"checkbox\" name=\"checkbox-test\">\n" +
                    "                    <span class=\"checkbox-custom\"></span>\n" +
                    "                    <span class=\"label\">Бекон</span>\n" +
                    "                </label>\n" +
                    "                <div class=\"b-price\">70р</div>\n" +
                    "            </li>\n" +
                    "            <li>\n" +
                    "                <label>\n" +
                    "                    <input class=\"checkbox\" type=\"checkbox\" name=\"checkbox-test\">\n" +
                    "                    <span class=\"checkbox-custom\"></span>\n" +
                    "                    <span class=\"label\">Колбаса салями</span>\n" +
                    "                </label>\n" +
                    "                <div class=\"b-price\">70р</div>\n" +
                    "            </li>\n" +
                    "            <li>\n" +
                    "                <label>\n" +
                    "                    <input class=\"checkbox\" type=\"checkbox\" name=\"checkbox-test\">\n" +
                    "                    <span class=\"checkbox-custom\"></span>\n" +
                    "                    <span class=\"label\">Куриные грудки</span>\n" +
                    "                </label>\n" +
                    "                <div class=\"b-price\">70р</div>\n" +
                    "            </li>\n" +
                    "            <li>\n" +
                    "                <label>\n" +
                    "                    <input class=\"checkbox\" type=\"checkbox\" name=\"checkbox-test\">\n" +
                    "                    <span class=\"checkbox-custom\"></span>\n" +
                    "                    <span class=\"label\">Фарш из говядины</span>\n" +
                    "                </label>\n" +
                    "                <div class=\"b-price\">70р</div>\n" +
                    "            </li>\n" +
                    "            <li>\n" +
                    "                <label>\n" +
                    "                    <input class=\"checkbox\" type=\"checkbox\" name=\"checkbox-test\">\n" +
                    "                    <span class=\"checkbox-custom\"></span>\n" +
                    "                    <span class=\"label\">Халапеньо</span>\n" +
                    "                </label>\n" +
                    "                <div class=\"b-price\">70р</div>\n" +
                    "            </li>\n" +
                    "            <li>\n" +
                    "                <label>\n" +
                    "                    <input class=\"checkbox\" type=\"checkbox\" name=\"checkbox-test\">\n" +
                    "                    <span class=\"checkbox-custom\"></span>\n" +
                    "                    <span class=\"label\">Лук</span>\n" +
                    "                </label>\n" +
                    "                <div class=\"b-price\">70р</div>\n" +
                    "            </li>\n" +
                    "            <li>\n" +
                    "                <label>\n" +
                    "                    <input class=\"checkbox\" type=\"checkbox\" name=\"checkbox-test\">\n" +
                    "                    <span class=\"checkbox-custom\"></span>\n" +
                    "                    <span class=\"label\">Ананасы</span>\n" +
                    "                </label>\n" +
                    "                <div class=\"b-price\">70р</div>\n" +
                    "            </li>\n" +
                    "            <li>\n" +
                    "                <label>\n" +
                    "                    <input class=\"checkbox\" type=\"checkbox\" name=\"checkbox-test\">\n" +
                    "                    <span class=\"checkbox-custom\"></span>\n" +
                    "                    <span class=\"label\">Маслины</span>\n" +
                    "                </label>\n" +
                    "                <div class=\"b-price\">70р</div>\n" +
                    "            </li>\n" +
                    "            <li>\n" +
                    "                <label>\n" +
                    "                    <input class=\"checkbox\" type=\"checkbox\" name=\"checkbox-test\">\n" +
                    "                    <span class=\"checkbox-custom\"></span>\n" +
                    "                    <span class=\"label\">Лук фри</span>\n" +
                    "                </label>\n" +
                    "                <div class=\"b-price\">70р</div>\n" +
                    "            </li>\n" +
                    "            <li>\n" +
                    "                <label>\n" +
                    "                    <input class=\"checkbox\" type=\"checkbox\" name=\"checkbox-test\">\n" +
                    "                    <span class=\"checkbox-custom\"></span>\n" +
                    "                    <span class=\"label\">Грибной микс</span>\n" +
                    "                </label>\n" +
                    "                <div class=\"b-price\">70р</div>\n" +
                    "            </li>\n" +
                    "        </ul>\n" +
                    "    </div>\n" +
                    "    <a class=\"big-orange-btn basket-popup\" href=\"#basket-popup\">\n" +
                    "        <span>Добавить в заказ</span>\n" +
                    "        <span>480 p.</span>\n" +
                    "    </a>\n";
                /*for (i = 0; i < length + 3; i += 3) {
                    if (i >= length) {
                        if (++limit == 3) {
                            buffer += '</ul>';
                            break;
                        }

                        buffer += '</ul><ul class="ingredients_ul">', i = limit - 3;
                        continue;
                    }

                    buffer += '<li><label><input type="checkbox" value="' + data[i].id + '" name="ingr[]"/><span></span> <i>' + data[i].title + ' <i>+ <i>' + data[i].price + '</i> руб.</i></i></label></li>';
                }*/

                //Добавляем ингредиенты в попап
                //alert(buffer);
                $("#ingredients-popup").html(text);


                //Popup.current.proccess_ajax_data();
            }


        });
        /*
    $(".animenu_nav_child").slideToggle(200, function() {
        if ($(this).css('display') === 'none') {
            $(this).removeAttr('style');
        }
    });*/
    });

//footer_mob_lists
var hq = window.matchMedia('all and (max-width: 640px)');
if (hq.matches) {
    $(".fl_head").click(function() {
        $(this).next(".f_list").slideToggle();
        $(this).toggleClass('open');
    });
} else {}


//tabs
$(".tab_content").not(":first").hide();
$(".tabs_block .tab").click(function() {
    $(".tabs_block .tab").removeClass("active").eq($(this).index()).addClass("active");
    $(".tab_content").hide().eq($(this).index()).fadeIn()
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
               $('.ingredients-popup').magnificPopup('close');
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