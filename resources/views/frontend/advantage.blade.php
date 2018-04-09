@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-12 col-md-8 col-xl-auto row justify-content-center">
                <img src="/images/residence1.png" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row justify-content-center">
            @include('layouts.navigator')
        </div>
        <div class="row justify-content-center d-none d-md-center-block">
            @include('layouts.navigator')
        </div>


    <div class="row">
        <h2 style="font-family: forum; text-transform: uppercase;" class=" text-center text-verona col-12"><hr>Что Вы получаете, приобретая квартиру в ЖК «Verona Residence»:<hr></h2>

        <h2 class="text-center h2 mb-5 w-100" style="font-family: Forum;"><hr>Детская игровая площадка<hr></h2>
        <div class="row col-12 justify-content-center">
            <div class="col-8" style="height:400px;"><img src="/images/renders/deti.png" class="w-100" style=" padding:12px; background-image:url(/images/stipes2.png); background-size: 100px 100px;" alt=""></div>
            <div class="col-3 ml-5 text-center" style="font-family: forum; text-transform: uppercase; top:7%;">
                <hr>
                <div class="card-header mt-4">
                    <img src="/images/icons/kids.png" class="img-fluid" alt="">
                </div>
                <div class="card-body">
                    <hr>
                    <p class="card-text">Детская площадка находится на територрии комплекса,
                        ваши дети всегда будут рядом и вам не нужно будет
                        переживать за них.</p>
                </div><hr></div>
        </div>

        <h2 class="text-center h2 m-5 w-100" style="font-family: Forum;"><hr>Беседка<hr></h2>
        <div class="row col-12 justify-content-center">
            <div class="col-3 text-center mr-5 mt-4" style="font-family: forum; text-transform: uppercase;"><hr><div class="card-header mt-4">
                    <img src="/images/icons/bench.png" class="img-fluid" alt="">
                </div>
                <div class="card-body">
                    <hr>
                    <p class="card-text">Прекрасная беседка с красивым дизайном, отличное место для отдыха, спокойного времяприпровождения, и пикника всей семьей.</p>
                </div><hr></div>
            <div class="col-8 text-center" style="height:430px;"><img src="/images/renders/besedka.png" class="w-100" style=" padding:12px; background-image:url(/images/stipes2.png); background-size: 100px 100px;" alt=""></div>

        </div>

        <h2 class="text-center h2 m-5 w-100" style="font-family: Forum;"><hr>Собственный фонтан с ночной подсветкой<hr></h2>
        <div class="row col-12 justify-content-center">
            <div class="col-8" style="height:400px;"><img src="/images/renders/fontan.png" class="w-100" style=" padding:12px; background-image:url(/images/stipes2.png); background-size: 100px 100px;" alt=""></div>
            <div class="col-3 ml-5 text-center" style="font-family: forum; text-transform: uppercase;">
                <hr>
                <div class="card-header mt-5">
                    <img src="/images/icons/fountain.png" class="img-fluid" alt="">
                </div>
                <div class="card-body">
                    <hr>
                    <p class="card-text">Превосходный фонтан с современным дизайном и с ночной подсветкой. Прекрасная атмосфера, успокаивающий звук воды и  приятная музыка.</p>
                </div><hr></div>
        </div>

        <h2 class="text-center h2 m-5 w-100" style="font-family: Forum;"><hr>Футбольная и баскетбольная площадка<hr></h2>
        <div class="row col-12 justify-content-center">
            <div class="col-3 text-center mr-5" style="font-family: forum; text-transform: uppercase;"><hr><div class="card-header mt-4">
                    <img src="/images/icons/ball.png" class="img-fluid" alt="">
                </div>
                <div class="card-body">
                    <hr>
                    <p class="card-text">Современный корт с футбольным и баскетбольным полем, с новой и качественной атрибутикой, позволит провести время занятия спортом с удовольствием и удобством.</p>
                </div><hr></div>
            <div class="col-8 text-center" style="height:430px;"><img src="/images/renders/deti.png" class="w-100" style=" padding:12px; background-image:url(/images/stipes2.png); background-size: 100px 100px;" alt=""></div>

        </div>
    </div>

    <h2 class="text-center h2 m-5 w-100" style="font-family: Forum;"><hr>Парковка<hr></h2>
    <div class="row col-12 justify-content-center">
        <div class="col-8" style="height:400px;"><img src="/images/renders/09_D_2.png" class="w-100" style=" padding:12px; background-image:url(/images/stipes2.png); background-size: 100px 100px;" alt=""></div>
        <div class="col-3 ml-5 text-center  mt-4" style="font-family: forum; text-transform: uppercase; top:7%;">
            <hr>
            <div class="card-header">
                <img src="/images/icons/parking.png" class="img-fluid" alt="">
            </div>
            <div class="card-body">
                <hr>
                <p class="card-text">ПОДЗЕМНЫЙ АВТОПАРКИНГ С 2-МЯ ВЪЕЗДАМИ И ВЫЕЗДАМИ, А ТАКЖЕ НАДЗЕМНАЯ ГОСТЕВАЯ АВТОСТОЯНКА</p>
            </div><hr></div>
    </div>

    <h2 class="text-center h2 m-5 w-100" style="font-family: Forum;"><hr>Подъезд<hr></h2>
    <div class="row col-12 justify-content-center">
        <div class="col-3 text-center mt-4" style="font-family: forum; text-transform: uppercase;"><hr><div class="card-header mt-4">
                <img src="/images/icons/entrance.png" class="img-fluid" alt="">
            </div>
            <div class="card-body">
                <hr>
                <p class="card-text">ОБЩАЯ ВХОДНАЯ ГРУППА ДЛЯ 2-Х ПОДЪЕЗДОВ С ДИЗАЙНЕРСКОЙ ОТДЕЛКОЙ, ГДЕ БУДЕТ ПРИСУТСТВОВАТЬ КОНСЪЕРЖ</p>
            </div><hr></div>
        <div class="col-8 text-center" style="height:430px;"><img src="/images/renders/006_3_post.jpg" class="w-65" style=" padding:12px; background-image:url(/images/stipes2.png); background-size: 100px 100px;" alt=""></div>

    </div>

    <h2 class="text-center h2 m-5 w-100" style="font-family: Forum;"><hr>Лифты<hr></h2>
    <div class="row col-12 justify-content-center">
        <div class="col-8 text-center" style="height:470px;"><img src="/images/renders/лифт.jpg" class="w-65" style=" padding:12px; background-image:url(/images/stipes2.png); background-size: 100px 100px;" alt=""></div>
        <div class="col-3 text-center mt-5" style="font-family: forum; text-transform: uppercase;"><hr><div class="card-header mt-4">
                <img src="/images/icons/elevator.png" class="img-fluid" alt="">
            </div>
            <div class="card-body">
                <hr>
                <p class="card-text">БЕСШУМНЫЕ НАДЕЖНЫЕ ЛИФТЫ МИРОВОГО БРЕНДА – ГРУЗОВОЙ (1050 КГ) И ПАССАЖИРСКИЙ (630 КГ) - ПО 2 ЛИФТА В КАЖДОМ ПОДЪЕЗДЕ</p>
            </div><hr></div>
    </div>

    <h2 class="text-center h2 m-5 w-100" style="font-family: Forum;"><hr>Окна<hr></h2>
    <div class="row col-12 justify-content-center">
        <div class="col-3 text-center" style="font-family: forum; text-transform: uppercase;"><hr><div class="card-header mt-4">
                <img src="/images/icons/window.png" class="img-fluid" alt="">
            </div>
            <div class="card-body">
                <hr>
                <p class="card-text">АЛЮМИНИЕВЫЕ ОКНА И ЛОДЖИИ ИЗ ВЫСОКОКАЧЕСТВЕННОГО ПРОФИЛЯ С ТЕРМОМОСТОМ И С ЭНЕРГОСБЕРЕГАЮЩИМИ СТЕКЛОПАКЕТАМИ</p>
            </div><hr></div>
        <div class="col-8 text-center" style="height:400px;"><img src="/images/renders/004_post.jpg" class="w-65" style=" padding:12px; background-image:url(/images/stipes2.png); background-size: 100px 100px;" alt=""></div>

    </div>

    <h2 class="text-center h2 m-5 w-100" style="font-family: Forum;"><hr>Фасад<hr></h2>
    <div class="row col-12 justify-content-center">
        <div class="col-8" style="height:400px;"><img src="/images/renders/02_Day.jpg" class="w-100" style=" padding:12px; background-image:url(/images/stipes2.png); background-size: 100px 100px;" alt=""></div>
        <div class="col-3 ml-5 text-center mt-4" style="font-family: forum; text-transform: uppercase;"><hr><div class="card-header mt-4">
                <img src="/images/icons/apartments.png" class="img-fluid" alt="">
            </div>
            <div class="card-body">
                <hr>
                <p class="card-text">ОТДЕЛКА ФАСАДА ИЗ НАТУРАЛЬНОГО КАМНЯ «ТРАВЕРТИН - САРЫ ТАШ»</p>
            </div><hr></div>
    </div>


    <h2 class="text-center h2 m-5 w-100" style="font-family: Forum;"><hr>Видео-наблюдение<hr></h2>
    <div class="row col-12 justify-content-center">
        <div class="col-3 mr-5 text-center" style="font-family: forum; text-transform: uppercase;"><hr><div class="card-header mt-4">
                <img src="/images/icons/cctv.png" class="img-fluid" alt="">
            </div>
            <div class="card-body">
                <hr>
                <p class="card-text">КРУГЛОСУТОЧНОЕ ВИДЕО-НАБЛЮДЕНИЕ ПОЗВОЛИТ ВАМ БЫТЬ УВЕРЕННЫМИ В СВОЕЙ БЕЗОПАСНОСТИ И БЕЗОПАСНОСТИ ВАШИХ ЛИЧНЫХ ВЕЩЕЙ.</p>
            </div><hr></div>
        <div class="col-8 mt-5" style=" height:400px;"><img src="/images/renders/16_E_2.jpg" class="w-100" style=" padding:12px; background-image:url(/images/stipes2.png); background-size: 100px 100px;" alt=""></div>

    </div>
    <div class="line text-center"><img src="/images/2.png" alt=""></div>

        <div class="row justify-content-center d-none d-md-center-block">
            @include('layouts.navigator')
        </div>
        <div class="row justify-content-center">
            @include('layouts.navigator')
        </div>
    </div>

@endsection