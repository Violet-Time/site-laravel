@extends("app")
@section("content")

@include("_particles.search_slider")

    <!-- Content ================================================== -->


<!-- <div class="mob_slider_block">
    <ul class="mob_slider">
        <li><div class="ms_content"><span class="ms_item">Реклама</span> <span class="ms_item">Реклама</span></div></li>
    </ul>
</div> -->

<div class="city_wrap">
    <div class="city">
        <select class="selectBlock">
            <option value="0">Выбрать город</option>
            <option>город 1</option>
            <option>город 2</option>
        </select>
        <a href="" class="r_find">Найти рестораны</a>
    </div>
</div>

<div class="cats">
    <span class="cats_head">Выберете категорию</span>
    <div class="cat_items">
        <a href="{{URL::to('restaurants')}}" class="cat_item"><img src="images/cat_1.png" alt="">Рестораны</a>
    </div>
    <p>Место для текста место для текста место для текста место для текста место для текста</p>
</div>

<div class="offers">
    <span>Наши лучшие предложения</span>
    <div class="o_items">
        <div class="o_item">
            <div class="oi_img"><span>ФОТО</span></div>
            <div class="oi_content">
                <span>Заголовок акции</span><span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
Lorem ipsum dolor sit amet, </span>
                <a href="" class="oi_more">Подробнее</a>
            </div>
        </div>
        <div class="o_item">
            <div class="oi_img"><span>ФОТО</span></div>
            <div class="oi_content">
                <span>Заголовок акции</span><span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
Lorem ipsum dolor sit amet, </span>
                <a href="" class="oi_more">Подробнее</a>
            </div>
        </div>
        <div class="o_item">
            <div class="oi_img"><span>ФОТО</span></div>
            <div class="oi_content">
                <span>Заголовок акции</span><span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
Lorem ipsum dolor sit amet, </span>
                <a href="" class="oi_more">Подробнее</a>
            </div>
        </div>
        <div class="o_item">
            <div class="oi_img"><span>ФОТО</span></div>
            <div class="oi_content">
                <span>Заголовок акции</span><span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
Lorem ipsum dolor sit amet, </span>
                <a href="" class="oi_more">Подробнее</a>
            </div>
        </div>
    </div>
</div>

<div class="about">
    <div class="a_left">
        <span class="al_head">О нас</span>
        <p><strong>Delivery Club</strong> — это независимый клубный проект, объединивший сотни служб доставки пиццы, суши, еды и продуктов в Единую Систему Заказов.</p>
        <p><strong>Цель проекта</strong> — обеспечить своим пользователям наилучшие условия для быстрого, удобного и выгодного осуществления заказов.</p>
    </div>
    <div class="a_right">
        <span class="ar_head">Призы</span>
        <a href="" class="ar_cat"><strong>Большой каталог</strong> <br>
            приятных призов</a>
    </div>
</div>

<!-- End section -->
<!-- End Content =============================================== -->

@endsection
