@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <form action="/app/1" class="col-8 my-5" enctype="multipart/form-data" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="app-title">Название сайта</label>
                    <input type="text" class="form-control" name="title" id="app-title" value="{{ $app->title }}">
                </div>
                <div class="form-group">
                    <label for="app-email">E-mail</label>
                    <input type="text" class="form-control" name="email" id="app-email" value="{{ $app->email }}">
                </div>
                <div class="form-group">
                    <label for="app-logo">Лого</label>
                    <input type="file" class="form-control-file" name="logo" id="app-logo">
                </div>
                <div class="form-group">
                    <label for="app-phone1">Телефон №1</label>
                    <input type="text" class="form-control" name="phone1" id="app-phone1" value="{{ $app->phone1 }}">
                </div>
                <div class="form-group">
                    <label for="app-phone2">Телефон №2</label>
                    <input type="text" class="form-control" name="phone2" id="app-phone2" value="{{ $app->phone2 }}">
                </div>
                <div class="form-group">
                    <label for="app-phone3">Телефон №3</label>
                    <input type="text" class="form-control" name="phone3" id="app-phone3" value="{{ $app->phone3 }}">
                </div>
                <div class="form-group">
                    <label for="app-phone4">Телефон №4</label>
                    <input type="text" class="form-control" name="phone4" id="app-phone4" value="{{ $app->phone4 }}">
                </div>
                <div class="form-group">
                    <label for="app-facebook">Facebook</label>
                    <input type="text" class="form-control" name="facebook" id="app-facebook" value="{{ $app->facebook }}">
                </div>
                <div class="form-group">
                    <label for="app-instagram">Instagram</label>
                    <input type="text" class="form-control" name="instagram" id="app-instagram" value="{{ $app->instagram }}">
                </div>
                <div class="form-group">
                    <label for="app-vkontakte">VK</label>
                    <input type="text" class="form-control" name="vkontakte" id="app-vkontakte" value="{{ $app->vkontakte }}">
                </div>
                <div class="form-group">
                    <label for="app-description">Описание</label>
                    <textarea class="form-control" name="description" id="app-description" cols="30" rows="10">{{ $app->description }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success form-control">Изменить</button>
                </div>
            </form>

        </div>
    </div>
    
@endsection

@section('javascripts')



@endsection