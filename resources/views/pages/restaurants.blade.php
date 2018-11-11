@extends("app")
@section("content")

    <div class="side_page"></div>
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

    <div class="menu">
        <span class="filter_btn">Фильтр, сортировка</span>
        <div class="m_left">

            <div class="tabs_block">
                <div class="tabs">
                    <span class="tab">Рестораны</span>
                    <span class="tab">Магазины</span>
                </div>
                <div class="tab_content">
                    <div class="tab_item">
                        <ul class="m_list">
                            @foreach($types as $i => $type)
                                @if($type->parent_id == 0)
                                    <li><span class="ml_switch">{{$type->name}}</span>
                                        <ul>
                                            @foreach($types as $i => $children)
                                                @if($children->parent_id == $type->id)
                                                <li>
                                                    <label class="niceCheck">
                                                        <input type="{{ $type->type == 1 ? 'checkbox' : 'radio' }}" name="ch1">
                                                        <span>{{$children->name}}</span>
                                                    </label>
                                                </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="tab_item">Содержимое 2</div>
                </div>
            </div>
        </div>


        <div class="m_right">

            <div class="mr_search">
                {!! Form::open(array('url' => 'restaurants/search','class'=>'','id'=>'search','role'=>'form')) !!}
                <input type="search" placeholder="Restaurant name or address..." name="search_keyword" id="search">
                <button type="submit"><a href=""> </a></button>
                {!! Form::close() !!}
            </div>
            @foreach($restaurants as $i => $restaurant)
            <div class="m_cards">
                <a class="strip_list" href="{{URL::to('restaurants/menu/'.$restaurant->restaurant_slug)}}">
                <div class="m_card">
                    <img class="m_img" src="images/m_img_1.jpg" alt="">
                    <div class="mc_top">
                        <div class="mc_logo"><span><img src="{{ URL::asset('upload/restaurants/'.$restaurant->restaurant_logo.'-s.jpg') }}" alt="{{ $restaurant->restaurant_name }}"></span></div>
                        <div class="mc_descr">
                            <div class="d_name">{{ $restaurant->restaurant_name }}
                                <div class="stars">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <span class="d_type"></span>
                            <span class="d_kitchen"><span>Кухни:</span></span>
                        </div>
                    </div>
                    <div class="mc_bot">
                        <div class="mcb_col">
            <span class="m_order"><span>Заказ от </span> 500р
            </span>
                        </div>
                        <div class="mcb_col">
            <span class="m_delivery"><span>Доставка </span> <i>Бесплатно,</i> <span>40 мин</span>
            </span>
                        </div>
                        <div class="mcb_col">
            <span><span>Оплата </span> Онлайн, курьеру<a href=""><img src="images/pay_1.jpg" alt=""></a><a href=""><img src="images/pay_2.jpg" alt=""></a>
            </span>
                        </div>
                    </div>
                </div>



            </div>
            @endforeach



        </div>



    </div>

@endsection
