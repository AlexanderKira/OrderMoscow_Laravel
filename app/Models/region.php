<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class region extends Model
{
    use HasFactory;
    protected $table = 'regions';

    public function orders(){
        return $this->hasMany(Order::class, 'region', 'region_id');
    }

    // public function distences(){
    //     return $this->hasMany(distance::class, 'region_id', 'region');
    // }

}
