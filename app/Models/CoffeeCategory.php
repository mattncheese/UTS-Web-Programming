<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoffeeCategory extends Model
{
    public function coffees()
    {
        return $this->hasMany(Coffee::class);
    }

    use HasFactory;
}


