<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class distance extends Model
{
    use HasFactory;
    protected $table = 'distances';

    // public function region(){
    //     return $this->hasMany(region::class, 'region', 'region_id');
    // }
}
