<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advantage extends Model
{
    protected $guarded = [];

    public function menu()
    {
        return $this->belongsTo('App\Menu');
    }
}
