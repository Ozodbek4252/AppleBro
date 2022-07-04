<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProduct;

class HistoryController extends Controller
{
    public function index(){
        $orders = Order::where('user_id', '=', auth()->user()->id)->orderBy('updated_at', 'desc')->with('order_products')->get();
        return view('view.history', [
            'orders' => $orders,
        ]);
    }
}
