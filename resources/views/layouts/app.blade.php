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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <title>Verona Residence</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Forum|Lobster&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/web-fonts-with-css/css/fontawesome-all.css') }}">
    @yield('styles')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    </head>
<body>

<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-sand" style="font-family: forum; text-transform: uppercase;">
    <div class="container">
        <a class="navbar-brand" style="height:10%;">
            <img src="/images/Icons/logo.png" style="width:20%;" usemap="#Map" alt="">
        </a>
        <map name="Map" id="Map">
            <area alt="" title="" href="/" shape="poly" coords="2,0,172,0,172,248,86,209,3,249" />
        </map>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mt-5 mt-md-0 mx-auto text-center">
                <li class="nav-item">
                    <a class="nav-link txt-menu" href="/">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt-menu">О компании</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle txt-menu" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Объекты</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/description">Verona Residence</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link txt-menu">Акции</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt-menu">Вакансии</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt-menu" href="/contact">Контакты</a>
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


<footer class="bg-footer text-muted d-none d-md-block">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-auto" style="left:-10%; width:350px;">
                <a href="/">
                    <img src="/images/icons/logo.png" alt="" style="width:80%;">
                </a>
            </div>
            <div class="col-12 col-md-auto mt-5 ">
                <p class="h2 mb-2 txt-white"><u>
                        Телефоны:
                    </u>
                </p>

                <address class="contacts">
                    <p class="txt-white">+996 (***) ***-***</p>
                </address>



                <address>
                    <p class="txt-white">+996 (***) ***-***</p>
                </address>

            </div>
            <div class="col-12 col-md-auto px-5 mb-4 mb-md-0 mt-5 ">
                <p class="h2 mb-2 txt-white"><u>E-mail:</u></p>
                <a href="#" target="_blank" class="text-muted txt-white">Verona.Residence@mail.ru</a>
            </div>

            <div class="col-12 col-md-auto mt-5 ">
                <p class="h2 mb-2 txt-white"><u>Соц. сети:</u></p>
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



        <div class="row py-5 justify-content-center small text-muted">
            <a href="http://mount.kg" target="_blank" class="text-muted mount-sign">Made with&nbsp;<span class="text-danger">&hearts;</span> by&nbsp;Mount</a>
        </div>
    </div>
</footer>
<footer class="bg-footer text-muted d-lg-none d-xl-none">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-auto text-center" style="width:350px;">
                <a href="/">
                    <img src="/images/icons/logo.png" alt="" style="width:80%;">
                </a>
            </div>
            <div class="row col-12 col-md-auto mt-5 ">
                <div class="col-5">
                <p class="mb-2 txt-white"><u>
                        Телефоны:
                    </u>
                </p>

                <address class="contacts">
                    <p class="txt-white">+996 (***) ***-***</p>
                </address>



                <address>
                    <p class="txt-white">+996 (***) ***-***</p>
                </address>
            </div>
<div class="col-6">
                <p class="mb-2 txt-white"><u>E-mail:</u></p>
                <a href="#" target="_blank" class="text-muted txt-white">Verona.Residence@mail.ru</a>
            </div>
            </div>
    </div>
            <div class="col-12 col-md-auto mt-5 ">
                <p class="mb-2 txt-white"><u>Соц. сети:</u></p>
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



<div class="row py-5 justify-content-center small text-muted">
    <a href="http://mount.kg" target="_blank" class="text-muted mount-sign" style="font-size: larger;">Made with&nbsp;<span class="text-danger">&hearts;</span> by&nbsp;Mount</a>
</div>
</footer>
<script src="{{ asset('js/app.js') }}"></script>

@yield('javascripts')

</body>
</html>



