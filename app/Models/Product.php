<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable =[
        'category_id',
        'name',
        'slug',
        'sku',
        'description',
        'purchase_price',
        'selling_price',
        'stock_qunatity',
        'minimum_stock',
        'unit',
        'is_active'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function images(){
        return $this->hasMany(ProductImage::class);
    }
}
