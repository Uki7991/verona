@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mt-3 justify-content-center">
            <div class="col-12">
                <h2 class="h1 text-center"><hr>О нас<hr></h2>
            </div>
        </div>
        <div class="row my-5 justify-content-center">
            <div class="col-10" style="font-family: Forum;">
                <p class="h4">
                    {!! $app->description !!}
                </p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <div class="card bg-footer text-light">
                    <div class="card-body pb-0 ">
                        <h4 class="card-title text-light text-center">Контакты:</h4>
                        <p class="text-center text-light">{{ $app->email }}</p>
                    </div>
                    <div class="card-body pt-0 d-flex justify-content-center">
                        <div class="col-auto">{{ $app->phone1 }}</div>
                        <div class="col-auto">{{ $app->phone2 }}</div>
                        <div class="col-auto">{{ $app->phone3 }}</div>
                        <div class="col-auto">{{ $app->phone4 }}</div>
                    </div>
                    <div class="card-body pt-0 d-flex justify-content-center">
                        <div class="col-auto">
                            <a href="{{ $app->instagram }}" class="text-light">
                                {{ $app->instagram }}
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="{{ $app->facebook }}" class="text-light">
                                {{ $app->facebook }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="col-6">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-body">--}}
                        {{--<h5 class="card-title">Special title treatment</h5>--}}
                        {{--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>

@endsection