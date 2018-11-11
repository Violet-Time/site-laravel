@extends("app")

@section('head_title', $restaurant->restaurant_name.' Menu' .' | '.getcong('site_name') )

@section('head_url', Request::url())

@section("content")
  <div class="side_page"></div>
  <div id="menu_page" class="menu_page">
    <div class="mp_top">
      <div class="mt_img">
        <img src="{{ URL::asset('upload/'.getcong('page_bg_image')) }}" alt="">
        <span><span>~</span> 80 мин.</span>
      </div>
      <span class="mt_name"><span>{{ $restaurant->restaurant_name }}</span><a class="info-restaurant-popup popup-with-zoom-anim" href="#info-restaurant-popup">Информация <br>
        о ресторане</a></span>
      <a class="comment-btn comments-popup popup-with-zoom-anim" href="#comments-popup">
        <div class="stars stars2">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <span class="comm-number">222</span>
      </a>
      <div class="mp_order">
        <span>Заказ от <strong>550 р.</strong></span>
        <span><span>Оплата</span> Онлайн, курьеру <img src="images/pay_1.jpg" alt=""><img src="images/pay_2.jpg" alt=""></span>
      </div>
      <div class="mr_search mp_search"><a href="menu.html"></a>
        <input type="text" placeholder="Поиск блюд и ресторанов">
      </div>
    </div>

    <div id="cards" class="cards">
      <a href="menu.html" class="c_more">Ещё</a>

      <div class="tabs_block">
        <div class="tabs">
          @foreach(\App\Categories::where('restaurant_id',$restaurant->id)->orderBy('category_name')->get() as $n=>$cat)
          <span class="tab">{{$cat->category_name}}</span>
          @endforeach
        </div>


        @foreach(\App\Categories::where('restaurant_id',$restaurant->id)->orderBy('category_name')->get() as $n=>$cat)
        <ui class="dish_list tab_content">
            @foreach(\App\Menu::where('menu_cat',$cat->id)->orderBy('menu_name')->get() as $menu_item)
            <li class="dish popular card">
              <a href="menu.html" class="c_name">{{$menu_item->menu_name}}</a>
              <div class="product-description">
                <a href="menu.html" class="c_img">
                  @if($menu_item->menu_image)
                    <img src="{{ URL::asset('upload/menu/'.$menu_item->menu_image.'-s.jpg') }}" />
                  @else
                    <img src="{{ URL::asset('upload/menu_img_s.png') }}" />
                  @endif
                </a>
                <div class="text-product">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, perferendis.</div>
              </div>
                <form id="ingredients" action="" method="get" data-chain-id="15275">
                  <input type="hidden" name="product_id" value="302181043"/>
                  <input type="hidden" name="quantity" value="1"/>
                  <input type="hidden" name="s_id" value="23582"/>
                  <input type="hidden" name="byWeight" value="0"/>
                  <div class="c_bot">
                    <span class="c_count">1 шт.</span>
                    <span class="c_price">{{getcong('currency_symbol')}} {{$menu_item->price}}</span>
                    <a href="#ingredients-popup" class="button show-ingr-popup ingredients-popup c_oreder">ЗАКАЗАТЬ</a>
                  </div>

                </form>
            </li>
            @endforeach
        </ui>
        @endforeach



      </div>
    </div>
  </div>
  @include("_particles.info_restaurant")
  @include("_particles.ingredients")
  @include("_particles.basket")
  @include("_particles.comments")
  @include("_particles.ordering")
@endsection
