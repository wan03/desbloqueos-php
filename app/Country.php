<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'countryID', 'countryName',
    ];
    // Get networks with the contries.
    public function networks()
    {
        return $this->belongsToMany('App\Network');
    }
}
