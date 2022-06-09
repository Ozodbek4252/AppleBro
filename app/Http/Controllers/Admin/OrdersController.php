<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index(){
        $orders = \App\Models\Order::all();
        return view('admin.orders.index', ['orders' => $orders]);
    }

    public function userOrder($id){
        $orders = \App\Models\Order::where('user_id', '=', $id)->get();
        return view('admin.orders.user_orders', ['orders' => $orders]);
    }

    public function singleOrder($id){
        $order = \App\Models\Order::find($id);
        return view('admin.orders.single_order', ['order' => $order]);
    }

}
