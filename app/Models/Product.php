<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    protected $fillable = [
        'name', 'slug' , 'description', 'price', 'stock', 'image_url'
    ];

    public function Category(){
        $this->belongsTo(Category::class);
    }
}
