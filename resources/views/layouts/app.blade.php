
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

<header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-sand" style="font-family: forum; text-transform: uppercase;">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/images/Icons/iman-logo3.png" class="img-fluid logo-verona" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-lg text-light fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav my-3 my-md-0 mx-auto text-center">
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

                @if(Auth::user() && Auth::user()->admin)

                    <div class="dropdown mr-auto">
                        <a class="btn btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/back/description">Описание</a>
                            <a class="dropdown-item" href="/back/gallery">Галерея</a>
                            <a class="dropdown-item" href="/back/benefits">Особенности</a>

                            <div class="dropdown-divider"></div>

                            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout').submit();">Logout</a>
                            <form action="{{ route('logout') }}" id="logout" method="POST" style="display:none;">
                                @csrf
                            </form>
                        </div>
                    </div>

                @endif

                <ul class="nav flex-column text-center">
                    <li class="nav-item">
                        <a class="nav-link p-1 txt-white" href="#">+996 (557) 174 074</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-1 small txt-white" href="#">Verona.Residence@mail.ru</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@yield('content')


<footer class="bg-footer text-muted">
    <div class="container">
        <div class="row justify-content-center justify-content-lg-around text-center">
            <div class="col-12 col-lg-3 mt-5">
                <a href="/">
                    <img src="/images/Icons/iman-logo3.png" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-12 col-md-auto mt-5">
                <p class="h2 mb-2 txt-white">
                    <u>
                        Телефоны:
                    </u>
                </p>
                <address class="contacts">
                    <p class="txt-white">+996 (557) 174 074</p>
                </address>
                <address>
                    <p class="txt-white">+996 (702) 174 074</p>
                </address>
                <address>
                    <p class="txt-white">+996 (559) 300 810</p>
                </address>
                <address>
                    <p class="txt-white">+996 (558) 595 959</p>
                </address>
            </div>

            <div class="col-12 col-md-auto mb-4 mb-md-0 mt-5 ">
                <p class="h2 mb-2 txt-white"><u>E-mail:</u></p>
                <a href="#" class="text-muted txt-white">Verona.Residence@mail.ru</a>
            </div>

            <div class="col-12 col-md-auto mt-5">
                <p class="h2 mb-2 txt-white"><u>Соц. сети:</u></p>
                <div class="small mb-4 mb-md-2  align-items-center">
                    <i class="fab fa-2x fa-instagram text-light"></i>&nbsp;
                    <a href="https://www.instagram.com/iman_group.kg" target="_blank" class="text-muted txt-white">https://www.instagram.com/iman_group.kg</a>
                </div>
                <div class="small mb-4 mb-md-2 align-items-center">
                    <i class="fab fa-2x fa-facebook text-light"></i>&nbsp;
                    <a href="https://www.facebook.com/iman_group.kg" target="_blank" class="text-muted txt-white">https://www.facebook.com/iman_group.kg</a>
                </div>


            </div>
        </div>



        <div class="row py-5 justify-content-center small text-muted">
            <a href="http://mount.kg" target="_blank" class="text-muted mount-sign">Made with&nbsp;<span class="text-danger">&hearts;</span> by&nbsp;Mount</a>
        </div>
    </div>
</footer>

<script src="{{ asset('js/app.js') }}"></script>

@yield('javascripts')

</body>
</html>



