<header>
    <div class="header">
        <a class="burger"><span></span></a>
        <a href="{{ URL::to('/') }}" class="logo">
            <img src="{{ URL::asset('upload/'.getcong('site_logo')) }}" alt="" >
        </a>
        <ul class="h_menu">
            <li class="to_main"><a href="{{ URL::to('/') }}">Главная</a></li>
            <li><a href="{{ URL::to('/') }}">Главная</a></li>
            <li><a href="{{URL::to('restaurants')}}">Рестораны</a></li>
            <li><a href="{{ URL::to('contact') }}">Контакты</a></li>
            <li><a href="{{ URL::to('about') }}">О нас</a></li>
        </ul>
        @if(Auth::check() and Auth::user()->usertype=='User')

            <a class="aut login1">{{Auth::user()->first_name}}</a>
                <ul class="animenu_nav_child">
                    <li><a href="{{ URL::to('profile') }}">Edit Profile</a></li>
                    <li><a href="{{ URL::to('change_pass') }}">Change Password</a></li>
                    <li><a href="{{URL::to('myorder')}}">My Order</a></li>
                    <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                </ul>
        @elseif(Auth::check() and Auth::user()->usertype=='Owner')
            <a class="aut login1">{{Auth::user()->first_name}}</a>
                <ul class="animenu_nav_child">
                    <li><a href="{{ URL::to('admin/dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                </ul>
        @elseif(Auth::check() and Auth::user()->usertype=='Admin')
            <a class="aut login1">{{Auth::user()->first_name}}</a>
                <ul class="animenu_nav_child">
                    <li><a href="{{ URL::to('admin/dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                </ul>


        @else

            <a href="#login-popup" class="login-popup popup-with-zoom-anim aut">Авторизация</a>

        @endif

        <div class="socials">
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
        </div>
    </div>
</header>