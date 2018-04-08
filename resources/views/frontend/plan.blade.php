<!DOCTYPE html>
<html lang="en">
<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <title>Verona Residence</title>

    <link rel="stylesheet" href="{{ asset('css/fancybox/fancybox/jquery.fancybox-1.3.4.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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


    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-12 col-md-8 col-xl-auto row justify-content-center">
                <img src="/images/residence1.png" class="img-fluid" alt="">
            </div>
        </div>

        <div class="row justify-content-center">
                @include('layouts.navigator')
        </div>

        <div class="row">
            <h2 style="font-family: forum; text-transform: uppercase;" class=" text-center text-verona col-12"><hr>Коммерческие помещения в ЖК «Verona Residence» (1-2 этажи)<hr></h2>
        </div>

        <div class="row col-12 justify-content-center mb-5">
            <div class="col-6"><img src="/images/boutiques/boutique3.jpg" class="w-100" style="border:5px double #66676A;" alt="">
                <hr>
                <div class="text-center">
                    <p style="font-size:26px; font-family: engraves">Торговые площадки</p>
                </div>
                <hr>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <hr></div>
            <div class="col-6"><img src="/images/boutiques/boutique1.jpg" class="w-100" style="border:5px double #66676A;" alt="">
                <hr>
                <div class="text-center">
                    <p style="font-size:26px; font-family: engraves">Торговые площадки</p>
                </div>
                <hr>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <hr></div>
        </div>
        <div class="row col-12 justify-content-center mb-5">
            <div class="col-6"><img src="/images/boutiques/boutique2.jpg" class="w-100" style="border:5px double #66676A;"" alt="">
            </div>
            <div class="col-6">
                <hr>
                <div class="text-center">
                    <p style="font-size:26px; font-family: engraves">Торговые площадки</p>
                </div>
                <hr>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <hr>
            </div>
        </div>

        <div class="row col-12 justify-content-center mb-5">
            <div class="col-6">
                <hr>
                <div class="text-center">
                    <p style="font-size:26px; font-family: engraves">Торговые площадки</p>
                </div>
                <hr>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <hr>
            </div>
            <div class="col-6"><img src="/images/boutiques/boutique4.jpg" class="w-100" style="border:5px double #66676A;"" alt="">
            </div>

        </div>


        <div class="row">
            <h2 style="font-family: forum; text-transform: uppercase;" class=" text-center text-verona col-12"><hr>План типовых этажей в ЖК «Verona Residence» (3-12 этажи)<hr></h2>
        </div>

        <div class="row col-12 justify-content-center mb-5">
            <div class="col-4 mr-5">
                <hr>
                <div class="text-center">
                    <p style="font-size:26px; font-family: engraves">Квартиры</p>
                </div>
                <hr>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <hr>
            </div>
            <div class="col-6">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <img src="/images/renders/Этажи.png" class="w-100" style="padding:12px; border:5px double #66676A;" usemap="#image-map">

                <a href="/images/renders/этаж1.png" rel="group1" class="grouped_elements" style="content: ''; position: absolute; top: 50%; left: 13%; width: 135px; height: 130px;"></a>
                <a href="/images/renders/этаж2.png" rel="group1" class="grouped_elements" style="content: ''; position: absolute; top: 72%; left: 12%; width: 165px; height: 110px;"></a>
                <a href="/images/renders/этаж3.png" rel="group1" class="grouped_elements" style="content: ''; position: absolute; top: 70%; left: 43%; width: 220px; height: 110px;"></a>
                <a href="/images/renders/этаж4.png" rel="group1" class="grouped_elements" style="content: ''; position: absolute; top: 47%; left: 43%; width: 220px; height: 130px;"></a>
                <a href="/images/renders/этаж5.png" rel="group1" class="grouped_elements" style="content: ''; position: absolute; top: 34%; left: 57%; width: 150px; height: 85px;"></a>
                <a href="/images/renders/этаж7.png" rel="group1" class="grouped_elements" style="content: ''; position: absolute; top: 6%; left: 38%; width: 85px; height: 160px;"></a>
                <a href="/images/renders/этаж6.png" rel="group1" class="grouped_elements" style="content: ''; position: absolute; top: 5%; left: 54%; width: 170px; height: 170px;"></a>

            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <img src="/images/renders/Этажи.png" class="img-fluid" alt="none">
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <img src="/images/renders/Этажи.png" class="img-fluid" alt="none">
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <img src="/images/renders/Этажи.png" class="img-fluid" alt="none">
            </div>
        </div>
            </div>
        </div>



        <div class="row">
            <h2 style="font-family: forum; text-transform: uppercase;" class=" text-center text-verona col-12"><hr>План пентхауса в ЖК «Verona Residence» (13 этаж)<hr></h2>
        </div>
        <div class="row col-12 justify-content-center mb-5">
        <div class="col-4 mr-5">
            <hr>
            <div class="text-center">
                <p style="font-size:26px; font-family: engraves">Пентхаус</p>
            </div>
            <hr>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <hr>
        </div>
        <div class="col-6">

        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <!-- <img src="renders/09_D.png" class="img-fluid" alt="none"> -->
                <img src="/images/renders/Пентхаус.PNG" class="w-100" style="padding:12px; border:5px double #66676A;" usemap="#image-map">

                <a href="/images/renders/планировки-1.png" rel="group2" class="grouped_elements" style="content: ''; position: absolute; top: 53%; left: 11%; width: 210px; height: 290px;"></a>
                <a href="/images/renders/планировки-2.png" rel="group2" class="grouped_elements" style="content: ''; position: absolute; top: 50%; left: 48%; width: 230px; height: 320px;"></a>
                <a href="/images/renders/планировки-3.png" rel="group2" class="grouped_elements" style="content: ''; position: absolute; top: 5%; left: 38%; width: 290px; height: 320px;"></a>

            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <img src="/images/renders/Пентхаус.PNG" class="img-fluid" alt="none">
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <img src="/images/renders/Пентхаус.PNG" class="img-fluid" alt="none">
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <img src="/images/renders/Пентхаус.PNG" class="img-fluid" alt="none">
            </div>
        </div>
        </div>
        </div>


        <!--<div class="row">-->
        <!--<div class="col-12">-->
        <!--<p class="mt-5" style="font-family: forum; text-transform: uppercase;">В жилом комплексе предусмотрены:</p>-->
        <!--<ul style="font-family: forum; text-transform: uppercase;">-->
        <!--<li>1 комн.кв - от 53,73 м2 до 57.94 м2</li>-->
        <!--<li>2 комн.кв - от 81,47 м2 до 130,75 м2</li>-->
        <!--<li>3 комн.кв - от 137,2 м2 до 145,71 м2</li>-->
        <!--<li>4 комн.кв - от 142,17 м2 до 149,51 м2</li>-->
        <!--<li>Пентхаусы - от 235,19 м2 до 300 м2</li>-->
        <!--<li>Коммерческие помещения (1 и 2 этажи) - от 200 м2</li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--</div>-->
        <div class="line text-center m-5"><img src="/images/2.png" alt=""></div>

        <div class="row justify-content-center">
            @include('layouts.navigator')
        </div>
    </div>
        <footer class="bg-footer text-muted">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-md-auto" style="left:-10%; width:350px;">
                        <a href="/">
                            <img src="/images/icons/logo.png" class="" alt="" style="width:80%;">
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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    {{--<script type="text/javascript" src="{{ asset('/css/owlcarousel/dist/owl.carousel.min.js') }}"></script>--}}
    <script type="text/javascript" src="{{asset('/css/fancybox/fancybox/jquery.fancybox-1.3.4.pack.js')}}"></script>
    <script>$("a.grouped_elements").fancybox();</script>
    </body>
    </html>

