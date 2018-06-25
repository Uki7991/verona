@extends('layouts.app')

@section('styles')

    <link rel="stylesheet" href="{{ asset('css/fancybox/fancybox/jquery.fancybox-1.3.4.css') }}" type="text/css" media="screen" />

@endsection

@section('content')

    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-12 col-md-8 col-xl-auto">
                <img src="/images/residence1.png" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row justify-content-center">
            @include('layouts.navigator')
        </div>

        <div class="row justify-content-center d-none d-md-center-block">
            @include('layouts.navigator')
        </div>

        <div class="row justify-content-center">
            <div class="row justify-content-center col-12">

               @include('partials._list_of_years')

            </div>
        </div>

        <div class="line text-center mb-5 mt-5"><img style="width:30%;" src="/images/2.png" alt=""></div>
        <div class="row justify-content-center d-none d-md-center-block">
            @include('layouts.navigator')
        </div>
        <div class="row justify-content-center">
            @include('layouts.navigator')
        </div>
    </div>

@endsection

@section('javascripts')

    <script type="text/javascript" src="{{ asset('/js/jquery1.4.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/css/fancybox/fancybox/jquery.fancybox-1.3.4.pack.js') }}"></script>
    <script>$("a.grouped_elements").fancybox();</script>

@endsection

