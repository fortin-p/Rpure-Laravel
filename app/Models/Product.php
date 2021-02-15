<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $fillable = ['name','description','price','weight','available','image','category_id','quantity'];

    public function categorie()
    {
        return $this->belongsTo(Category::class);
    }
}
