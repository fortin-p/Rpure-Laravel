<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps=false;

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
   protected $fillable = ['name', 'description',
       'price','weight',
       'image','quantity',
        'available','categorie_id'
   ];
}
