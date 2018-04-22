<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function slider() {
        return $this->belongsTo('App\Slider');
    }
}
