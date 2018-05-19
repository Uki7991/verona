<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    protected $guarded = [];

    public function texts() {
        return $this->hasMany('App\Text');
    }

    public function menu() {
        return $this->belongsTo('App\Menu');
    }
}
