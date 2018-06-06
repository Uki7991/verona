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

                    <div class="row mb-5 bg-secondary">

                        <div class="col-12 py-3">
                            <h2 class="text-light text-center">{{ $item->name }}</h2>
                        </div>

                        @foreach($item->images as $image)

                            <div class="col-4 my-3">
                                <div class="card">
                                    <img class="card-img-top" src="/images/Renders/01_Day.jpg" alt="Card image cap">
                                    <div class="card-body justify-content-center text-center">
                                        <form action="/benefit/{{ $image->id }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <input type="file" name="image">
                                            <input type="hidden" name="slider_id" value="{{ $item->id }}">
                                            <button type="submit" class="btn btn-warning mt-2">Редактировать</button>
                                        </form>
                                    </div>
                                    <div class="card-body text-center">
                                        <a href="/benefit/{{ $$image->id }}" class="btn btn-danger" onclick="e.preventDefault(e); document.getElementById('benefit-delete').submit();">Удалить</a>
                                        <form id="benefit-delete" action="/benefit/{{ $image->id }}" method="POST" style="display: none;">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>

                        @endforeach


                        <div class="col-4 my-3">
                            <div class="card">
                                <img class="card-img-top" src="/images/Renders/01_Day.jpg" alt="Card image cap">
                                <div class="card-body justify-content-center text-center">
                                    <form action="" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="file">
                                        <button type="submit" class="btn btn-warning mt-2">Редактировать</button>
                                    </form>
                                </div>
                                <div class="card-body text-center">
                                    <a href="" class="btn btn-danger">Удалить</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-4 my-3">
                            <div class="card">
                                <img class="card-img-top" src="/images/Renders/01_Day.jpg" alt="Card image cap">
                                <div class="card-body justify-content-center text-center">
                                    <form action="" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="file">
                                        <button type="submit" class="btn btn-warning mt-2">Редактировать</button>
                                    </form>
                                </div>
                                <div class="card-body text-center">
                                    <a href="" class="btn btn-danger">Удалить</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-4 my-3">
                            <div class="card">
                                <img class="card-img-top" src="/images/Renders/01_Day.jpg" alt="Card image cap">
                                <div class="card-body justify-content-center text-center">
                                    <form action="" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="file">
                                        <button type="submit" class="btn btn-warning mt-2">Редактировать</button>
                                    </form>
                                </div>
                                <div class="card-body text-center">
                                    <a href="" class="btn btn-danger">Удалить</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-4 my-3">
                            <div class="card">
                                <img class="card-img-top" src="/images/Renders/01_Day.jpg" alt="Card image cap">
                                <div class="card-body justify-content-center text-center">
                                    <form action="" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="file">
                                        <button type="submit" class="btn btn-warning mt-2">Редактировать</button>
                                    </form>
                                </div>
                                <div class="card-body text-center">
                                    <a href="" class="btn btn-danger">Удалить</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 my-3">
                            <div class="card">
                                <div class="card-body justify-content-center text-center">
                                    <h5 class="card-title text-success">Новая картинка</h5>
                                    <form action="/image" class="mt-5" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="image">
                                        <input type="hidden" value="1" name="slider_id">
                                        <button type="submit" class="btn btn-success mt-3">Еще картинка</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                @endif

                @if($item instanceof App\Benefit)

                        <div class="row justify-content-center mx-md-auto bg-info">
                            <div class="col-12">
                                <h2 class="text-center text-light py-3">{{ $item->title }}</h2>
                            </div>
                            <div class="col-12 mb-3 row justify-content-center">
                                <form action="/benefit/{{ $item->id }}" method="POST" class="col">
                                    @csrf
                                    @method('PUT')
                                    <input type="text" value="{{ $item->title }}" name="title" class="col-7">
                                    <input type="hidden" value="1" name="menu_id">
                                    <input type="text" value="{{ $item->position }}" name="position">
                                    <button class="btn btn-warning" type="submit">Редактировать</button>
                                </form>
                                <form action="" method="post" class="col-auto">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                </form>
                            </div>
                        </div>

                        <div class="row justify-content-center mb-5 mx-md-auto bg-white">

                            <form action="" class="col-4 my-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <img src="/images/Icons/marker.png" class="ml-md-3" alt="">
                                        </h5>
                                        <h6 class="card-subtitle mb-2 text-muted">
                                            <input type="file" name="img">
                                        </h6>
                                        <p class="card-text">
                                            <textarea name="" id="" class="col-12" rows="5">Удобное расположение комплекса позволит вам без труда добраться до работы и обратно домой</textarea>
                                        </p>
                                        <a href="#" class="card-link text-warning">Редактировать</a>
                                        <a href="#" class="card-link text-danger">Удалить</a>
                                    </div>
                                </div>
                            </form>

                            <form action="" class="col-4 my-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <img src="/images/Icons/marker.png" class="ml-md-3" alt="">
                                        </h5>
                                        <h6 class="card-subtitle mb-2 text-muted">
                                            <input type="file" name="img">
                                        </h6>
                                        <p class="card-text">
                                            <textarea name="" id="" class="col-12" rows="5">Удобное расположение комплекса позволит вам без труда добраться до работы и обратно домой</textarea>
                                        </p>
                                        <a href="#" class="card-link text-warning">Редактировать</a>
                                        <a href="#" class="card-link text-danger">Удалить</a>
                                    </div>
                                </div>
                            </form>
                            <form action="" class="col-4 my-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <img src="/images/Icons/marker.png" class="ml-md-3" alt="">
                                        </h5>
                                        <h6 class="card-subtitle mb-2 text-muted">
                                            <input type="file" name="img">
                                        </h6>
                                        <p class="card-text">
                                            <textarea name="" id="" class="col-12" rows="5">Удобное расположение комплекса позволит вам без труда добраться до работы и обратно домой</textarea>
                                        </p>
                                        <a href="#" class="card-link text-warning">Редактировать</a>
                                        <a href="#" class="card-link text-danger">Удалить</a>
                                    </div>
                                </div>
                            </form>
                            <form action="" class="col-4 my-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <img src="/images/Icons/marker.png" class="ml-md-3" alt="">
                                        </h5>
                                        <h6 class="card-subtitle mb-2 text-muted">
                                            <input type="file" name="img">
                                        </h6>
                                        <p class="card-text">
                                            <textarea name="" id="" class="col-12" rows="5">Удобное расположение комплекса позволит вам без труда добраться до работы и обратно домой</textarea>
                                        </p>
                                        <a href="#" class="card-link text-warning">Редактировать</a>
                                        <a href="#" class="card-link text-danger">Удалить</a>
                                    </div>
                                </div>
                            </form>
                            <form action="" class="col-4 my-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <img src="/images/Icons/marker.png" class="ml-md-3" alt="">
                                        </h5>
                                        <h6 class="card-subtitle mb-2 text-muted">
                                            <input type="file" name="img">
                                        </h6>
                                        <p class="card-text">
                                            <textarea name="" id="" class="col-12" rows="5">Удобное расположение комплекса позволит вам без труда добраться до работы и обратно домой</textarea>
                                        </p>
                                        <a href="#" class="card-link text-warning">Редактировать</a>
                                        <a href="#" class="card-link text-danger">Удалить</a>
                                    </div>
                                </div>
                            </form>

                            <form action="/text" method="POST" class="col-4 my-4" enctype="multipart/form-data">
                                @csrf
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title text-success">
                                            Создать новый
                                        </h5>
                                        <h6 class="card-subtitle mb-2 text-muted">
                                            <input type="file" name="icon">
                                        </h6>
                                        <p class="card-text">
                                            <textarea name="text" id="" class="col-12" rows="5"></textarea>
                                        </p>
                                        <input type="hidden" value="1" name="benefit_id">
                                        <button type="submit" class="btn btn-success">Создать</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                @endif

            @endforeach

        @endisset


        <div class="row mb-5 bg-secondary">

            <div class="col-12 py-3">
                <h2 class="text-light text-center">Слайд №1</h2>
            </div>

            @isset ($slider)

                @isset ($benefit)

                    <div class="col-4 my-3">
                        <div class="card">
                            <img class="card-img-top" src="/images/Renders/01_Day.jpg" alt="Card image cap">
                            <div class="card-body justify-content-center text-center">
                                <form action="/benefit/{{ $benefit->id }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <input type="file" name="image">
                                    <input type="hidden" name="slider_id" value="{{ $slider->id }}">
                                    <button type="submit" class="btn btn-warning mt-2">Редактировать</button>
                                </form>
                            </div>
                            <div class="card-body text-center">
                                <a href="/benefit/{{ $benefit->id }}" class="btn btn-danger" onclick="e.preventDefault(e); document.getElementById('benefit-delete').submit();">Удалить</a>
                                <form id="benefit-delete" action="/benefit/{{ $benefit->id }}" method="POST" style="display: none;">
                                    @method('DELETE')
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>

                @endisset

            @endisset


            <div class="col-4 my-3">
                <div class="card">
                    <img class="card-img-top" src="/images/Renders/01_Day.jpg" alt="Card image cap">
                    <div class="card-body justify-content-center text-center">
                        <form action="" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="file">
                            <button type="submit" class="btn btn-warning mt-2">Редактировать</button>
                        </form>
                    </div>
                    <div class="card-body text-center">
                        <a href="" class="btn btn-danger">Удалить</a>
                    </div>
                </div>
            </div>


            <div class="col-4 my-3">
                <div class="card">
                    <img class="card-img-top" src="/images/Renders/01_Day.jpg" alt="Card image cap">
                    <div class="card-body justify-content-center text-center">
                        <form action="" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="file">
                            <button type="submit" class="btn btn-warning mt-2">Редактировать</button>
                        </form>
                    </div>
                    <div class="card-body text-center">
                        <a href="" class="btn btn-danger">Удалить</a>
                    </div>
                </div>
            </div>


            <div class="col-4 my-3">
                <div class="card">
                    <img class="card-img-top" src="/images/Renders/01_Day.jpg" alt="Card image cap">
                    <div class="card-body justify-content-center text-center">
                        <form action="" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="file">
                            <button type="submit" class="btn btn-warning mt-2">Редактировать</button>
                        </form>
                    </div>
                    <div class="card-body text-center">
                        <a href="" class="btn btn-danger">Удалить</a>
                    </div>
                </div>
            </div>


            <div class="col-4 my-3">
                <div class="card">
                    <img class="card-img-top" src="/images/Renders/01_Day.jpg" alt="Card image cap">
                    <div class="card-body justify-content-center text-center">
                        <form action="" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="file">
                            <button type="submit" class="btn btn-warning mt-2">Редактировать</button>
                        </form>
                    </div>
                    <div class="card-body text-center">
                        <a href="" class="btn btn-danger">Удалить</a>
                    </div>
                </div>
            </div>

            <div class="col-4 my-3">
                <div class="card">
                    <div class="card-body justify-content-center text-center">
                        <h5 class="card-title text-success">Новая картинка</h5>
                        <form action="/image" class="mt-5" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="image">
                            <input type="hidden" value="1" name="slider_id">
                            <button type="submit" class="btn btn-success mt-3">Еще картинка</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mx-md-auto bg-info">
            <div class="col-12">
                <h2 class="text-center text-light py-3">Секция Название</h2>
            </div>
            <div class="col-12 mb-3 row justify-content-center">
                <form action="/benefit/{{ isset($benefit) ? $benefit->id : '' }}" method="POST" class="col">
                    @csrf
                    @method('PUT')
                    <input type="text" value="Отличное расположение" class="col-7">
                    <input type="text" value="0" name="position">
                    <button class="btn btn-warning" type="submit">Редактировать</button>
                </form>
                <form action="" method="post" class="col-auto">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Удалить</button>
                </form>
            </div>
        </div>

        <div class="row justify-content-center mb-5 mx-md-auto bg-white">

            <form action="" class="col-4 my-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <img src="/images/Icons/marker.png" class="ml-md-3" alt="">
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <input type="file" name="img">
                        </h6>
                        <p class="card-text">
                            <textarea name="" id="" class="col-12" rows="5">Удобное расположение комплекса позволит вам без труда добраться до работы и обратно домой</textarea>
                        </p>
                        <a href="#" class="card-link text-warning">Редактировать</a>
                        <a href="#" class="card-link text-danger">Удалить</a>
                    </div>
                </div>
            </form>

            <form action="" class="col-4 my-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <img src="/images/Icons/marker.png" class="ml-md-3" alt="">
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <input type="file" name="img">
                        </h6>
                        <p class="card-text">
                            <textarea name="" id="" class="col-12" rows="5">Удобное расположение комплекса позволит вам без труда добраться до работы и обратно домой</textarea>
                        </p>
                        <a href="#" class="card-link text-warning">Редактировать</a>
                        <a href="#" class="card-link text-danger">Удалить</a>
                    </div>
                </div>
            </form>
            <form action="" class="col-4 my-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <img src="/images/Icons/marker.png" class="ml-md-3" alt="">
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <input type="file" name="img">
                        </h6>
                        <p class="card-text">
                            <textarea name="" id="" class="col-12" rows="5">Удобное расположение комплекса позволит вам без труда добраться до работы и обратно домой</textarea>
                        </p>
                        <a href="#" class="card-link text-warning">Редактировать</a>
                        <a href="#" class="card-link text-danger">Удалить</a>
                    </div>
                </div>
            </form>
            <form action="" class="col-4 my-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <img src="/images/Icons/marker.png" class="ml-md-3" alt="">
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <input type="file" name="img">
                        </h6>
                        <p class="card-text">
                            <textarea name="" id="" class="col-12" rows="5">Удобное расположение комплекса позволит вам без труда добраться до работы и обратно домой</textarea>
                        </p>
                        <a href="#" class="card-link text-warning">Редактировать</a>
                        <a href="#" class="card-link text-danger">Удалить</a>
                    </div>
                </div>
            </form>
            <form action="" class="col-4 my-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <img src="/images/Icons/marker.png" class="ml-md-3" alt="">
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <input type="file" name="img">
                        </h6>
                        <p class="card-text">
                            <textarea name="" id="" class="col-12" rows="5">Удобное расположение комплекса позволит вам без труда добраться до работы и обратно домой</textarea>
                        </p>
                        <a href="#" class="card-link text-warning">Редактировать</a>
                        <a href="#" class="card-link text-danger">Удалить</a>
                    </div>
                </div>
            </form>

            <form action="/text" method="POST" class="col-4 my-4" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-success">
                            Создать новый
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <input type="file" name="icon">
                        </h6>
                        <p class="card-text">
                            <textarea name="text" id="" class="col-12" rows="5"></textarea>
                        </p>
                        <input type="hidden" value="1" name="benefit_id">
                        <button type="submit" class="btn btn-success">Создать</button>
                    </div>
                </div>
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


        <div class="row">

            <div class="col-4">
                <form>
                    <h2>Создать слайд</h2>
                    <div class="form-group">
                        <label for="name-section">Название слайда</label>
                        <input type="text" class="form-control" id="name-section" placeholder="Название слайда">
                    </div>
                    <div class="form-group">
                        <label for="position-section">Позиция слайда</label>
                        <input type="text" class="form-control" id="position-section" placeholder="Позиция слайда">
                    </div>
                    <button type="submit" class="btn btn-success">Создать</button>
                </form>
            </div>

            <div class="col-4">
                <form method="POST" action="/benefit">
                    @csrf
                    <h2>Создать секцию</h2>
                    <div class="form-group">
                        <label for="name-section">Название секции</label>
                        <input type="text" class="form-control" id="name-section" name="title" placeholder="Название секции">
                    </div>
                    <input type="hidden" value="1" name="menu_id">
                    <div class="form-group">
                        <label for="position-section">Позиция секции</label>
                        <input type="text" class="form-control" name="position" id="position-section" placeholder="Позиция секции">
                    </div>
                    <button type="submit" class="btn btn-success">Создать</button>
                </form>
            </div>

            <div class="col-4">
                <form>
                    <h2>Создать секцию(мод)</h2>
                    <div class="form-group">
                        <label for="name-section">Название секции(мод)</label>
                        <input type="text" class="form-control" id="name-section" placeholder="Название секции(мод)">
                    </div>
                    <div class="form-group">
                        <label for="position-section">Позиция секции(мод)</label>
                        <input type="text" class="form-control" id="position-section" placeholder="Позиция секции(мод)">
                    </div>
                    <button type="submit" class="btn btn-success">Создать</button>
                </form>
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