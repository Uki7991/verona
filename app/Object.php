<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Object extends Model
{
    public function menus() {
        return $this->hasMany('App\Menu');
    }
}
