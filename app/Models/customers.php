<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{

    public $timestamps = false;

    use HasFactory;

    public function orders()
    {
        return $this->hasMany(orders::class);
    }
}
