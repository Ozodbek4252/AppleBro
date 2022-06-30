<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    public function index(){
        $banners = Banner::all();
        $products = \App\Models\Product::orderBy('updated_at', 'desc')->get();
        return view('admin.banners.index', ['banners' => $banners, 'products' => $products]);
    }

    public function create(){
        $products = \App\Models\Product::orderBy('updated_at', 'desc')->get();
        return view('admin.banners.create', ['products' => $products]);
    }

    public function store(Request $request){
        $values = Arr::except($request->all(), ['data_id', '_token', 'image', 'video_link']);
        $values['type'] = 'slider';

        if($request->image){
            // if image is uploaded
            $imageName = Str::random(10).'.'.$request->image->extension();
            $request->image->move(public_path('images/slider'), $imageName);
            $values['image'] = 'images/slider/'.$imageName;
            $values['media_type'] = 'image';
        }elseif($request->video_link){
            // if video is uploaded
            $values['image'] = str_replace("watch?v=","embed/",$request->video_link);
            $values['media_type'] = 'video';
        }

        Banner::updateOrCreate(['id'=>$request->data_id], $values);

        return redirect()->back()->with('success-slider', 'Banner created successfully');
    }
    
    public function store_mid(Request $request){
        // validate image and title
        $validated = $request->validate([
            'middle_image' => 'required|mimes:jpg,jpeg,png,gif|max:12048',
        ]);
        
        $banner = new \App\Models\Banner();
        $banner->name_uz = $request->name_uz;
        $banner->name_ru = $request->name_ru;
        $banner->name_en = $request->name_en;
        $banner->product_id = $request->product_id;
        
        $imageName = Str::random(10).'.'.$request->middle_image->extension();
        $request->middle_image->move(public_path('images/slider/middle'), $imageName);
        $banner->image = 'images/slider/middle/'.$imageName;
        $banner->type = 'middle';
        $banner->media_type = 'image';
        $banner->save();
        
        return redirect()->back()->with('success-mid', 'Banner created successfully');
    }
    
    public function small_1(Request $request){
        $banner = new \App\Models\Banner();
        $banner->media_type = 'image';
        $banner->type = 'small_1';
        $banner->product_id = $request->product_id;

        $imageName = Str::random(10).'.'.$request->image->extension();
        $request->image->move(public_path('images/slider/small'), $imageName);
        $banner->image = 'images/slider/small'.$imageName;
        $banner->save();

        return redirect()->back()->with('success-small', 'Banner created successfully');
    }
    
    public function small_2(Request $request){
        $banner = new \App\Models\Banner();
        $banner->media_type = 'image';
        $banner->type = 'small_2';
        $banner->product_id = $request->product_id;

        $imageName = Str::random(10).'.'.$request->image->extension();
        $request->image->move(public_path('images/slider/small'), $imageName);
        $banner->image = 'images/slider/small'.$imageName;
        $banner->save();

        return redirect()->back()->with('success-small', 'Banner created successfully');
    }

    public function slider_edit(Banner $banner){
        $products = Product::all();
        return view('admin.banners.edit.slider-edit', ['banner'=>$banner, 'products'=>$products]);
    }

    public function slider_update(Request $request){
        $values = Arr::except($request->all(), ['data_id', '_token', 'image', 'video_link', 'old_image']);
        $values['type'] = 'slider';

        if($request->image){
            // KICQ5NahUR
            // RT02qUCIzp
            if($request->old_image){
                unlink($request->old_image);
            }
            // if image is uploaded
            $imageName = Str::random(10).'.'.$request->image->extension();
            $request->image->move(public_path('images/slider'), $imageName);
            $values['image'] = 'images/slider/'.$imageName;
            $values['media_type'] = 'image';
        }elseif($request->video_link){
            // if video is uploaded
            $values['image'] = str_replace("watch?v=","embed/",$request->video_link);
            $values['media_type'] = 'video';
        }

        Banner::updateOrCreate(['id'=>$request->data_id], $values);

        return redirect()->route('admin.banners.index')->with('success-slider-updated', 'Slider Successfully updated.');
    }

}