<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['activityCompany'];

    public function soldiers(){
        return $this->hasMany('App\Models\Soldier');
    }
    public function quarters(){
        return $this->belongsToMany('App\Models\Quarter');
    }
}
