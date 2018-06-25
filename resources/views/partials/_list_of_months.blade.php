<ul class="row justify-content-center nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item mx-2">
        <a class="btn btn-verona text-verona active" id="pills-sep-tab" data-toggle="pill" href="#pills-2019-sep" role="tab" aria-controls="pills-sep" aria-selected="true">Сентябрь</a>
    </li>
    <li class="nav-item mx-2">
        <a class="btn btn-verona text-verona" id="pills-okt-tab" data-toggle="pill" href="#pills-2019-okt" role="tab" aria-controls="pills-okt" aria-selected="false">Октябрь</a>
    </li>
    <li class="nav-item mx-2">
        <a class="btn btn-verona text-verona" id="pills-nov-tab" data-toggle="pill" href="#pills-2019-nov" role="tab" aria-controls="pills-nov" aria-selected="false">Ноябрь</a>
    </li>
    @foreach($months as $month)

        <li class="nav-item mx-2">
            <a class="btn btn-verona text-verona" id="pills-{{ $month->name }}-tab" data-toggle="pill" href="#pills-{{ $year->name }}}-{{ $month->name }}" role="tab" aria-controls="pills-nov" aria-selected="false">{{ $month->name }}</a>
        </li>

    @endforeach
</ul>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-2019-sep" role="tabpanel" aria-labelledby="pills-sep-tab">
        <div class="row">
            <div class="col-md col-6 mb-2">
                <a href="/images/Renders/3.png" rel="group1" class="grouped_elements"><img src="/images/Renders/07_D.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="col-md col-6 mb-2">
                <a href="/images/Renders/07_E.jpg" rel="group1" class="grouped_elements"><img src="/images/Renders/08_D.png" class="img-fluid" alt=""></a>
            </div>
            <div class="col-md col-6 mb-2">
                <a href="/images/Renders/07_D.jpg" rel="group1" class="grouped_elements"><img src="/images/Renders/08_E.png" class="img-fluid" alt=""></a>
            </div>
            <div class="col-md col-6 mb-2">
                <a href="/images/Renders/123.png" rel="group1" class="grouped_elements"><img src="/images/Renders/123.png" class="img-fluid" alt=""></a>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="pills-2019-okt" role="tabpanel" aria-labelledby="pills-okt-tab">
        <div class="row">
            <div class="col-md col-6 mb-2">
                <a href="/images/Renders/07_D.jpg" rel="group1" class="grouped_elements"><img src="/images/Renders/07_D.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="col-md col-6 mb-2">
                <a href="/images/Renders/08_D.png" rel="group1" class="grouped_elements"><img src="/images/Renders/08_D.png" class="img-fluid" alt=""></a>
            </div>
            <div class="col-md col-6 mb-2">
                <a href="/images/Renders/08_E.png" rel="group1" class="grouped_elements"><img src="/images/Renders/08_E.png" class="img-fluid" alt=""></a>
            </div>
            <div class="col-md col-6 mb-2">
                <a href="/images/Renders/123.png" rel="group1" class="grouped_elements"><img src="/images/Renders/123.png" class="img-fluid" alt=""></a>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="pills-2019-nov" role="tabpanel" aria-labelledby="pills-nov-tab">
        <div class="row">
            <div class="col-md col-6 mb-2">
                <a href="/images/Renders/07_D.jpg" rel="group1" class="grouped_elements"><img src="/images/Renders/07_D.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="col-md col-6 mb-2">
                <a href="/images/Renders/08_D.png" rel="group1" class="grouped_elements"><img src="/images/Renders/08_D.png" class="img-fluid" alt=""></a>
            </div>
            <div class="col-md col-6 mb-2">
                <a href="/images/Renders/08_E.png" rel="group1" class="grouped_elements"><img src="/images/Renders/08_E.png" class="img-fluid" alt=""></a>
            </div>
            <div class="col-md col-6 mb-2">
                <a href="/images/Renders/123.png" rel="group1" class="grouped_elements"><img src="/images/Renders/123.png" class="img-fluid" alt=""></a>
            </div>
        </div>

    </div>
    @foreach($months as $month)

        <div class="tab-pane fade" id="pills-{{ $year->name }}-{{ $month->name }}" role="tabpanel" aria-labelledby="pills-{{ $month->name }}-tab">

            @include('partials._list_stage_images', [
                'images' => $month->images,
                'year' => $year,
            ])

        </div>

    @endforeach
</div>