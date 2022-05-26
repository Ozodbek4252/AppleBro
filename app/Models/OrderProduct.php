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
    	return $this->belongsTo(Order::class);
    }
    
    public function order_options()
    {
        return $this->hasMany(OrderOption::class);
    }

}
