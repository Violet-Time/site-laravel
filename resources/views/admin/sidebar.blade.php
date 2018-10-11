<!-- Sidebar Left -->
  <div class="sidebar left-side" id="sidebar-left">
	 
	<!-- Wrapper Reqired by Nicescroll (start scroll from here) -->
	<div class="nicescroll">
		<div class="wrapper" style="margin-bottom:90px">
			<ul class="nav nav-sidebar" id="sidebar-menu">
               
                	@if(Auth::user()->usertype=='Admin')
               
               		<li class="{{classActivePath('dashboard')}}"><a href="{{ URL::to('admin/dashboard') }}"><i class="fa fa-dashboard"></i>Главная</a></li>
                
               		<li class="{{classActivePath('types')}}"><a href="{{ URL::to('admin/types') }}"><i class="fa fa-tags"></i>Фильтры</a></li>

               		<li class="{{classActivePath('restaurants')}}"><a href="{{ URL::to('admin/restaurants') }}"><i class="fa fa-cutlery"></i>Рестораны</a></li>

               		<li class="{{classActivePath('allorder')}}"><a href="{{ URL::to('admin/allorder') }}"><i class="fa fa-cart-plus"></i>Список заказов</a></li>
	                
	                <li class="{{classActivePath('users')}}"><a href="{{ URL::to('admin/users') }}"><i class="fa fa-users"></i>Пользователи</a></li>
	                
	                <li class="{{classActivePath('widgets')}}"><a href="{{ URL::to('admin/widgets') }}"><i class="fa fa-plus"></i>Виджеты</a></li>
	                
	                <li class="{{classActivePath('settings')}}"><a href="{{ URL::to('admin/settings') }}"><i class="md md-settings"></i>Настройки</a></li>
               	
               	 @else

               	 	<li class="{{classActivePath('dashboard')}}"><a href="{{ URL::to('admin/dashboard') }}"><i class="fa fa-dashboard"></i>Главная</a></li>
                
               	 
               		<li class="{{classActivePath('restaurants')}}"><a href="{{ URL::to('admin/myrestaurants') }}"><i class="fa fa-cutlery"></i>Мой ресторан</a></li>

               		<li class="{{classActivePath('categories')}}"><a href="{{ URL::to('admin/categories') }}"><i class="fa fa-folder"></i>Категории</a></li>

               		<li class="{{classActivePath('menu')}}"><a href="{{ URL::to('admin/menu') }}"><i class="fa fa-folder"></i>Меню</a></li>

               		<li class="{{classActivePath('orderlist')}}"><a href="{{ URL::to('admin/orderlist') }}"><i class="fa fa-cart-plus"></i>Список заказов</a></li>

               		<li class="{{classActivePath('reviews')}}"><a href="{{ URL::to('admin/reviews') }}"><i class="md-rate-review"></i>Обзор</a></li>
	                 

               	 @endif	
               		 
 
			</ul>

			 
		</div>
	</div>
</div>
  <!-- // Sidebar -->

  <!-- Sidebar Right -->
  <div class="sidebar right-side" id="sidebar-right">
	<!-- Wrapper Reqired by Nicescroll -->
	<div class="nicescroll">
		<div class="wrapper">
			<div class="block-primary">
				<div class="media">
					<div class="media-left media-middle">
						<a href="#">
							 @if(Auth::user()->image_icon)
                                 
									<img src="{{ URL::asset('upload/members/'.Auth::user()->image_icon.'-s.jpg') }}" width="60" alt="person" class="img-circle border-white">
							
							@else
								
							<img src="{{ URL::asset('admin_assets/images/guy.jpg') }}" alt="person" class="img-circle border-white" width="60"/>
							
							@endif
						</a>
					</div>
					<div class="media-body media-middle">
						<a href="{{ URL::to('admin/profile') }}" class="h4">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a>
						<a href="{{ URL::to('admin/logout') }}" class="logout pull-right"><i class="md md-exit-to-app"></i></a>
					</div>
				</div>
			</div>
			<ul class="nav nav-sidebar" id="sidebar-menu">
				<li><a href="{{ URL::to('admin/profile') }}"><i class="md md-person-outline"></i> Учетная запись</a></li>
				
				@if(Auth::user()->usertype=='Admin')
				
				<li><a href="{{ URL::to('admin/settings') }}"><i class="md md-settings"></i> Настройки</a></li>
				
				@endif
				
				<li><a href="{{ URL::to('admin/logout') }}"><i class="md md-exit-to-app"></i> Выйти</a></li>
			</ul>
		</div>
	</div>
</div>
  <!-- // Sidebar -->
