<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Option;
use App\Models\Order;
use App\Models\OrderOption;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cartOrder(Request $request){
        $cart = session()->get('cart');
        $user = Auth::user();
        if($cart){

            // Order
            $order = new Order();
            $total_price = 0;
            foreach($cart as $id => $cart_product){
                $total_price += $cart_product['price'] * $cart_product['quantity'];
            }
            $order->user_id = $user->id;
            $order->name = $request->first_name;
            $order->last_name = $request->last_name;
            $order->phone = $request->phone;
            $order->total_price = $total_price;
            $order->status = 'pending';
            $order->save();

            // Order Product
            foreach($cart as $id => $cart_product){

                $order_product = new OrderProduct();
                $order_product->order_id = $order->id;
                $order_product->product_id = $id;
                $order_product->quantity = $cart_product['quantity'];
                $order_product->price = $cart_product['price'];
                $order_product->save();

                // Order Option
                foreach($cart_product['options'] as $name=>$value){
                    $order_option = new OrderOption();
                    $order_option->order_product_id = $order_product->id;
                    $order_option->option = $name;
                    $order_option->value = Option::find($value)->value;
                    $order_option->photo = $cart_product['photo'];
                    $order_option->photo_path = $cart_product['photo_path'];
                    $order_option->save();
                }
            }
        }

        session()->forget('cart');

        return redirect()->back();
    }
}
