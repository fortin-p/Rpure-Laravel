<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;

    /*public function products()
    {
        return $this->hasMany(Products::class);
    }

    public function orders_products()
    {
        return $this->hasOne(orders_products::class);
    }*/
}
