<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderProduct;

class OrderOption extends Model
{
    use HasFactory;

    public function order_product()
    {
        return $this->belongsTo(OrderProduct::class, 'order_product_id');
    }
}
