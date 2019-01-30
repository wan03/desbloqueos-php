<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    protected $fillable = [
        'groupID','groupName',
     ];
     public function tools()
     {
         return $this->hasMany('App\Tool');
     }
}
