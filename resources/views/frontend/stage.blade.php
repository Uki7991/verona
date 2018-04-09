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
<div class="row my-5 justify-content-center" style="width:90%;">
    <div class="col-12 col-md-8 col-xl-auto row justify-content-center">
        <img src="/images/residence1.png" class="img-fluid" alt="">
    </div>
</div>
<div class="row justify-content-center" style="width:90%;">
    @include('layouts.navigator')
</div>
    <div class="container">

        <div class="row justify-content-center d-none d-md-center-block">
            @include('layouts.navigator')
        </div>

        <div class="row justify-content-center">
            <div class="row justify-content-center col-10">




                <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                    <li class="nav-item mx-4">
                        <a class="btn btn-verona text-verona" id="pills-home-tab" data-toggle="pill" href="#pills-2017" role="tab" aria-controls="pills-home" aria-selected="true">2017 год</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="btn btn-verona text-verona active" id="pills-profile-tab" data-toggle="pill" href="#pills-2018" role="tab" aria-controls="pills-profile" aria-selected="false">2018 год</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="btn btn-verona text-verona" id="pills-contact-tab" data-toggle="pill" href="#pills-2019" role="tab" aria-controls="pills-contact" aria-selected="false">2019 год</a>
                    </li>
                </ul>



                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show" id="pills-2017" role="tabpanel" aria-labelledby="pills-home-tab">
                        <ul class="row justify-content-center nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item mx-2">
                                <a class="btn btn-verona text-verona active" id="pills-sep-tab" data-toggle="pill" href="#pills-2017-sep" role="tab" aria-controls="pills-sep" aria-selected="true">Сентябрь</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="btn btn-verona text-verona" id="pills-okt-tab" data-toggle="pill" href="#pills-2017-okt" role="tab" aria-controls="pills-okt" aria-selected="false">Октябрь</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="btn btn-verona text-verona" id="pills-nov-tab" data-toggle="pill" href="#pills-2017-nov" role="tab" aria-controls="pills-nov" aria-selected="false">Ноябрь</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="btn btn-verona text-verona" id="pills-dec-tab" data-toggle="pill" href="#pills-2017-dec" role="tab" aria-controls="pills-dec" aria-selected="false">Декабрь</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-2017-sep" role="tabpanel" aria-labelledby="pills-sep-tab">
                                <div class="row">
                                    <div class="col">
                                        <a href="/images/stages/2017сентябрь/3.jpg" rel="group1" class="grouped_elements"><img src="/images/stages/2017сентябрь/3.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/stages/2017сентябрь/10.jpg" rel="group1" class="grouped_elements"><img src="/images/stages/2017сентябрь/10.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/stages/2017сентябрь/15.jpg" rel="group1" class="grouped_elements"><img src="/images/stages/2017сентябрь/15.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/stages/2017сентябрь/6.jpg" rel="group1" class="grouped_elements"><img src="/images/stages/2017сентябрь/6.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-2017-okt" role="tabpanel" aria-labelledby="pills-okt-tab">
                                <div class="row">
                                    <div class="col">
                                        <a href="/images/stages/2017октябрь/1.jpg" rel="group1" class="grouped_elements"><img src="/images/stages/2017октябрь/1.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/stages/2017октябрь/2.jpg" rel="group1" class="grouped_elements"><img src="/images/stages/2017октябрь/2.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/stages/2017октябрь/3.jpg" rel="group1" class="grouped_elements"><img src="/images/stages/2017октябрь/3.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/stages/2017октябрь/4.jpg" rel="group1" class="grouped_elements"><img src="/images/stages/2017октябрь/4.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-2017-nov" role="tabpanel" aria-labelledby="pills-nov-tab">
                                <div class="row">
                                    <div class="col">
                                        <a href="/images/stages/2017ноябрь/1.jpg" rel="group1" class="grouped_elements"><img src="/images/stages/2017ноябрь/1.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/stages/2017ноябрь/2.jpg" rel="group1" class="grouped_elements"><img src="/images/stages/2017ноябрь/2.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/stages/2017ноябрь/3.jpg" rel="group1" class="grouped_elements"><img src="/images/stages/2017ноябрь/3.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/stages/2017ноябрь/4.jpg" rel="group1" class="grouped_elements"><img src="/images/stages/2017ноябрь/4.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="pills-2017-dec" role="tabpanel" aria-labelledby="pills-dec-tab">
                                <div class="row">
                                    <div class="col">
                                        <a href="/images/stages/2017декабрь/1.jpg" rel="group1" class="grouped_elements"><img src="/images/stages/2017декабрь/1.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/stages/2017декабрь/2.jpg" rel="group1" class="grouped_elements"><img src="/images/stages/2017декабрь/2.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/stages/2017декабрь/3.jpg" rel="group1" class="grouped_elements"><img src="/images/stages/2017декабрь/3.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/stages/2017декабрь/4.jpg" rel="group1" class="grouped_elements"><img src="/images/stages/2017декабрь/4.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="pills-2018" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <ul class="row justify-content-center nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item mx-2">
                                <a class="btn btn-verona text-verona active" id="pills-jan-tab" data-toggle="pill" href="#pills-2018-jan" role="tab" aria-controls="pills-sep" aria-selected="true">Январь</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="btn btn-verona text-verona" id="pills-feb-tab" data-toggle="pill" href="#pills-2018-feb" role="tab" aria-controls="pills-okt" aria-selected="false">Февраль</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="btn btn-verona text-verona" id="pills-mar-tab" data-toggle="pill" href="#pills-2018-mar" role="tab" aria-controls="pills-nov" aria-selected="false">Март </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-2018-jan" role="tabpanel" aria-labelledby="pills-jan-tab">
                                <div class="row">
                                    <div class="col">
                                        <a href="/images/stages/2018январь/1.jpg" rel="group1" class="grouped_elements"><img src="/images/stages/2018январь/1.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/stages/2018январь/1.jpg" rel="group1" class="grouped_elements"><img src="/images/stages/2018январь/1.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/stages/2018январь/1.jpg" rel="group1" class="grouped_elements"><img src="/images/stages/2018январь/1.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/stages/2018январь/1.jpg" rel="group1" class="grouped_elements"><img src="/images/stages/2018январь/1.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-2018-feb" role="tabpanel" aria-labelledby="pills-feb-tab">
                                <div class="row">
                                    <div class="col">
                                        <a href="/images/renders/07_D.jpg" rel="group1" class="grouped_elements"><img src="/images/renders/07_D.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/renders/08_D.png" rel="group1" class="grouped_elements"><img src="/images/renders/08_D.png" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/renders/08_E.png" rel="group1" class="grouped_elements"><img src="/images/renders/08_E.png" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/renders/123.png" rel="group1" class="grouped_elements"><img src="/images/renders/123.png" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-2018-mar" role="tabpanel" aria-labelledby="pills-mar-tab">
                                <div class="row">
                                    <div class="col">
                                        <a href="/images/renders/1.png" rel="group1" class="grouped_elements"><img src="/images/renders/1.png" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/renders/2.png" rel="group1" class="grouped_elements"><img src="/images/renders/2.png" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/renders/08_E.png" rel="group1" class="grouped_elements"><img src="/images/renders/08_E.png" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/renders/123.png" rel="group1" class="grouped_elements"><img src="/images/renders/123.png" class="img-fluid" alt=""></a>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="pills-2019" role="tabpanel" aria-labelledby="pills-contact-tab"><ul class="row justify-content-center nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item mx-2">
                                <a class="btn btn-verona text-verona active" id="pills-sep-tab" data-toggle="pill" href="#pills-2019-sep" role="tab" aria-controls="pills-sep" aria-selected="true">Сентябрь</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="btn btn-verona text-verona" id="pills-okt-tab" data-toggle="pill" href="#pills-2019-okt" role="tab" aria-controls="pills-okt" aria-selected="false">Октябрь</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="btn btn-verona text-verona" id="pills-nov-tab" data-toggle="pill" href="#pills-2019-nov" role="tab" aria-controls="pills-nov" aria-selected="false">Ноябрь</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-2019-sep" role="tabpanel" aria-labelledby="pills-sep-tab">
                                <div class="row">
                                    <div class="col">
                                        <a href="/images/renders/3.png" rel="group1" class="grouped_elements"><img src="/images/renders/07_D.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/renders/07_E.jpg" rel="group1" class="grouped_elements"><img src="/images/renders/08_D.png" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/renders/07_D.jpg" rel="group1" class="grouped_elements"><img src="/images/renders/08_E.png" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/renders/123.png" rel="group1" class="grouped_elements"><img src="/images/renders/123.png" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-2019-okt" role="tabpanel" aria-labelledby="pills-okt-tab">
                                <div class="row">
                                    <div class="col">
                                        <a href="/images/renders/07_D.jpg" rel="group1" class="grouped_elements"><img src="/images/renders/07_D.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/renders/08_D.png" rel="group1" class="grouped_elements"><img src="/images/renders/08_D.png" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/renders/08_E.png" rel="group1" class="grouped_elements"><img src="/images/renders/08_E.png" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/renders/123.png" rel="group1" class="grouped_elements"><img src="/images/renders/123.png" class="img-fluid" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-2019-nov" role="tabpanel" aria-labelledby="pills-nov-tab">
                                <div class="row">
                                    <div class="col">
                                        <a href="/images/renders/07_D.jpg" rel="group1" class="grouped_elements"><img src="/images/renders/07_D.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/renders/08_D.png" rel="group1" class="grouped_elements"><img src="/images/renders/08_D.png" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/renders/08_E.png" rel="group1" class="grouped_elements"><img src="/images/renders/08_E.png" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="col">
                                        <a href="/images/renders/123.png" rel="group1" class="grouped_elements"><img src="/images/renders/123.png" class="img-fluid" alt=""></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>


        <div class="line text-center m-5"><img src="/images/2.png" alt=""></div>

        <div class="row justify-content-center d-none d-md-center-block">
            @include('layouts.navigator')
        </div>
    </div>
<div class="row justify-content-center" style="width:100%;">
    @include('layouts.navigator')
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
