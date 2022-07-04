<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class HistoryController extends Controller
{
    public function index(){
        $orders = Order::where('user_id', '=', auth()->user()->id)->orderBy('updated_at', 'desc')->get();
        return view('view.history', ['orders' => $orders]);
    }
}
