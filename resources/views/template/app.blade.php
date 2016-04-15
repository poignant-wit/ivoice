<!DOCTYPE html>
<html>
<head>
    <title>Ivoice</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>



<nav>
    <div class="nav">
        <div class="nav-block">
            <a href="{{ url('/') }}"><h5>IVR-VOICE</h5></a>
        </div>
        <div class="nav-block">
            <ul>
                <li><a>ПОРТФОЛИО</a></li>
                <li><a href="{{ url('speakers') }}">ДИКТОРЫ</a></li>
                <li><a href="{{ url('decor') }}">ОФОРМЛЕНИЕ</a></li>
                <li><a>ПРАЙС</a></li>
                <li><a>ОПЛАТА</a></li>
            </ul>
        </div>
        <div class="nav-block">
            <h6>КОНТАКТЫ</h6>
        </div>
    </div>
</nav>










@yield('content')



<section class="footer">
    <div class="container">
        <div class="footer-block send-message">
            <h6>Отправьте нам сообщение:</h6>
            <form action="action_page.php">
                <input type="text" name="firstname" placeholder="Ваше имя"><br>
                <br>
                <textarea type="text" rows="8" placeholder="Текст сообщения"></textarea><br><br>
                <a type="submit" value="Submit" class="btn btn-primary">Отправить</a>
            </form>
        </div>
        <div class="footer-block">
            <div class="footer-block">
                <a href=""><h6>Что такое ИВР?</h6></a>
                <a href=""><h6>Что такое sgdfgsdfg drgИВР?</h6></a>
                <a href=""><h6>Что такое sgdfgsdfg drgИВР?</h6></a>
                <a href=""><h6>Что такое sgdfgsdfg drgИВР?</h6></a>
                <a href=""><h6>Что такое sgdfgsdfg drgИВР?</h6></a>
                <a href=""><h6>Что такое sgdfgsdfg drgИВР?</h6></a>
                <a href=""><h6>Что такое sgdfgsdfg drgИВР?</h6></a>
                <a href=""><h6>Что такое sgdfgsdfg drgИВР?</h6></a>
                <a href=""><h6>Что такое sgdfgsdfg drgИВР?</h6></a>
            </div>
            <div class="footer-block">
                <a href=""><h6>Что такоzdfgzdfgzdfgе ИВР?</h6></a>
                <a href=""><h6>Что таzdfgzdfgzdfgzdfgкое ИВР?</h6></a>
                <a href=""><h6>Что таzdfgzdfgzdfgzdfgкое ИВР?</h6></a>
                <a href=""><h6>Что таzdfgzdfgzdfgzdfgкое ИВР?</h6></a>
                <a href=""><h6>Что таzdfgzdfgzdfgzdfgкое ИВР?</h6></a>
                <a href=""><h6>Что таzdfgzdfgzdfgzdfgкое ИВР?</h6></a>
                <a href=""><h6>Что таzdfgzdfgzdfgzdfgкое ИВР?</h6></a>
            </div>
        </div>
    </div>
    <h6>IVR-VOICE 2016</h6>
</section>
</body>
</html>
