<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    public function index(){
        $products = \App\Models\Product::orderBy('id', 'desc')->get();
        return view('admin.banners.index', ['products' => $products]);
    }

    public function store(Request $request){
        dd($request->all());
        $banner = new \App\Models\Banner();
        $banner->name_uz = $request->name_uz;
        $banner->name_ru = $request->name_ru;
        $banner->name_en = $request->name_en;
        $banner->product_id = $request->product;
        $banner->description_uz = $request->desc_uz;
        $banner->description_ru = $request->desc_ru;
        $banner->description_en = $request->desc_en;

        $imageName = Str::random(10).'.'.$request->image->extension();
        $request->image->move(public_path('images/slider'), $imageName);
    
        $banner->save();
        return redirect()->back()->with('success', 'Banner created successfully');
    }

}
