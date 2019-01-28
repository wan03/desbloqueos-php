<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    //
    protected $fillable = [
       'networkID','networkName','countryID',
    ];
    // Get country that own network
    public function country()
    {
        return $this->belongsToMany('App\Country');
    }
}
