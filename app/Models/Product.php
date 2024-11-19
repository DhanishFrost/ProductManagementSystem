<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
    ];

    public function getImageUrlAttribute() {
        return $this->image ? asset('storage/' .$this->image) : asset('images/default-product.png');
    }
}
