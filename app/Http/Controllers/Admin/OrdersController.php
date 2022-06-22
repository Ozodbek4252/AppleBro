<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index(){
        $orders = \App\Models\Order::orderBy('updated_at', 'desc')->get();
        return view('admin.orders.index', ['orders' => $orders]);
    }

    public function userOrder($id){
        $orders = \App\Models\Order::where('user_id', '=', $id)->orderBy('updated_at', 'desc')->get();
        return view('admin.orders.user_orders', ['orders' => $orders]);
    }

    public function singleOrder($order){
        $order = \App\Models\Order::find($order);
        return view('admin.orders.single_order', ['order' => $order]);
    }

}
