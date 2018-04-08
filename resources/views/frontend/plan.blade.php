@extends('layouts.app')

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

        <div class="tab-content col text-right  " id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <!-- &lt;!&ndash; <img src="renders/09_D.png" class="img-fluid" alt="none"> &ndash;&gt; -->
                <img src="/images/renders/Этажи.png" class="w-50" style="padding:12px; border:5px double #66676A;" usemap="#image-map">

                <a href="/images/renders/этаж1.png" rel="group2" class="grouped_elements" style="content: ''; position: absolute; top: 50%; left: 53%; width: 180px; height: 170px;"></a>
                <a href="/images/renders/этаж2.png" rel="group2" class="grouped_elements" style="content: ''; position: absolute; top: 74%; left: 53%; width: 190px; height: 130px;"></a>
                <a href="/images/renders/этаж3.png" rel="group2" class="grouped_elements" style="content: ''; position: absolute; top: 72%; left: 71%; width: 320px; height: 130px;"></a>
                <a href="/images/renders/этаж4.png" rel="group2" class="grouped_elements" style="content: ''; position: absolute; top: 50%; left:69%; width: 280px; height: 130px;"></a>
                <a href="/images/renders/этаж5.png" rel="group2" class="grouped_elements" style="content: ''; position: absolute; top: 34%; left:79%; width: 150px; height: 95px;"></a>
                <a href="/images/renders/этаж7.png" rel="group2" class="grouped_elements" style="content: ''; position: absolute; top: 6%; left:68%; width: 100px; height: 180px;"></a>
                <a href="/images/renders/этаж6.png" rel="group2" class="grouped_elements" style="content: ''; position: absolute; top: 5%; left:76%; width: 180px; height: 180px;"></a>

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

        <div class="row">
            <h2 style="font-family: forum; text-transform: uppercase;" class=" text-center text-verona col-12"><hr>План пентхауса в ЖК «Verona Residence» (13 этаж)<hr></h2>
        </div>


        <div class="tab-content col text-right  " id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <!-- <img src="renders/09_D.png" class="img-fluid" alt="none"> -->
                <img src="/images/renders/Пентхаус.PNG" class="w-50" style="padding:12px; border:5px double #66676A;" usemap="#image-map">

                <a href="/images/renders/планировки-1.png" rel="group1" class="grouped_elements" style="content: ''; position: absolute; top: 50%; left: 51%; width: 221px; height: 350px;"></a>
                <a href="/images/renders/планировки-2.png" rel="group1" class="grouped_elements" style="content: ''; position: absolute; top: 45%; left: 75%; width: 260px; height: 380px;"></a>
                <a href="/images/renders/планировки-3.png" rel="group1" class="grouped_elements" style="content: ''; position: absolute; top: 2%; left: 68%; width: 320px; height: 350px;"></a>

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
    @endsection