@extends('layouts.app')

@section('styles')

    <link rel="stylesheet" href="{{ asset('css/owlcarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owlcarousel/dist/assets/owl.theme.default.min.css') }}">

@endsection

@section('content')
    <div class="container">
        <div class="row my-5 justify-content-center main-verona">
            <div class="col-12 col-md-8 col-xl-auto">
                <img src="/images/residence1.png" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row justify-content-center">
            @include('layouts.navigator')
        </div>

        <div class="row mb-5 justify-content-center">
            <div class="col-10" style=" padding:12px; background-image:url(images/stipes2.png); background-size: 100px 100px;" >
                <div class="item">
                    <img src="/images/Renders/01_Day.jpg" alt="" class="img-fluid">
                    <form action="" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file">
                        <button type="submit" class="btn btn-warning">Редактировать</button>
                    </form>
                    <a href="" class="btn btn-danger">Удалить</a>
                </div>
                <div class="item">
                    <img src="/images/Renders/01_Evening.jpg" alt="" class="img-fluid">
                    <form action="" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file">
                        <button type="submit" class="btn btn-warning">Редактировать</button>
                    </form>
                    <a href="" class="btn btn-danger">Удалить</a>
                </div>
                <div class="item">
                    <img src="/images/Renders/02_Day.jpg" alt="" class="img-fluid">
                    <form action="" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file">
                        <button type="submit" class="btn btn-warning">Редактировать</button>
                    </form>
                    <a href="" class="btn btn-danger">Удалить</a>
                </div>
                <div class="item">
                    <img src="/images/Renders/02_Evening.jpg" alt="" class="img-fluid">
                    <form action="" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file">
                        <button type="submit" class="btn btn-warning">Редактировать</button>
                    </form>
                    <a href="" class="btn btn-danger">Удалить</a>
                </div>
                <div class="item">
                    <img src="/images/Renders/03_Day.jpg" alt="" class="img-fluid">
                    <form action="" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file">
                        <button type="submit" class="btn btn-warning">Редактировать</button>
                    </form>
                    <a href="" class="btn btn-danger">Удалить</a>
                </div>
                <div class="item">
                    <img src="/images/Renders/03_Evening.jpg" alt="" class="img-fluid">
                    <form action="" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file">
                        <button type="submit" class="btn btn-warning">Редактировать</button>
                    </form>
                    <a href="" class="btn btn-danger">Удалить</a>
                </div>
                <div class="item">
                    <img src="/images/Renders/06_Day.jpg" alt="" class="img-fluid">
                    <form action="" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file">
                        <button type="submit" class="btn btn-warning">Редактировать</button>
                    </form>
                    <a href="" class="btn btn-danger">Удалить</a>
                </div>
                <div class="item">
                    <img src="/images/Renders/06_Evening.jpg" alt="" class="img-fluid">
                    <form action="" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file">
                        <button type="submit" class="btn btn-warning">Редактировать</button>
                    </form>
                    <a href="" class="btn btn-danger">Удалить</a>
                </div>
                <form action="" class="mt-5" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label for="">Новая картинка</label>
                    <input type="file">
                    <button type="submit" class="btn btn-success">Еще картинка</button>
                </form>
            </div>
        </div>

        <div class="row col-12 col-md-10 justify-content-center mb-5 mx-md-auto">
            <div class="col-12 mb-3 ml-5" ><p style="font-family: Forum; font-size: 32px; text-transform: uppercase;">
                <form action="">
                    <input type="text" value="Отличное расположение" class="w-50">
                    <button class="btn btn-warning" type="submit">Редактировать</button>
                </form>
                <a href="" class="btn btn-danger">Удалить</a>
                </p><hr></div>
            <form class="col-12 mt-4" action="">
                <div class="col-md-1 col-1" style="margin-bottom:20px;">
                    <img class="ml-md-3" src="/images/Icons/marker.png" style="margin-right:10px;" alt="">
                    <input type="file">
                </div>
                <div class="col-md-11 col-10 mb-3">
                    <textarea name="" id="" cols="30" rows="10">
                        Удобное расположение комплекса позволит вам без труда добраться до работы и обратно домой
                    </textarea>
                </div>
                <button class="btn btn-warning" type="submit">Редактировать</button>
            </form>
            <form class="col-12 mt-4" action="">
                <div class="col-md-1 col-1" style="margin-bottom:20px;">
                    <img class="ml-md-3" src="/images/Icons/marker.png" style="margin-right:10px;" alt="">
                    <input type="file">
                </div>
                <div class="col-md-11 col-10 mb-3">
                    <textarea name="" id="" cols="30" rows="10">
                        Удобное расположение комплекса позволит вам без труда добраться до работы и обратно домой
                    </textarea>
                </div>
                <button class="btn btn-warning" type="submit">Редактировать</button>
            </form>
            <form class="col-12 mt-4" action="">
                <div class="col-md-1 col-1" style="margin-bottom:20px;">
                    <img class="ml-md-3" src="/images/Icons/marker.png" style="margin-right:10px;" alt="">
                    <input type="file">
                </div>
                <div class="col-md-11 col-10 mb-3">
                    <textarea name="" id="" cols="30" rows="10">
                        Удобное расположение комплекса позволит вам без труда добраться до работы и обратно домой
                    </textarea>
                </div>
                <button class="btn btn-warning" type="submit">Редактировать</button>
            </form>
            <form class="col-12 mt-4" action="">
                <div class="col-md-1 col-1" style="margin-bottom:20px;">
                    <img class="ml-md-3" src="/images/Icons/marker.png" style="margin-right:10px;" alt="">
                    <input type="file">
                </div>
                <div class="col-md-11 col-10 mb-3">
                    <textarea name="" id="" cols="30" rows="10">
                        Удобное расположение комплекса позволит вам без труда добраться до работы и обратно домой
                    </textarea>
                </div>
                <button class="btn btn-warning" type="submit">Редактировать</button>
            </form>
            <form class="col-12 mt-4" action="">
                <div class="col-md-1 col-1" style="margin-bottom:20px;">
                    <img class="ml-md-3" src="/images/Icons/marker.png" style="margin-right:10px;" alt="">
                    <input type="file">
                </div>
                <div class="col-md-11 col-10 mb-3">
                    <textarea name="" id="" cols="30" rows="10">
                        Удобное расположение комплекса позволит вам без труда добраться до работы и обратно домой
                    </textarea>
                </div>
                <button class="btn btn-warning" type="submit">Редактировать</button>
            </form>

        </div>

        <div class="row col-12 col-md-10 justify-content-center mb-5 mx-md-auto">
                <div class="col-12 mb-3 ml-5" ><p style="font-family: Forum; font-size: 32px; text-transform: uppercase;">Богатая территория</p><hr></div>
                <div class="col-1" style="margin-bottom:20px;"><img class="ml-md-3" src="/images/Icons/ground.png" style=" margin-right:10px;" alt="">
                </div>
                <div class="col-md-11 col-10 mb-3"><span class="indent" style="font-family: forum; text-transform: uppercase;">Детская игровая площадка  </span>
                </div>
                <div class="col-1" style="margin-bottom:20px;"><img class="ml-md-3" src="/images/Icons/ground.png" style=" margin-right:10px;" alt="">
                </div>
                <div class="col-md-11 col-10 mb-3"><span class="indent" style="font-family: forum; text-transform: uppercase;">Беседка для тихих совместных вечеров и пикника  </span>
                </div>
                <div class="col-1" style="margin-bottom:20px;"><img class="ml-md-3" src="/images/Icons/ground.png" style=" margin-right:10px;" alt="">
                </div>
                <div class="col-md-11 col-10 mb-3"><span class="indent" style="font-family: forum; text-transform: uppercase;">Собственный фонтан с ночной подсветкой </span>
                </div>
                <div class="col-1" style="margin-bottom:20px;"><img class="ml-md-3" src="/images/Icons/ground.png" style=" margin-right:10px;" alt="">
                </div>
                <div class="col-md-11 col-10 mb-3"><span class="indent" style="font-family: forum; text-transform: uppercase;">Футбольная и баскетбольная площадка </span>
                </div>

            </div>



        <div class="row my-5 justify-content-center">
            <div class="owl-carousel owl-theme col-10" style=" padding:12px; background-image:url(images/stipes2.png); background-size: 100px 100px;">
                <div class="item">
                    <img src="/images/Renders/08_D.png" alt="">
                </div>
                <div class="item">
                    <img src="/images/Renders/08_E.png" alt="">
                </div>
                <div class="item">
                    <img src="/images/Renders/09_D_2.png" alt="">
                </div>
                <div class="item">
                    <img src="/images/Renders/09_E_2.png" alt="">
                </div>
                <div class="item">
                    <img src="/images/Renders/12_D.png" alt="">
                </div>
                <div class="item">
                    <img src="/images/Renders/12_E.png" alt="">
                </div>
                <div class="item">
                    <img src="/images/Renders/15_D_preview.png" alt="">
                </div>
                <div class="item">
                    <img src="/images/Renders/15_E_preview.png" alt="">
                </div>
                <div class="item">
                    <img src="/images/Renders/deti.png" alt="">
                </div>
                <div class="item">
                    <img src="/images/Renders/17_E_preview.png" alt="">
                </div>
            </div>
        </div>

        <div class="row col-12 col-md-10 justify-content-center mb-5 mx-md-auto">
                <div class="col-12 mb-3 ml-5" ><p style="font-family: Forum; font-size: 32px; text-transform: uppercase;">Современный комплекс</p><hr></div>
                <div class="col-1" style="margin-bottom:20px;"><img class="ml-md-3" src="/images/Icons/thumbs-up.png" style=" margin-right:10px;" alt="">
                </div>
                <div class="col-md-11 col-10 mb-3"><span class="indent" style="font-family: forum; text-transform: uppercase;">КОМПЛЕКС ОСНАЩЕН ВСЕМИ СИСТЕМАМИ ИНЖЕНЕРНЫХ КОММУНИКАЦИЙ (ЦЕНТРАЛЬНЫМ ОТОПЛЕНИЕМ, ВОДОСНАБЖЕНИЕМ, КАНАЛИЗАЦИЕЙ, ЭЛЕКТРОЭНЕРГИЕЙ) </span>
                </div>
                <div class="col-1" style="margin-bottom:20px;"><img class="ml-md-3" src="/images/Icons/thumbs-up.png" style=" margin-right:10px;" alt="">
                </div>
                <div class="col-md-11 col-10 mb-3"><span class="indent" style="font-family: forum; text-transform: uppercase;">Подземная автопаркинг и надземная гостевая автостоянка  </span>
                </div>
                <div class="col-1" style="margin-bottom:20px;"><img class="ml-md-3" src="/images/Icons/thumbs-up.png" style=" margin-right:10px;" alt="">
                </div>
                <div class="col-md-11 col-10 mb-3"><span class="indent" style="font-family: forum; text-transform: uppercase;">Бесшумные лифты мирового бренда </span>
                </div>
                <div class="col-1" style="margin-bottom:20px;"><img class="ml-md-3" src="/images/Icons/thumbs-up.png" style=" margin-right:10px;" alt="">
                </div>
                <div class="col-md-11 col-10 mb-3"><span class="indent" style="font-family: forum; text-transform: uppercase;">Высокоскоростной интернет, кабельное телевидение и цифровая телефонная линия  </span>
                </div>
                <div class="col-1" style="margin-bottom:20px;"><img class="ml-md-3" src="/images/Icons/thumbs-up.png" style=" margin-right:10px;" alt="">
                </div>
                <div class="col-md-11 col-10 mb-3"><span class="indent" style="font-family: forum; text-transform: uppercase;">Отделка Фасада из Натурального камня Травертин – сары таш </span>
                </div>
                <div class="col-1" style="margin-bottom:20px;"><img class="ml-md-3" src="/images/Icons/thumbs-up.png" style=" margin-right:10px;" alt="">
                </div>
                <div class="col-md-11 col-10 mb-3"><span class="indent" style="font-family: forum; text-transform: uppercase;">Круглосуточная охрана и видеонаблюдение</span>
                </div>
                <div class="col-1" style="margin-bottom:20px;"><img class="ml-md-3" src="/images/Icons/thumbs-up.png" style=" margin-right:10px;" alt="">
                </div>
                <div class="col-md-11 col-10 mb-3"><span class="indent" style="font-family: forum; text-transform: uppercase;">Сейсмостойкость – 9 баллов по шкале рихтера  </span>
                </div>
            </div>



        <div class="line text-center mb-5 mt-5"><img style="width:30%;" src="/images/2.png" alt=""></div>

        <div class="row justify-content-center">
            @include('layouts.navigator')
        </div>
    </div>


@endsection

@section('javascripts')

    <script type="text/javascript" src="{{ asset('/css/owlcarousel/dist/owl.carousel.min.js') }}"></script>
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
                navText: ['<i class="fas fa-2x fa-chevron-left d-none d-md-block"></i>',
                    '<i class="fas fa-2x fa-chevron-right d-none d-md-block"></i>']
            });
        });
    </script>

@endsection