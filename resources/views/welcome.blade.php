

@extends('template.app')

@section('content')


    <div class="bg-welcome">


    </div>


<section class="intro">
    <div class="title">
        <h4>ГОЛОСОВЫЕ ПРИВЕТСТВИЯ</h4>
        <h6>для телефонии и IVR</h6>
        <p><strong>3657</strong> довольных заказчика</p>
        <p><strong>368957</strong> записанных сообщений</p>
        <div class="intro-buttons">
            <a class="btn btn-primary">СДЕЛАТЬ ЗАКАЗ</a>
            <a class="btn btn-transparent-white">ОНЛАЙН КОНСУЛЬТАНТ</a>
        </div>
    </div>
</section>
{{--services--}}
<section class="services with-background-white-50">
    <h6 class="section-header">Наши услуги
    </h6>
    <div class="section-header-line">
    </div>
    <div class="container">
        <div class="service-block">
            <div class="circle">
                <div class="circle-inner">
                    <img src="/img/three.png">
                </div>
            </div>
            <h6>Разработка<br>текстов</h6>
            <p>
                Lorem ipsum dolor sit amet, ius movet postea audiam ex. Diam unum movet sed an, eam ea stet tollit.
                An quo
                dicant utinam, qui ne mundi viris. Doming vocent quo ut, in simul eripuit legimus mel. Eos sint
                natum at,
                cetero meliore apeirian in vis.
                An has nonumy iriure convenire, nam sumo volutpat dissentiet ad, nemore ancillae deserunt pri at.
                Putent
            </p>
            <div class="bottom">
                <a class="btn btn-transparent-primary">ПОДРОБНЕЕ</a>
            </div>
        </div>
        <div class="service-block">
            <div class="circle">
                <div class="circle-inner">
                    <img src="/img/multimedia.png">
                </div>
            </div>
            <h6>Иностранные<br>дикторы</h6>
            <p>
                Lorem ipsum dolor sit amet, ius movet postea audiam ex. Diam unum movet sed an, eam ea stet tollit.
                An quo
                dicant utinam, qui ne mundi viris. Doming vocent quo ut, in simul eripuit legimus mel. Eos sint
                natum at,
                cetero meliore apeirian in vis.
            </p>
            <div class="bottom">
                <a class="btn btn-transparent-primary">ПОДРОБНЕЕ</a>
            </div>
        </div>
        <div class="service-block">
            <div class="circle">
                <div class="circle-inner">
                    <img src="/img/gestures.png">
                </div>
            </div>
            <h6>Партнерская<br>программа</h6>
            <p>
                Lorem ipsum dolor sit amet, ius movet postea audiam ex. Diam unum movet sed an, eam ea stet tollit.
                An quo
                dicant utinam, qui ne mundi viris. Doming vocent quo ut, in simul eripuit legimus mel. Eos sint
                natum at,
                cetero meliore apeirian in vis.
            </p>
            <div class="bottom">
                <a class="btn btn-transparent-primary">ПОДРОБНЕЕ</a>
            </div>
        </div>
    </div>
</section>
{{--end services--}}


{{--clients--}}
<section class="clients with-background-black">
    <h6 class="section-header">Наши клиенты</h6>
    <div class="section-header-line">
    </div>
    <ul>
        <li>
            <img src="http://3.bp.blogspot.com/-5imOvX_YDlk/TYjP7Mo2_eI/AAAAAAAAAK8/3hDeTQYBU1E/s1600/splash_logo3.gif">
            <div class="img-cover"></div>
        </li>
        <li>
            <img src="http://tourdream.net/wp-content/uploads/2012/03/2012-03-22_01_TEZ-Tour-Logo.jpg">
        </li>
        <li>
            <img src="http://www.assettocorsa.net/wp-content/uploads/2013/09/logo1.png">
        </li>
        <li>
            <img src="http://38.media.tumblr.com/avatar_8226120358f0_128.png">
        </li>
    </ul>
    <br>
    <br>
    <br>
    <h6 class="section-header">О нас говорят</h6>
    <div class="section-header-line"></div>
    <br>

    <div class="container">
        <div class="comment-block">

            <div class="circle">
                <img class="circle-inner"
                     src="http://avatarbox.net/avatars/img26/the_terminator_avatar_picture_27066.jpg">
            </div>
            <h5 class="comment-author">
                Арнольд Шварценнегер
            </h5>
            <h6 class="comment-author-company">
                из фильма Командос
            </h6>

            <p><strong>...</strong></p>
            <p>«Все было офигенно. Слушаю сообщение каждое утро. Лучше утреннего кофе»</p>


        </div>
        <div class="comment-block">

            <div class="circle">
                <img class="circle-inner"
                     src="http://www.uznayvse.ru/images/celebs/bwillis_medium.jpg">
            </div>
            <h5 class="comment-author">
                Брюс Виллис
            </h5>
            <h6 class="comment-author-company">
                Из фильм Крепкий Орешек
            </h6>

            <p><strong>...</strong></p>
            <p>«Всем советую это удовольствие. Ради этого я бы подстригся налысо»</p>


        </div>
        <div class="comment-block">

            <div class="circle">
                <img class="circle-inner"
                     src="https://umd1.mycdn.me/image?id=812150945842&bid=812150974770&t=34&plc=MOBILE&ts=0000000052000001e6&tkn=*cp3uwwiuV8Yr3EhZSSHVRXC8Paw">
            </div>
            <h5 class="comment-author">
                Чак Норрис
            </h5>
            <h6 class="comment-author-company">
                Из всех фильмов
            </h6>

            <p><strong>...</strong></p>
            <p>«Крутая контора. Как я»</p>



        </div>




    </div>







