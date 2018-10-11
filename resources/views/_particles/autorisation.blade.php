
<div id="login-popup" class="zoom-anim-dialog mfp-hide modal-style">
    <h2>Вход</h2>
    {!! Form::open(array('url' => 'login','class'=>'','id'=>'login','role'=>'form')) !!}
    @if (count($errors) > 0)
        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(Session::has('flash_message'))

        <div class="alert alert-success fade in">

            {{ Session::get('flash_message') }}
        </div>


    @endif
        <label for="">
            Телефон
            <input type="text" name="email">
        </label>
        <label for="">
            Пароль
            <a href="#" class="restore">Восстановить</a>
            <input type="password" name="password">
        </label>
        <div class="btn-box">

            <button class="orange-btn" type="submit">Войти</button>
            <p>Если вы еще не зарегестрированы, можете пройти<br> регистрацию нажав зарегестрироваться</p>
            <a href="#register-popup" class="register-popup orange-btn grey-btn">Зарегистрироваться</a>
        </div>
    {!! Form::close() !!}
</div>


<div id="register-popup" class="zoom-anim-dialog mfp-hide modal-style">
    <h2>Регистрация</h2>
    {!! Form::open(array('url' => 'register','class'=>'','id'=>'myProfile','role'=>'form')) !!}
        <label for="">
            Имя
            <input type="text" name="first_name">
        </label>
        <label for="">
            Фамилия
            <input type="text" name="last_name">
        </label>
        <label class="wr-btn" for="">
            <span class="clear">Телефон</span>
            <input type="text"><a class="square-btn" href="#">Получить код</a>
        </label>
        <label for="">
            Код из СМС
            <input type="text">
        </label>
        <label for="">
            Пароль
            <input type="password" name="password">
        </label>
        <label for="">
            Повторите Пароль
            <input type="password" name="password_confirmation">
        </label>
        <input type="hidden" name="usertype" value="User">
        <div class="btn-box">
            <input class="orange-btn" type="button" value="Зарегистрироваться">
            <p class="rlight-txt">Нажимая кнопку "Зарегистрироваться"<br>я соглашаюсь с <a class="rule-services" href="#">правилами сервиса</a></p>
        </div>
    {!! Form::close() !!}
</div>