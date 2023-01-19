<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dishs extends Model
{
    use HasFactory;
    protected $table = 'dish';
    protected $fillable = ['IdDish','NameDish','id_post','Image','Description','Outstand'];
    public function deliciousfood() 
    {   
        return $this->hasMany(Deliciousfood::class ,'id_dish','IdDish');
    }
}
