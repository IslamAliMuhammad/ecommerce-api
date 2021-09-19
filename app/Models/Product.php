<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\ProductDetail;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'gender_id',
        'description',
        'price',
        'photo_path',
    ];

    public function orders(){
        return $this->hasMay(Order::class);
    }
    
    public function productDetails(){
        return $this->hasMany(ProductDetail::class, 'product_id');
    }
}
