<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $guarded = [
        'title',
        'logo',
        'phone1',
        'phone2',
        'phone3',
        'email',
        'description',
        'color',
        'facebook',
        'instagram',
        'vkontakte',
        'ok',
        ];
}
