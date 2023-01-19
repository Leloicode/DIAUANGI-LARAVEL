<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deliciousfood extends Model
{
    use HasFactory;
    protected $table = 'deliciousfood';
    protected $fillable = ['id','id_restaurant','id_dish'];
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class,'id_restaurant','IdRestaurant');
    }
    public function dish()
    {
        return $this->belongsTo(Dishs::class,'id_dish','IdDish');
    }
}

