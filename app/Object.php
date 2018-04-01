<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Object extends Model
{
    public function benefits() {
        return $this->hasMany('App\Benefit');
    }

    public function plans() {
        return $this->hasMany('App\Plan');
    }

    public function images() {
        return $this->hasMany('App\Image');
    }
}
