@extends('layouts.app')

@section('styles')

    <link rel="stylesheet" href="{{ asset('css/fancybox/fancybox/jquery.fancybox-1.3.4.css') }}" type="text/css" media="screen" />

@endsection

@section('content')

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
            <h2 style="font-family: forum; text-transform: uppercase;" class=" text-center text-verona col-12">
                <hr>Коммерческие помещения в ЖК «Verona Residence» (1-2 этажи)<hr>
            </h2>
        </div>

        <div class="row mb-5">
            <div class="col-6">
                <img src="/images/boutiques/boutique3.jpg" class="img-fluid" style="border:5px double #66676A;" alt="">
                <hr>
                <div class="text-center">
                    <p style="font-size:26px; font-family: engraves">Торговые площадки</p>
                </div>
                <hr>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <hr>
            </div>
            <div class="col-6">
                <img src="/images/boutiques/boutique1.jpg" class="img-fluid" style="border:5px double #66676A;" alt="">
                <hr>
                <div class="text-center">
                    <p style="font-size:26px; font-family: engraves">Торговые площадки</p>
                </div>
                <hr>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <hr>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-6">
                <img src="/images/boutiques/boutique2.jpg" class="img-fluid" style="border:5px double #66676A;" alt="">
                <hr>
                <div class="text-center">
                    <p style="font-size:26px; font-family: engraves">Торговые площадки</p>
                </div>
                <hr>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <hr>
            </div>
            <div class="col-6">
                <img src="/images/boutiques/boutique4.jpg" class="img-fluid" style="border:5px double #66676A;" alt="">
                <hr>
                <div class="text-center">
                    <p style="font-size:26px; font-family: engraves">Торговые площадки</p>
                </div>
                <hr>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <hr>
            </div>
        </div>

        <div class="row">
            <h2 style="font-family: forum; text-transform: uppercase;" class=" text-center text-verona col-12">
                <hr>
                План типовых этажей в ЖК «Verona Residence» (3-12 этажи)
                <hr>
            </h2>
        </div>

        <div class="row mb-5">
            <div class="col-4 mr-5 d-none d-md-block">
                <hr>
                <div class="text-center">
                    <p style="font-size:26px; font-family: engraves">Квартиры</p>
                </div>
                <hr>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <hr>
            </div>
            <div class="col-md-6 col-12">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <img src="/images/Renders/Этажи.png" class="w-100" style="padding:12px; border:5px double #66676A;" usemap="#image-map">

                        <a href="/images/Renders/этаж1.png" rel="group1" class="grouped_elements" style="content: ''; position: absolute; top: 54%; left: 13%; width: 135px; height: 145px;"></a>
                        <a href="/images/Renders/этаж2.png" rel="group1" class="grouped_elements" style="content: ''; position: absolute; top: 74%; left: 12%; width: 165px; height: 160px;"></a>
                        <a href="/images/Renders/этаж3.png" rel="group1" class="grouped_elements" style="content: ''; position: absolute; top: 73%; left: 43%; width: 240px; height: 160px;"></a>
                        <a href="/images/Renders/этаж4.png" rel="group1" class="grouped_elements" style="content: ''; position: absolute; top: 49%; left: 43%; width: 230px; height: 170px;"></a>
                        <a href="/images/Renders/этаж5.png" rel="group1" class="grouped_elements" style="content: ''; position: absolute; top: 36%; left: 57%; width: 150px; height: 100px;"></a>
                        <a href="/images/Renders/этаж7.png" rel="group1" class="grouped_elements" style="content: ''; position: absolute; top: 6%; left: 36%; width:105px; height: 210px;"></a>
                        <a href="/images/Renders/этаж6.png" rel="group1" class="grouped_elements" style="content: ''; position: absolute; top: 5%; left: 56%; width: 170px; height: 210px;"></a>

                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <img src="/images/Renders/Этажи.png" class="img-fluid" alt="none">
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <img src="/images/Renders/Этажи.png" class="img-fluid" alt="none">
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <img src="/images/Renders/Этажи.png" class="img-fluid" alt="none">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <h2 style="font-family: forum; text-transform: uppercase;" class=" text-center text-verona col-12">
                <hr>
                План пентхауса в ЖК «Verona Residence» (13 этаж)
                <hr>
            </h2>
        </div>

        <div class="row mb-5">
            <div class="col-4 mr-5 d-none d-md-block">
                <hr>
                <div class="text-center">
                    <p style="font-size:26px; font-family: engraves">Пентхаус</p>
                </div>
                <hr>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                <hr>
            </div>
            <div class="col-md-6 col-12">

                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <!-- <img src="Renders/09_D.png" class="img-fluid" alt="none"> -->
                        <img src="/images/Renders/Пентхаус.PNG" class="w-100" style="padding:12px; border:5px double #66676A;" usemap="#image-map">

                        <a href="/images/Renders/планировки-1.png" rel="group2" class="grouped_elements" style="content: ''; position: absolute; top: 53%; left: 11%; width: 210px; height: 290px;"></a>
                        <a href="/images/Renders/планировки-2.png" rel="group2" class="grouped_elements" style="content: ''; position: absolute; top: 50%; right: 0%; width: 230px; height: 320px;"></a>
                        <a href="/images/Renders/планировки-3.png" rel="group2" class="grouped_elements" style="content: ''; position: absolute; top: -5%; right: 0%; width: 290px; height: 320px;"></a>

                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <img src="/images/Renders/Пентхаус.PNG" class="img-fluid" alt="none">
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <img src="/images/Renders/Пентхаус.PNG" class="img-fluid" alt="none">
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <img src="/images/Renders/Пентхаус.PNG" class="img-fluid" alt="none">
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
        <div class="line text-center mb-5 mt-5"><img style="width:30%;" src="/images/2.png" alt=""></div>

        <div class="row justify-content-center">
            @include('layouts.navigator')
        </div>
    </div>

@endsection

@section('javascripts')

    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('/css/fancybox/fancybox/jquery.fancybox-1.3.4.pack.js')}}"></script>
    <script>$("a.grouped_elements").fancybox();</script>

@endsection

