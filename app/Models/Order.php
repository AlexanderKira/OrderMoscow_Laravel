<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;
    //определяет таблицу
    protected $table = 'orders';
    //снимает защиту 'по умолчанию' на добавление данных 
    protected $guarded = false;

    public function region(){
        return $this->hasMany(region::class, 'region_id', 'region');
    }
    
    //снимает защиту на каждый атрибут
    //protected $fillable = ['']
    

}
