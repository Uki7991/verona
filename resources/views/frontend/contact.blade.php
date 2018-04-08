@extends('layouts.app')

@section('content')
    <div class="container mb-5">

        <div class="row my-5 justify-content-center">
            <div class="col-12 col-md-8 col-xl-auto row justify-content-center">
                <img src="/images/residence1.png" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row justify-content-center">
            @include('layouts.navigator')
        </div>

        <div class="row">
            <h2 class="text-verona text-center col-6"><hr>Контакты<hr></h2>
            <h3 class="text-verona text-center col-6"><hr>Оставьте заявку<hr></h3>
        </div>

        <div class="row">
            <div class="text-center col-6" style="font-size: 24px;">


                <h3 class="my-3"><u>Телефоны:</u></h3>
                <p class="font-weight-bold">+996 (***) ***-***</p>
                <p class="font-weight-bold ">+996 (***) ***-***</p>

                <h3 class=" my-3"><u>E-mail:</u></h3>
                <p class="font-weight-bold">Verona.Residence@mail.ru</p>
            </div>


            <form class="text-verona text-center col-6">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="font-weight-bold">Ваше имя:</label>
                    <input type="text" class="form-control mx-auto col-12 col-lg-6 text-center" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                    <small id="emailHelp" class="form-text text-muted">Мы не используем Ваши данные для передачи третьим лицам</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="font-weight-bold">Ваш номер телефона:</label>
                    <input type="tel" class="form-control mx-auto col-12 col-lg-6 text-center" id="exampleInputPassword1" placeholder="+996 (700) 700 - 700">
                </div>
                <button type="submit" class="btn btn-primary">Оставить заявку!</button>
            </form>
        </div>
    </div>




    <div class="row mb-5 justify-content-center">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <iframe style="width:1000px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3096.828723012009!2d74.61329245376534!3d42.85181285476074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389eb637840098bf%3A0x70d0c082c28855c!2zNDLCsDUxJzA4LjgiTiA3NMKwMzYnNTAuNiJF!5e0!3m2!1sru!2skg!4v1521660665648" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="line text-center m-5"><img src="/images/2.png" alt=""></div>
        <div class="row justify-content-center">
            @include('layouts.navigator')
        </div>
    </div>
@endsection