@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row my-5 justify-content-center">
            <div class="col-12 col-md-8 col-xl-auto row justify-content-center">
                <img src="../../Nurs/residence1.png" class="img-fluid" alt="">
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- <div class="col-10">
                <hr class="m-0 hr-new">
            </div>
            <div class="col-12"></div> -->
            <!--<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">-->
            <!--<li class="nav-item">-->
            <!--<a class="btn text-verona active" href="text-about.html">Описание</a>-->
            <!--</li>-->
            <!--<li class="nav-item">-->
            <!--<a class="btn text-verona" href="text-high-lights.html">Особенности</a>-->
            <!--</li>-->
            <!--<li class="nav-item">-->
            <!--<a class="btn text-verona" href="text-plus.html">Преимущества</a>-->
            <!--</li>-->
            <!--<li class="nav-item">-->
            <!--<a class="btn text-verona" href="text-plans.html">Планировки</a>-->
            <!--</li>-->
            <!--<li class="nav-item">-->
            <!--<a class="btn text-verona" id="pills-contact-tab" data-toggle="pill" href="#pills-etap" role="tab" aria-controls="pills-contact" aria-selected="false">Этапы строительства</a>-->
            <!--</li>-->


            <!--</ul>-->
            <nav class="top-menu mb-5">
                <ul class="menu-main">
                    <li><a href="text-about.html">Описание</a></li>
                    <li><a href="../../Nurs/text-gallery.html">Галерея</a></li>
                    <li><a href="../../Nurs/text-high-lights.html">Особенности</a></li>
                    <li><a href="../../Nurs/text-plus.html">Преимущества</a></li>
                    <li><a href="../../Nurs/text-plans.html">Планировки</a></li>
                    <li><a href="../../Nurs/bezraznici.html">Этапы строительства</a></li>
                </ul>
            </nav>
        </div>

        <div class="row mb-5 justify-content-center"   >
            <div class="owl-carousel owl-theme w-75" style=" padding:12px; background-image:url(../../Nurs/Фон.png); background-size: 100px 100px;" >
                <div class="item">
                    <img src="../../Nurs/renders/01_Day.jpg" alt="">
                </div>
                <div class="item">
                    <img src="../../Nurs/renders/01_Evening.jpg" alt="">
                </div>
                <div class="item">
                    <img src="../../Nurs/renders/02_Day.jpg" alt="">
                </div>
                <div class="item">
                    <img src="../../Nurs/renders/02_Evening.jpg" alt="">
                </div>
                <div class="item">
                    <img src="../../Nurs/renders/03_Day.jpg" alt="">
                </div>
                <div class="item">
                    <img src="../../Nurs/renders/03_Evening.jpg" alt="">
                </div>
                <div class="item">
                    <img src="../../Nurs/renders/06_Day.jpg" alt="">
                </div>
                <div class="item">
                    <img src="../../Nurs/renders/06_Evening.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="row my-3 justify-content-center">

            <div class="col-12 mb-5">

                <div class="row my-3 justify-content-center">
                    <div class="col-12 col-md-10">
                        <h1 class="text-center mb-5" style="font-family: Forum; font-weight: bold;">Описание</h1>
                        <div class="mb-5" ><p style="font-family: Forum; font-size: 32px; text-transform: uppercase;">Отличное расположение<hr></p></div>
                        <div style="margin-bottom:20px;"><img src="../../Nurs/icons/marker.png" style="margin-left:30px; margin-right:10px;" alt=""><span class="indent" style="font-family: forum; text-transform: uppercase;">Удобное расположение комплекса позволит вам без труда добраться до работы и обратно домой </span></div>
                        <div style="margin-bottom:20px;"><img src="../../Nurs/icons/marker.png" style="margin-left:30px;  margin-right:10px;" alt=""><span class="indent" style="font-family: forum; text-transform: uppercase;">Хороший район с безупреной инфраструктурой  </span></div>
                        <div style="margin-bottom:20px;"><img src="../../Nurs/icons/marker.png" style="margin-left:30px; margin-right:10px;" alt=""><span class="indent" style="font-family: forum; text-transform: uppercase;">Близкое расположение школ, гимназий и лицеи </span></div>
                        <div style="margin-bottom:20px;"><img src="../../Nurs/icons/marker.png" style="margin-left:30px;  margin-right:10px;" alt=""><span class="indent" style="font-family: forum; text-transform: uppercase;">Рядом расположен большой оптомаркет Бишкек, множества кафе и Ресторан Золотой дракон </span></div>
                        <div style="margin-bottom:20px;"><img src="../../Nurs/icons/marker.png" style="margin-left:30px;  margin-right:10px;" alt=""><span class="indent" style="font-family: forum; text-transform: uppercase;">Удобная транпортная развязка обеспечивает бесприпятственный доступ ко всем частям города Бишкек </span></div>

                    </div>
                </div>

                <div class="row my-3 mt-5 justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="mb-5" ><p style="font-family: Forum; font-size: 32px; text-transform: uppercase;">Богатая территория<hr></p></div>
                        <div style="margin-bottom:20px;"><img src="../../Nurs/icons/ground.png" style="margin-left:30px; margin-right:10px;" alt=""><span class="indent" style="font-family: forum; text-transform: uppercase;">Детская игровая площадка </span></div>
                        <div style="margin-bottom:20px;"><img src="../../Nurs/icons/ground.png" style="margin-left:30px;  margin-right:10px;" alt=""><span class="indent" style="font-family: forum; text-transform: uppercase;">Беседка для тихих совместных вечеров и пикника  </span></div>
                        <div style="margin-bottom:20px;"><img src="../../Nurs/icons/ground.png" style="margin-left:30px; margin-right:10px;" alt=""><span class="indent" style="font-family: forum; text-transform: uppercase;">Собственный фонтан с ночной подсветкой </span></div>
                        <div style="margin-bottom:20px;"><img src="../../Nurs/icons/ground.png" style="margin-left:30px;  margin-right:10px;" alt=""><span class="indent" style="font-family: forum; text-transform: uppercase;">Футбольная и баскетбольная площадка </span></div>

                    </div>
                </div>



                <div class="row my-5 justify-content-center">
                    <div class="owl-carousel owl-theme w-75" style=" padding:12px; background-image:url(../../Nurs/Фон.png); background-size: 100px 100px;">
                        <div class="item">
                            <img src="../../Nurs/renders/08_D.png" alt="">
                        </div>
                        <div class="item">
                            <img src="../../Nurs/renders/08_E.png" alt="">
                        </div>
                        <div class="item">
                            <img src="../../Nurs/renders/09_D_2.png" alt="">
                        </div>
                        <div class="item">
                            <img src="../../Nurs/renders/09_E_2.png" alt="">
                        </div>
                        <div class="item">
                            <img src="../../Nurs/renders/12_D.png" alt="">
                        </div>
                        <div class="item">
                            <img src="../../Nurs/renders/12_E.png" alt="">
                        </div>
                        <div class="item">
                            <img src="../../Nurs/renders/15_D_preview.png" alt="">
                        </div>
                        <div class="item">
                            <img src="../../Nurs/renders/15_E_preview.png" alt="">
                        </div>
                        <div class="item">
                            <img src="../../Nurs/renders/deti.png" alt="">
                        </div>
                        <div class="item">
                            <img src="../../Nurs/renders/17_E_preview.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row my-3 justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="" ><p style="font-family: Forum; font-size: 32px; text-transform: uppercase;">Современный комплекс<hr></p></div>
                        <div style="margin-bottom:20px;"><img src="../../Nurs/icons/thumbs-up.png" style="margin-left:30px; margin-right:10px;" alt=""><span class="indent" style="font-family: forum; text-transform: uppercase;">КОМПЛЕКС ОСНАЩЕН ВСЕМИ СИСТЕМАМИ ИНЖЕНЕРНЫХ КОММУНИКАЦИЙ (ЦЕНТРАЛЬНЫМ ОТОПЛЕНИЕМ, ВОДОСНАБЖЕНИЕМ, КАНАЛИЗАЦИЕЙ, ЭЛЕКТРОЭНЕРГИЕЙ) </span></div>
                        <div style="margin-bottom:20px;"><img src="../../Nurs/icons/thumbs-up.png" style="margin-left:30px;  margin-right:10px;" alt=""><span class="indent" style="font-family: forum; text-transform: uppercase; position:absolute;">Подземная автопаркинг и надземная гостевая автостоянка  </span></div>
                        <div style="margin-bottom:20px;"><img src="../../Nurs/icons/thumbs-up.png" style="margin-left:30px; margin-right:10px;" alt=""><span class="indent" style="font-family: forum; text-transform: uppercase;">Бесшумные лифты мирового бренда </span></div>
                        <div style="margin-bottom:20px;"><img src="../../Nurs/icons/thumbs-up.png" style="margin-left:30px;  margin-right:10px;" alt=""><span class="indent" style="font-family: forum; text-transform: uppercase;">Высокоскоростной интернет, кабельное телевидение и цифровая телефонная линия </span></div>
                        <div style="margin-bottom:20px;"><img src="../../Nurs/icons/thumbs-up.png" style="margin-left:30px;  margin-right:10px;" alt=""><span class="indent" style="font-family: forum; text-transform: uppercase;">Отделка Фасада из Натурального камня Травертин – сары таш </span></div>
                        <div style="margin-bottom:20px;"><img src="../../Nurs/icons/thumbs-up.png" style="margin-left:30px;  margin-right:10px;" alt=""><span class="indent" style="font-family: forum; text-transform: uppercase;">Круглосуточная охрана и видеонаблюдение </span></div>
                        <div style="margin-bottom:20px;"><img src="../../Nurs/icons/thumbs-up.png" style="margin-left:30px;  margin-right:10px;" alt=""><span class="indent" style="font-family: forum; text-transform: uppercase;">Сейсмостойкость – 9 баллов по шкале рихтера </span></div>

                    </div>
                </div>



                <div class="line text-center m-5"><img src="../../Nurs/2.png" alt=""></div>

                <nav class="top-menu mb-2 mt-5">
                    <ul class="menu-main">
                        <li><a href="text-about.html">Описание</a></li>
                        <li><a href="../../Nurs/text-gallery.html">Галерея</a></li>
                        <li><a href="../../Nurs/text-high-lights.html">Особенности</a></li>
                        <li><a href="../../Nurs/text-plus.html">Преимущества</a></li>
                        <li><a href="../../Nurs/text-plans.html">Планировки</a></li>
                        <li><a href="../../Nurs/bezraznici.html">Этапы строительства</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

@endsection