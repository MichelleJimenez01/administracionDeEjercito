<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class soldier extends Model
{
    public function services(){
        return $this->belongsToMany('App\Models\Service');
    }

    public function armyCorp(){
        return $this->belongsToMany('App\Models\ArmyCorp');
    }
    public function quarter(){
        return $this->belongsToMany('App\Models\Quarter');
    }

    public function company(){
        return $this->belonsToMany('App\Models\Company');
    }
}
