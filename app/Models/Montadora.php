<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Montadora extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    public function carros(){
        return $this->hasMany(Carro::class);
        }
        
}
