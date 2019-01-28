<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $fillable = [
        'brandID', 'brandName',
    ];
    public function mobiles()
    {
        return $this->hasMany('App\Mobile');
    }

}
