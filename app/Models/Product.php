<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Category;
use App\Models\OrderItem;
use App\Models\Subcategory;
use App\Models\AttributeValue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class,'product_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class,'product_id');
    }

    public function subCategories(){
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }
    public function attributeValues(){
        return $this->hasMany(AttributeValue::class, 'product_id');
    }
}
