@isset($items)

    @foreach($items as $item)

        @if($item instanceof App\Slider)

            <div class="row justify-content-center mb-5 bg-secondary">

                <div class="col-12 py-3">
                    <h2 class="text-light text-center">{{ $item->name }}</h2>
                </div>
                <div class="col-12 row justify-content-center">
                    <form action="/slider/{{ $item->id }}" method="POST" class="col">
                        @csrf
                        @method('PUT')
                        <input type="text" value="{{ $item->name }}" name="name" class="col-7">
                        <input type="hidden" value="{{ $menu->id }}" name="menu_id">
                        <input type="text" value="{{ $item->position }}" name="position">
                        <button class="btn btn-warning" type="submit">Редактировать</button>
                    </form>
                    <form action="/slider/{{ $item->id }}" method="post" class="col-auto">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </div>

                @foreach($item->images as $image)

                    <div class="col-4 my-3">
                        <div class="card">
                            <img class="card-img-top" src="/uploads/slides/small/{{ $image->image }}" alt="Card image cap">
                            <div class="card-body justify-content-center text-center">
                                <form action="/image/{{ $image->id }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <input type="file" name="image">
                                    <input type="hidden" name="slider_id" value="{{ $item->id }}">
                                    <button type="submit" class="btn btn-warning mt-2">Редактировать</button>
                                </form>
                            </div>
                            <div class="card-body text-center">
                                <a href="/image/{{ $image->id }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('image-delete-{{ $image->id }}').submit();">Удалить</a>
                                <form id="image-delete-{{ $image->id }}" action="/image/{{ $image->id }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                    </div>

                @endforeach


                <div class="col-4 my-3">
                    <div class="card">
                        <div class="card-body justify-content-center text-center">
                            <h5 class="card-title text-success">Новая картинка</h5>
                            <form action="/image" class="mt-5" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="image">
                                <input type="hidden" value="{{ $item->id }}" name="slider_id">
                                <button type="submit" class="btn btn-success mt-3">Еще картинка</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        @endif

        @if($item instanceof App\Advantage)

            <form action="/advantage/{{ $item->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h2 class="text-center h2 m-md-5 w-100" style="font-family: Forum;"><hr><input type="text" name="name" class="w-100" value="{{ $item->name }}"><hr></h2>
                <div class="row">
                    <div class="col-md-8 col-12">
                        <img src="/uploads/images/large/{{ $item->image }}" class="w-100" style=" padding:12px; background-image:url(/images/stipes2.png); background-size: 100px 100px;" alt="">
                        <input type="file" class="mt-3" name="image">
                    </div>
                    <div class="col-md-3 col-12 ml-md-5 text-center" style="text-transform: uppercase; top:7%;">
                        <hr>
                        <div class="card-header mt-md-4">
                            <img width="50" height="50" src="/uploads/icons/{{ $item->icon_image }}" class="img-fluid" alt="">
                            <input class="mt-3" type="file" name="icon_image">
                        </div>
                        <div class="card-body">
                            <hr>
                            <textarea name="description" id="" cols="30" rows="10">{{ $item->description }}</textarea>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-warning">Редактировать</button>
                        <a class="btn btn-danger" href="/advantage/{{ $item->id }}" onclick="event.preventDefault(); document.getElementById('advantage-delete-{{ $item->id }}').submit();">Удалить</a>
                    </div>
                </div>
            </form>
            <form action="/advantage/{{ $item->id }}" id="advantage-delete-{{ $item->id }}" class="d-none" method="post">
                @csrf
                @method('DELETE')
            </form>

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
                        <input type="hidden" value="{{ $menu->id }}" name="menu_id">
                        <input type="text" value="{{ $item->position }}" name="position">
                        <button class="btn btn-warning" type="submit">Редактировать</button>
                    </form>
                    <form action="/benefit/{{ $item->id }}" method="post" class="col-auto">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </div>
            </div>

            <div class="row justify-content-center mb-5 mx-md-auto bg-white">

                @foreach($item->texts as $text)

                    <form id="benefit-{{ $text->id }}" action="/text/{{ $text->id }}" enctype="multipart/form-data" method="post" class="col-4 my-4">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <img src="/uploads/icons/{{ $text->icon }}" class="ml-md-3 img-fluid" alt="" width="30" height="30">
                                </h5>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    <input type="file" name="icon">
                                </h6>
                                <p class="card-text">
                                    <textarea name="text" id="" class="col-12" rows="5">{{ $text->text }}</textarea>
                                </p>
                                <input type="hidden" value="{{ $item->id }}" name="benefit_id">
                                <a href="#" onclick="event.preventDefault(); document.getElementById('benefit-{{ $text->id }}').submit();" class="card-link text-warning">Редактировать</a>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('benefit-delete-{{ $text->id }}').submit();" class="card-link text-danger">Удалить</a>
                            </div>
                        </div>
                    </form>
                    <form action="/text/{{ $text->id }}" method="post" id="benefit-delete-{{ $text->id }}" class="d-none">
                        @csrf
                        @method('DELETE')
                    </form>

                @endforeach

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
                            <input type="hidden" value="{{ $item->id }}" name="benefit_id">
                            <button type="submit" class="btn btn-success">Создать</button>
                        </div>
                    </div>
                </form>

            </div>

        @endif

    @endforeach

@endisset