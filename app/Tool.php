<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    //
    protected $guarded = ['id', 'provider'];

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
