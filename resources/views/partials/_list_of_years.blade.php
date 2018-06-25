<ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
    <li class="nav-item mx-2">
        <a class="btn btn-verona text-verona" id="pills-home-tab" data-toggle="pill" href="#pills-2017" role="tab" aria-controls="pills-home" aria-selected="true">2017 год</a>
    </li>
    <li class="nav-item mx-2">
        <a class="btn btn-verona text-verona active" id="pills-profile-tab" data-toggle="pill" href="#pills-2018" role="tab" aria-controls="pills-profile" aria-selected="false">2018 год</a>
    </li>
    <li class="nav-item mx-2">
        <a class="btn btn-verona text-verona" id="pills-contact-tab" data-toggle="pill" href="#pills-2019" role="tab" aria-controls="pills-contact" aria-selected="false">2019 год</a>
    </li>

    @foreach($years as $year)

        <li class="nav-item mx-2">
            <a class="btn btn-verona text-verona" id="pills-contact-tab" data-toggle="pill" href="#pills-{{ $year->name }}" role="tab" aria-controls="pills-contact" aria-selected="false">{{ $year->name }} год</a>
        </li>

    @endforeach
</ul>

<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show" id="pills-2017" role="tabpanel" aria-labelledby="pills-home-tab">
        <ul class="row justify-content-center nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item mx-2">
                <a class="btn btn-verona text-verona active" id="pills-sep-tab" data-toggle="pill" href="#pills-2017-sep" role="tab" aria-controls="pills-sep" aria-selected="true">Сентябрь</a>
            </li>
            <li class="nav-item mx-2">
                <a class="btn btn-verona text-verona" id="pills-okt-tab" data-toggle="pill" href="#pills-2017-okt" role="tab" aria-controls="pills-okt" aria-selected="false">Октябрь</a>
            </li>
            <li class="nav-item mx-2">
                <a class="btn btn-verona text-verona" id="pills-nov-tab" data-toggle="pill" href="#pills-2017-nov" role="tab" aria-controls="pills-nov" aria-selected="false">Ноябрь</a>
            </li>
            <li class="nav-item mx-2">
                <a class="btn btn-verona text-verona" id="pills-dec-tab" data-toggle="pill" href="#pills-2017-dec" role="tab" aria-controls="pills-dec" aria-selected="false">Декабрь</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-2017-sep" role="tabpanel" aria-labelledby="pills-sep-tab">
                <div class="row">
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Stages/2017сентябрь/3.jpg" rel="group1" class="grouped_elements"><img src="/images/Stages/2017сентябрь/3.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Stages/2017сентябрь/10.jpg" rel="group1" class="grouped_elements"><img src="/images/Stages/2017сентябрь/10.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Stages/2017сентябрь/15.jpg" rel="group1" class="grouped_elements"><img src="/images/Stages/2017сентябрь/15.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Stages/2017сентябрь/6.jpg" rel="group1" class="grouped_elements"><img src="/images/Stages/2017сентябрь/6.jpg" class="img-fluid" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-2017-okt" role="tabpanel" aria-labelledby="pills-okt-tab">
                <div class="row">
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Stages/2017октябрь/1.jpg" rel="group1" class="grouped_elements"><img src="/images/Stages/2017октябрь/1.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Stages/2017октябрь/2.jpg" rel="group1" class="grouped_elements"><img src="/images/Stages/2017октябрь/2.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Stages/2017октябрь/3.jpg" rel="group1" class="grouped_elements"><img src="/images/Stages/2017октябрь/3.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Stages/2017октябрь/4.jpg" rel="group1" class="grouped_elements"><img src="/images/Stages/2017октябрь/4.jpg" class="img-fluid" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-2017-nov" role="tabpanel" aria-labelledby="pills-nov-tab">
                <div class="row">
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Stages/2017ноябрь/1.jpg" rel="group1" class="grouped_elements"><img src="/images/Stages/2017ноябрь/1.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Stages/2017ноябрь/2.jpg" rel="group1" class="grouped_elements"><img src="/images/Stages/2017ноябрь/2.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Stages/2017ноябрь/3.jpg" rel="group1" class="grouped_elements"><img src="/images/Stages/2017ноябрь/3.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Stages/2017ноябрь/4.jpg" rel="group1" class="grouped_elements"><img src="/images/Stages/2017ноябрь/4.jpg" class="img-fluid" alt=""></a>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="pills-2017-dec" role="tabpanel" aria-labelledby="pills-dec-tab">
                <div class="row">
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Stages/2017декабрь/1.jpg" rel="group1" class="grouped_elements"><img src="/images/Stages/2017декабрь/1.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Stages/2017декабрь/2.jpg" rel="group1" class="grouped_elements"><img src="/images/Stages/2017декабрь/2.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Stages/2017декабрь/3.jpg" rel="group1" class="grouped_elements"><img src="/images/Stages/2017декабрь/3.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Stages/2017декабрь/4.jpg" rel="group1" class="grouped_elements"><img src="/images/Stages/2017декабрь/4.jpg" class="img-fluid" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="tab-pane fade show active" id="pills-2018" role="tabpanel" aria-labelledby="pills-profile-tab">
        <ul class="row justify-content-center nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item mx-2">
                <a class="btn btn-verona text-verona active" id="pills-jan-tab" data-toggle="pill" href="#pills-2018-jan" role="tab" aria-controls="pills-sep" aria-selected="true">Январь</a>
            </li>
            <li class="nav-item mx-2">
                <a class="btn btn-verona text-verona" id="pills-feb-tab" data-toggle="pill" href="#pills-2018-feb" role="tab" aria-controls="pills-okt" aria-selected="false">Февраль</a>
            </li>
            <li class="nav-item mx-2">
                <a class="btn btn-verona text-verona" id="pills-mar-tab" data-toggle="pill" href="#pills-2018-mar" role="tab" aria-controls="pills-nov" aria-selected="false">Март </a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-2018-jan" role="tabpanel" aria-labelledby="pills-jan-tab">
                <div class="row">
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Stages/2018январь/1.jpg" rel="group1" class="grouped_elements"><img src="/images/Stages/2018январь/1.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Stages/2018январь/1.jpg" rel="group1" class="grouped_elements"><img src="/images/Stages/2018январь/1.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Stages/2018январь/1.jpg" rel="group1" class="grouped_elements"><img src="/images/Stages/2018январь/1.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Stages/2018январь/1.jpg" rel="group1" class="grouped_elements"><img src="/images/Stages/2018январь/1.jpg" class="img-fluid" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-2018-feb" role="tabpanel" aria-labelledby="pills-feb-tab">
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
            <div class="tab-pane fade" id="pills-2018-mar" role="tabpanel" aria-labelledby="pills-mar-tab">
                <div class="row">
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Renders/1.png" rel="group1" class="grouped_elements"><img src="/images/Renders/1.png" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Renders/2.png" rel="group1" class="grouped_elements"><img src="/images/Renders/2.png" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Renders/08_E.png" rel="group1" class="grouped_elements"><img src="/images/Renders/08_E.png" class="img-fluid" alt=""></a>
                    </div>
                    <div class="col-md col-6 mb-2">
                        <a href="/images/Renders/123.png" rel="group1" class="grouped_elements"><img src="/images/Renders/123.png" class="img-fluid" alt=""></a>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="pills-2019" role="tabpanel" aria-labelledby="pills-contact-tab">
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
        </div>
    </div>
    @foreach($years as $year)

        <div class="tab-pane fade" id="pills-{{ $year->name }}" role="tabpanel" aria-labelledby="pills-contact-tab">
            @include('partials._list_of_months', [
                'year' => $year,
                'months' => $year->months,
            ])
        </div>

    @endforeach
</div>