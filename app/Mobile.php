<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    //
    protected $fillable = [
        'mobileID','mobileName', 'mobilePhoto',
    ];

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
}
