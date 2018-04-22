<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    public function object() {
        return $this->belongsTo('App\Object');
    }
    public function sliders() {
        return $this->hasMany('App\Slider');
    }
    public function benefits() {
        return $this->hasMany('App\Benefit');
    }
}
