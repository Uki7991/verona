<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $guarded = [];

    public function object() {
        return $this->belongsTo('App\Object');
    }
}
