<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $guarded = [];

    public function images() {
        return $this->hasMany('App\Image');
    }

    public function menu() {
        return $this->belongsTo('App\Menu');
    }
}
