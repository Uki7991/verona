{{--<!DOCTYPE html>--}}
{{--<html lang="{{ app()->getLocale() }}">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    {{--<title>{{ config('app.name', 'Laravel') }}</title>--}}

    {{--<!-- Styles -->--}}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
    {{--<div id="app">--}}
        {{--<nav class="navbar navbar-expand-md navbar-light navbar-laravel">--}}
            {{--<div class="container">--}}
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                    {{--{{ config('app.name', 'Laravel') }}--}}
                {{--</a>--}}
                {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
                    {{--<span class="navbar-toggler-icon"></span>--}}
                {{--</button>--}}

                {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav mr-auto">--}}

                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav ml-auto">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@guest--}}
                            {{--<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>--}}
                            {{--<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>--}}
                        {{--@else--}}
                            {{--<li class="nav-item dropdown">--}}
                                {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--{{ __('Logout') }}--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                        {{--@csrf--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--@endguest--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}

        {{--<main class="py-4">--}}
            {{--@yield('content')--}}
        {{--</main>--}}
    {{--</div>--}}

    {{--<!-- Scripts -->--}}
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
{{--</body>--}}
{{--</html>--}}








        <!DOCTYPE html>
<html lang="en">
<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <title>Verona Residence</title>


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Forum|Lobster&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/owlcarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owlcarousel/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/web-fonts-with-css/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <style>
        .owl-prev i, .owl-next i {
            color: black;
        }
        .owl-prev, .owl-next {
            position: absolute;
            top: 45%;
            margin-top: -10px;
        }
        .owl-prev {
            left: -40px;
        }
        .owl-next {
            right: -40px;
        }
        span, p, h1, h2, h3, h4, h5 {
            color: #66676A!important;
        }
        .btn-verona {
            background-color: #f3ebd587;
            border: 3px solid #b9921cb8;
        }
        .btn-verona:hover {
            background-color: #f3ebd5;
            border: 3px solid #b9921c;
        }
        p.indent {
            text-indent: 3.5em;
        }
    </style>
    <style>
        .navbar-brand {
            position: absolute;
            top: 0px;
            padding: 0px;
            left: 7%;
        }

        .w-65 {
            width: 65%!important;
        }

        .text-verona {
            color: #66676A!important;
        }
        .text-verona.active {
            border-right: 1px solid rgba(0, 0, 0, 0.3);
            border-left: 1px solid rgba(0, 0, 0, 0.3);
            border-radius: 0px;
        }
        .text-verona.active:focus, .btn:focus {
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0)!important;
        }
        .hr-new{
            border-top: 1px solid rgba(0, 0, 0, 0.2);
        }
        .focused.active {
            background-color: #f8f9fa
        }
        hr {
            border: none; /* Убираем границу */
            background-image: url(../../Nurs/stripes.png);
            background-size: 120px 120px; /* Цвет линии */
            height: 6px; /* Толщина линии */
        }


    </style>
</head>
<body>

<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-sand" style="font-family: forum; text-transform: uppercase;">
    <div class="container">
        <a class="navbar-brand" style="top:0%; left:7%;">
            <img src="../../Nurs/icons/logo.png" class="w-50" usemap="#Map" alt="">
        </a>
        <map name="Map" id="Map">
            <area alt="" title="" href="../../Nurs/verona.html" shape="poly" coords="2,0,172,0,172,248,86,209,3,249" />
        </map>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mt-5 mt-md-0 mx-auto text-center">
                <li class="nav-item">
                    <a class="nav-link txt-menu" href="../../Nurs/verona.html">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt-menu">О компании</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle txt-menu" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Объекты</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../../Nurs/verona.html">Verona Residence</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link txt-menu">Акции</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt-menu">Вакансии</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt-menu" href="../../Nurs/contacts.html">Контакты</a>
                </li>
            </ul>

            <ul class="nav flex-column text-center">
                <li class="nav-item">
                    <a class="nav-link p-1 txt-white" href="#">+996 (777) 231 - 123</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-1 small txt-white" href="#">Verona.Residence@mail.ru</a>
                </li>
            </ul>
        </div>
    </div>
</nav>




@yield('content')


<footer class="bg-footer text-muted">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-auto" style="left:-10%;">
                <img src="../../Nurs/icons/logo2.png" class="" usemap="#Map" alt="" style="width:120%;">
                <map name="Map" id="Map">
                    <area alt="" title="" href="/" shape="poly" coords="2,0,172,0,172,248,86,209,3,249" />
                </map>
            </div>
            <div class="col-12 col-md-auto mt-5 ">
                <p class="h2 mb-2 txt-white"><u>
                        Телефоны:
                    </u>
                </p>

                <address class="contacts">
                    <p class="txt-white">+996 700 700 700</p>
                </address>



                <address>
                    <p class="txt-white">+996 700 700 700</p>
                </address>

            </div>
            <div class="col-12 col-md-auto px-5 mb-4 mb-md-0 mt-5 ">
                <p class="h2 mb-2 txt-white"><u>E-mail:</u></p>
                <a href="#" target="_blank" class="text-muted txt-white">Verona.Residence@mail.ru</a>
            </div>

            <div class="col-12 col-md-auto mt-5 ">
                <p class="h2 mb-2 txt-white"><u>Соц. сетях:</u></p>
                <div class="small mb-4 mb-md-2  align-items-center">
                    <i class="fab fa-2x fa-instagram text-light"></i>&nbsp;
                    <a href="https://www.instagram.com/bayservice" target="_blank" class="text-muted txt-white">https://www.instagram.com/bayservice</a>
                </div>
                <div class="small mb-4 mb-md-2 align-items-center">
                    <i class="fab fa-2x fa-facebook text-light"></i>&nbsp;
                    <a href="https://www.facebook.com/bayservice" target="_blank" class="text-muted txt-white">https://www.facebook.com/bayservice</a>
                </div>


            </div>
        </div>



        <div class="row justify-content-center">
            <p class="small text-muted py-3">Made with &hearts; by <a href="">Mount</a></p>
        </div>
    </div>
</footer>


<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('css/owlcarousel/dist/owl.carousel.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop: true,
            items: 1,
            margin: 0,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            dots: false,
            animateOut: 'fadeOut',
            nav: true,
            navText: ['<i class="fas fa-2x fa-chevron-left"></i>',
                '<i class="fas fa-2x fa-chevron-right"></i>']
        });
    });
</script>
</body>
</html>