</section>
{{--end clients--}}
{{--<section class="comments with-background-white-100">--}}
    {{--<h6 class="section-header">Отзывы</h6>--}}
    {{--<div class="section-header-line">--}}
    {{--</div>--}}
    {{--<div class="container">--}}
        {{--<div class="comment-block">--}}
            {{--<div class="circle">--}}
                {{--<img class="circle-inner"--}}
                     {{--src="http://avatarbox.net/avatars/img26/the_terminator_avatar_picture_27066.jpg">--}}
            {{--</div>--}}
            {{--<h5>--}}
                {{--Какой-то крутой чувак--}}
            {{--</h5>--}}
            {{--<h6>--}}
                {{--Из такой-то конторы--}}
            {{--</h6>--}}
            {{--<div class="section-header-line">--}}
            {{--</div>--}}
            {{--<p>--}}
                {{--«Это, мать его, лучшй сервис в мире. В жизни нчиего лучшего не встречал. Это круче, чем качалка»--}}
            {{--</p>--}}
        {{--</div>--}}
        {{--<div class="comment-block">--}}
            {{--<div class="circle">--}}
                {{--<img class="circle-inner"--}}
                     {{--src="http://avatarbox.net/avatars/img26/the_terminator_avatar_picture_27066.jpg">--}}
            {{--</div>--}}
            {{--<h5>--}}
                {{--Какой-то крутой чувак--}}
            {{--</h5>--}}
            {{--<h6>--}}
                {{--Из такой-то конторы--}}
            {{--</h6>--}}
            {{--<div class="section-header-line">--}}
            {{--</div>--}}
            {{--<p>--}}
                {{--«Это, мать его, лучшй сервис в мире. В жизни нчиего лучшего не встречал. Это круче, чем качалка»--}}
            {{--</p>--}}
        {{--</div>--}}
        {{--<div class="comment-block">--}}
            {{--<div class="circle">--}}
                {{--<img class="circle-inner"--}}
                     {{--src="http://avatarbox.net/avatars/img26/the_terminator_avatar_picture_27066.jpg">--}}
            {{--</div>--}}
            {{--<h5>--}}
                {{--Какой-то крутой чувак--}}
            {{--</h5>--}}
            {{--<h6>--}}
                {{--Из такой-то конторы--}}
            {{--</h6>--}}
            {{--<div class="section-header-line">--}}
            {{--</div>--}}
            {{--<p>--}}
                {{--«Это, мать его, лучшй сервис в мире. В жизни нчиего лучшего не встречал. Это круче, чем качалка»--}}
            {{--</p>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<section class="howto with-background-white-50">
    <h6 class="section-header">Как сделать заказ</h6>
    <div class="section-header-line"></div>
    <div class="container">
        <div class="howto-block">
            <div class="circle">
                <div class="circle-inner text-gradient">
                    <img src="/img/three.png">
                </div>
            </div>
            <h5>
                1. Написание текста
            </h5>
            <p>
                Текст о написании текста
            </p>
        </div>
        <div class="howto-block">
            <div class="circle">
                <div class="circle-inner speaker-gradient">
                    <img src="/img/three.png">
                </div>
            </div>
            <h5>
                2. Выбор диктора
            </h5>
            <p>
                Текст о важности выбора диктора
            </p>
        </div>
        <div class="howto-block">
            <div class="circle">
                <div class="circle-inner decor-gradient">
                    <img src="/img/three.png">
                </div>
            </div>
            <h5>
                3. Оформление
            </h5>
            <p>
                Текст о важности оформления
            </p>
        </div>
        <div class="howto-block">
            <div class="circle">
                <div class="circle-inner payment-gradient">
                    <img src="/img/three.png">
                </div>
            </div>
            <h5>
                4. Оплата
            </h5>
            <p>
                Текст о важности оплаты
            </p>
        </div>
    </div>
</section>
<section class="order-button with-background-blue">
    <div class="order-button-block">
        <h5>Начать работу?</h5>
    </div>
    <div class="order-button-block">
        <a class="btn btn-primary">СДЕЛАТЬ ЗАКАЗ</a>
    </div>
</section>

@stop

