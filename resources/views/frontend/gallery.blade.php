@extends('layouts.app')

@section('styles')

    <link rel="stylesheet" href="{{ asset('css/owlcarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owlcarousel/dist/assets/owl.theme.default.min.css') }}">

@endsection

@section('content')

    <div class="container">
            <div class="row my-5 justify-content-center main-verona">
                <div class="col-12 col-md-8 col-xl-auto row justify-content-center">
                    <img src="/images/residence1.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row justify-content-center">
                @include('layouts.navigator')
            </div>

    <div class="row">
        <h2 style="font-family: forum; text-transform: uppercase;" class=" text-center text-verona col-12"><hr>Передний вид ЖК «Verona Residence»:<hr></h2>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-12" style=" padding:12px; background-image:url(images/stipes2.png); background-size: 100px 100px;">
                <div class="owl-carousel owl-1">
                    <div class="item" data-hash="1"><img src="/images/renders/01_Day.jpg" alt=""></div>
                    <div class="item" data-hash="2"><img src="/images/renders/01_Evening.jpg" alt=""></div>
                    <div class="item" data-hash="3"><img src="/images/renders/02_Day.jpg" alt=""></div>
                    <div class="item" data-hash="4"><img src="/images/renders/02_Evening.jpg" alt=""></div>
                    <div class="item" data-hash="5"><img src="/images/renders/03_Day.jpg" alt=""></div>
                    <div class="item" data-hash="6"><img src="/images/renders/03_Evening.jpg" alt=""></div>
                    <div class="item" data-hash="8"><img src="/images/renders/18_D.jpg" alt=""></div>
                    <div class="item" data-hash="9"><img src="/images/renders/18_E.jpg" alt=""></div>
                    <div class="item" data-hash="10"><img src="/images/renders/06_Day.jpg" alt=""></div>
                    <div class="item" data-hash="11"><img src="/images/renders/06_Evening.jpg" alt=""></div>
                    <div class="item" data-hash="12"><img src="/images/renders/19_D.jpg" alt=""></div>
                    <div class="item" data-hash="13"><img src="/images/renders/19_E.jpg" alt=""></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center mt-3">
                <div class="col-md-11 col-12 owl-carousel owl-2" style=" padding:12px; background-image:url(/images/stipes2.png); background-size: 100px 100px;">
                    <div class="item"><a href="#1"><img src="/images/renders/01_Day.jpg" class="" alt=""></a></div>
                    <div class="item"><a href="#2"><img src="/images/renders/01_Evening.jpg" class="" alt=""></a></div>
                    <div class="item"><a href="#3"><img src="/images/renders/02_Day.jpg" class="" alt=""></a></div>
                    <div class="item"><a href="#4"><img src="/images/renders/02_Evening.jpg" class="" alt=""></a></div>
                    <div class="item"><a href="#5"><img src="/images/renders/03_Day.jpg" class="" alt=""></a></div>
                    <div class="item"><a href="#6"><img src="/images/renders/03_Evening.jpg" class="" alt=""></a></div>
                    <div class="item"><a href="#8"><img src="/images/renders/18_D.jpg" class="" alt=""></a></div>
                    <div class="item"><a href="#9"><img src="/images/renders/18_E.jpg" class="" alt=""></a></div>
                    <div class="item"><a href="#10"><img src="/images/renders/06_Day.jpg" class="" alt=""></a></div>
                    <div class="item"><a href="#11"><img src="/images/renders/06_Evening.jpg" class="" alt=""></a></div>
                    <div class="item"><a href="#12"><img src="/images/renders/19_D.jpg" class="" alt=""></a></div>
                    <div class="item"><a href="#13"><img src="/images/renders/19_E.jpg" class="" alt=""></a></div>

                </div>
            </div>
        </div>


        <div class="line text-center mb-5 mt-5 "><img style="width:30%;" src="/images/2.png" alt=""></div>

    </div>

    <div class="row">
        <h2 style="font-family: forum; text-transform: uppercase;" class=" text-center text-verona col-12"><hr>Задний вид ЖК «Verona Residence»:<hr></h2>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-12" style=" padding:12px; background-image:url(/images/stipes2.png); background-size: 100px 100px;">
                <div class="owl-carousel owl-1">
                    <div class="item" data-hash="14"><img src="/images/renders/08_D.png" alt=""></div>
                    <div class="item" data-hash="15"><img src="/images/renders/08_E.png" alt=""></div>
                    <div class="item" data-hash="16"><img src="/images/renders/09_D_2.png" alt=""></div>
                    <div class="item" data-hash="17"><img src="/images/renders/09_E_2.png" alt=""></div>
                    <div class="item" data-hash="18"><img src="/images/renders/12_D.png" alt=""></div>
                    <div class="item" data-hash="19"><img src="/images/renders/12_E.png" alt=""></div>
                    <div class="item" data-hash="20"><img src="/images/renders/13_D.png" alt=""></div>
                    <div class="item" data-hash="21"><img src="/images/renders/besedka.png" alt=""></div>
                    <div class="item" data-hash="22"><img src="/images/renders/15_D_preview.png" alt=""></div>
                    <div class="item" data-hash="23"><img src="/images/renders/15_E_preview.png" alt=""></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center mt-3">
                <div class="col-md-11 col-12 owl-carousel owl-2" style=" padding:12px; background-image:url(/images/stipes2.png); background-size: 100px 100px;">
                    <div class="item"><a href="#14"><img src="/images/renders/08_D.png" class="" alt=""></a></div>
                    <div class="item"><a href="#15"><img src="/images/renders/08_E.png" class="" alt=""></a></div>
                    <div class="item"><a href="#16"><img src="/images/renders/09_D_2.png" class="" alt=""></a></div>
                    <div class="item"><a href="#17"><img src="/images/renders/09_E_2.png" class="" alt=""></a></div>
                    <div class="item"><a href="#18"><img src="/images/renders/12_D.png" class="" alt=""></a></div>
                    <div class="item"><a href="#19"><img src="/images/renders/12_E.png" class="" alt=""></a></div>
                    <div class="item"><a href="#20"><img src="/images/renders/13_D.png" class="" alt=""></a></div>
                    <div class="item"><a href="#21"><img src="/images/renders/besedka.png" class="" alt=""></a></div>
                    <div class="item"><a href="#22"><img src="/images/renders/15_D_preview.png" class="" alt=""></a></div>
                    <div class="item"><a href="#23"><img src="/images/renders/15_E_preview.png" class="" alt=""></a></div>
                </div>
            </div>
        </div>

        <div class="line text-center mb-5 mt-5"><img style="width:30%;" src="/images/2.png" alt=""></div>
        <div class="row">
            <h2 style="font-family: forum; text-transform: uppercase;" class=" text-center text-verona col-12"><hr>Холл-Ресепшн ЖК «Verona Residence»:<hr></h2>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-11" style=" padding:12px; background-image:url(/images/stipes2.png); background-size: 100px 100px;">
                    <div class="owl-carousel owl-1">
                        <div class="item" data-hash="24"><img src="/images/renders/002_post.jpg" alt=""></div>
                        <div class="item" data-hash="25"><img src="/images/renders/004_post.jpg" alt=""></div>
                        <div class="item" data-hash="26"><img src="/images/renders/005_2_post.jpg" alt=""></div>
                        <div class="item" data-hash="27"><img src="/images/renders/006_3_post.jpg" alt=""></div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-center mt-3">
                    <div class="col-md-11 col-12 owl-carousel owl-2" style=" padding:12px; background-image:url(/images/stipes2.png); background-size: 100px 100px;">
                        <div class="item"><a href="#24"><img src="/images/renders/002_post.jpg" class="" alt=""></a></div>
                        <div class="item"><a href="#25"><img src="/images/renders/004_post.jpg" class="" alt=""></a></div>
                        <div class="item"><a href="#26"><img src="/images/renders/005_2_post.jpg" class="" alt=""></a></div>
                        <div class="item"><a href="#27"><img src="/images/renders/006_3_post.jpg" class="" alt=""></a></div>
                    </div>
                </div>
            </div>


            <div class="line text-center mb-5 mt-5"><img style="width:30%;" src="/images/2.png" alt=""></div>

            <div class="row justify-content-center">
                @include('layouts.navigator')
            </div>
        </div>
    </div>
    </div>
@endsection

@section('javascripts')

    <script type="text/javascript" src="{{ asset('/css/owlcarousel/dist/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $(".owl-1").owlCarousel({
                loop: true,
                items: 1,
                margin: 0,
                dots: false,
                animateOut: 'fadeOut',
                nav: true,
                navText: ['<i class="fas fa-2x fa-chevron-left d-none d-md-block"></i>',
                    '<i class="fas fa-2x fa-chevron-right d-none d-md-block"></i>']

            });

            $('.owl-2').owlCarousel({
                loop: true,
                items: 5,
                margin: 10,
                dots: false,
                animateOut: 'fadeOut',
                nav: true,
                navText: ['<i class="fas fa-2x fa-chevron-left d-none d-md-block"></i>',
                    '<i class="fas fa-2x fa-chevron-right d-none d-md-block"></i>']

            })
        });
    </script>

@endsection
