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

            <div class="line text-center mb-5 mt-5 "><img style="width:30%;" src="/images/2.png" alt=""></div>

        @endif

        @if($item instanceof App\Advantage)

            <h2 class="text-center mt-5 h2 w-100" style="font-family: Forum;"><hr>{{ $item->name }}<hr></h2>
            <div class="row mb-5">
                <div class="col-md-8 col-12"><img src="/uploads/images/large/{{ $item->image }}" class="w-100" style=" padding:12px; background-image:url(/images/stipes2.png); background-size: 100px 100px;" alt=""></div>
                <div class="col-md-3 col-12 ml-md-5 text-center" style="font-family: forum; text-transform: uppercase; top:7%;">
                    <hr>
                    <div class="card-header mt-md-4">
                        <img width="50" height="50" src="/uploads/icons/{{ $item->icon_image }}" class="img-fluid" alt="">
                    </div>
                    <div class="card-body">
                        <hr>
                        <p class="card-text">{{ $item->description }}</p>
                    </div>
                    <hr>
                </div>
            </div>

        @endif

        @if($item instanceof App\Benefit)
            <h2 style="font-family: forum; text-transform: uppercase;" class=" text-center text-verona col-12"><hr>{{ $item->title }}<hr></h2>

            <div class="row col-12 col-md-10 justify-content-center mb-5 mx-md-auto">
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