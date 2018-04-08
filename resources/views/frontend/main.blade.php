<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    #app {
        background-image: url(/images/renders/01_Day.png);
        background-size: 100%;
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
</style>

<div id="app" class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-auto text-center">
            <img src="/images/icons/logo1.png" alt="" style="width:50%;">
        </div>
    </div>
    <div class="row justify-content-center">
        <span class="h4" style="font-family: Georgia; font-weight: lighter; font-size: 26px; color:#514239; letter-spacing: 7px;">представляет</span>
    </div>
    <div class="row my-2 justify-content-center">
        <div class="col-auto">
            <img style="width:770px; " src="/images/residence.png" alt="">
        </div>
    </div>
    <div class="row justify-content-center my-5">
        <a href="/description" class="btn btn-verona">Описание дома</a>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $('#app').height($(window).height());
</script>