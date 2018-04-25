@extends('layouts.app')

@section('content')

    <div class="container mb-5">

        <div class="row">
            <div class="text-center mx-auto col-11 col-lg-6">
                <h2 class="text-verona text-center"><hr>Контакты<hr></h2>

                <h3 class="my-3"><u>Телефоны:</u></h3>
                <p class="font-weight-bold">+996 (557) 174 074</p>
                <p class="font-weight-bold ">+996 (702) 174 074</p>

                <h3 class="my-3"><u>E-mail:</u></h3>
                <p class="font-weight-bold">Verona.Residence@mail.ru</p>
            </div>

            <form class="text-verona text-center mx-auto mb-5 mb-md-0 col-11 col-lg-6">
                <h3 class="text-verona text-center"><hr>Оставьте заявку<hr></h3>

                <div class="form-group">
                    <label for="exampleInputEmail1" class="font-weight-bold">Ваше имя:</label>
                    <input type="text" class="form-control mx-auto col-12 col-lg-6 text-center" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                    <small id="emailHelp" class="form-text text-muted">Мы не используем Ваши данные для передачи третьим лицам</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="font-weight-bold">Ваш номер телефона:</label>
                    <input type="tel" class="form-control mx-auto col-12 col-lg-6 text-center" id="exampleInputPassword1" placeholder="+996 (700) 700 - 700">
                </div>
                <button type="submit" class="btn btn-verona">Оставить заявку!</button>
            </form>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3096.828723012009!2d74.61329245376534!3d42.85181285476074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389eb637840098bf%3A0x70d0c082c28855c!2zNDLCsDUxJzA4LjgiTiA3NMKwMzYnNTAuNiJF!5e0!3m2!1sru!2skg!4v1521660665648" width="100%" height="300" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

    <div class="container">
        <div class="line text-center mb-5 mt-5">
            <img style="width:30%;" src="/images/2.png" alt="">
        </div>
    </div>
@endsection