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

        @isset($items)

            @foreach($items as $item)

                @if($item instanceof App\Slider)

                    <div class="row mb-5 justify-content-center">
                        <div class="owl-carousel owl-theme col-10" style=" padding:12px; background-image:url(images/stipes2.png); background-size: 100px 100px;" >
                            @foreach($item->images as $image)
                            <div class="item">
                                <img src="/uploads/slides/large/{{ $image->image }}" alt="">
                            </div>
                            @endforeach
                        </div>
                    </div>

                @endif

                @if($item instanceof App\Benefit)

                    <div class="row col-12 col-md-10 justify-content-center mb-5 mx-md-auto">
                        <div class="col-12 mb-3 ml-5" ><p style="font-family: Forum; font-size: 32px; text-transform: uppercase;">Отличное расположение</p><hr></div>
                        @foreach($item->texts as $text)
                        <div class="col-md-1 col-1" style=" margin-bottom:20px;"><img class="ml-md-3 img-fluid" width="20" height="20" src="/uploads/icons/{{ $text->icon }}" alt="">
                        </div>
                        <div class="col-md-11 col-10 mb-3"><span class="indent" style="font-family: forum; text-transform: uppercase;">{{ $text->text }}</span>
                        </div>
                        @endforeach
                    </div>

                @endif

            @endforeach

        @endisset


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