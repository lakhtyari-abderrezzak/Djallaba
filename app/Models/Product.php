<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    protected $fillable = [
       'categories_id', 'name', 'slug' , 'description', 'price', 'stock', 'image_url'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
