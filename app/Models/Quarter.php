<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quarter extends Model
{
    use HasFactory;

    protected $fillable = ['name_quarter', 'location'];  

    public function soldiers(){
        return $this->hasMany('App\Models\Soldier');
    }

    public function companies(){
        return $this->belonsToMany('App\Models\Company');
    }


}
