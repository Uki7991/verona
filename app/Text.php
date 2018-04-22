<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    //
    public function benefit() {
        return $this->belongsTo('App\Benefit');
    }
}
