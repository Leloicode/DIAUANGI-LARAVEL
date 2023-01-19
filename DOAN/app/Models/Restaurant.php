<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $table = 'restaurant';
    protected $fillable = ['IdRestaurant','NameRestaurant','Address','Phone','Image','Id_city','Oustand'];
    public function deliciousfood() 
    {   
        return $this->hasMany(Deliciousfood::class ,'id_restaurant','IdRestaurant');
    }
    
}
