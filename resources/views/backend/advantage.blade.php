@extends('layouts.app')

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


        @include('partials.edit_forms')

        <div class="line text-center mb-5 mt-5"><img style="width:30%;" src="/images/2.png" alt=""></div>

        @include('partials.create_forms')

        <div class="row justify-content-center d-none d-md-center-block">
            @include('layouts.navigator')
        </div>
        <div class="row justify-content-center">
            @include('layouts.navigator')
        </div>
    </div>

@endsection