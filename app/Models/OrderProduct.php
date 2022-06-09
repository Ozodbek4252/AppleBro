<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\OrderOption;

class OrderProduct extends Model
{
    use HasFactory;

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
    
    public function order_options()
    {
        return $this->hasMany(OrderOption::class);
    }

    public function order_product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

}
