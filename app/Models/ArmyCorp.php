<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArmyCorp extends Model
{
    use HasFactory;

    protected $fillable = ['denomination'];

    public function soldiers (){
        return $this->hasMany('App\Models\Soldier');
    }


}
