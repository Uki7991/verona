<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <title>Verona Residence</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        #app {
            background-image: url(/images/renders/01_Day.png);
            background-size: cover;
            background-repeat: no-repeat;
        }
        .btn-verona {
            font-weight: bold;
            font-size: 18px;
            color:#2a160a!important;
            border:1.5px solid #3b1600;
        }
        .btn-verona:hover {

            border: 1.5px solid white;
            color:white!important;
        }
        p, h1, h2, h3, h4, h5, a {
            color: #66676A!important;
        }
        body {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
    </style>
</head>
<body>

<div id="app" class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-auto col-12 text-center">
            <img src="/images/icons/logo1.png" alt="" class="w-50">
        </div>
    </div>
    <div class="row justify-content-center">
        <span class="h4" style="font-family: Georgia; font-weight: lighter; color:#514239; letter-spacing: 7px;">представляет</span>
    </div>
    <div class="row my-2 justify-content-center">
        <div class="col-lg-auto col-12">
            <img src="/images/residence.png" alt="" class="img-fluid">
        </div>
    </div>
    <div class="row justify-content-center my-5">
        <a href="/description" class="btn btn-verona">Описание дома</a>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $('#app').height($(window).height());
</script>

</body>
</html>