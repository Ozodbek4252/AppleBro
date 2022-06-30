<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $user = auth()->user();
        return view('view.profile', ['user'=>$user])->layout('layouts.front');
    }

    public function store(Request $request){
        $user = auth()->user();
        $user->name = $request->name;
        $user->last_name = $request?->last_name;
        $user->phone = $request?->phone;
        $user->address = $request?->address;
        $user->save();
        
        return redirect()->back();
    }

}
