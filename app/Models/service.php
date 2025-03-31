<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    public function soldiers(){
        return $this->belongsToMany('App\Models\Soldier');
    }
}
