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

        @include('partials.edit_forms')


            <div class="line text-center mb-5 mt-5"><img style="width:30%;" src="/images/2.png" alt=""></div>


        @include('partials.create_forms')
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
