<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class price extends Model
{
    use HasFactory;
    protected $table = 'prices';

    // public function regions(){
    //     return $this->hasMany(region::class, 'region', 'region_id');
    // }
}
