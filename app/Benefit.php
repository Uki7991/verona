<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    protected $guarded = [];

    public function parent() {
        return $this->hasMany('App\Benefit', 'parent_id', 'id');
    }

    public function children() {
        return $this->belongsTo('App\Benefit', 'parent_id');
    }

    public function object() {
        return $this->belongsTo('App\Object');
    }
}
