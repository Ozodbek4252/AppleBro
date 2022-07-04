<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redis;
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
    
    public function small(Request $request){
        $banner = new \App\Models\Banner();
        $banner->media_type = 'image';
        $banner->type = 'small';
        $banner->product_id = $request->product_id;

        $imageName = Str::random(10).'.'.$request->image->extension();
        $request->image->move(public_path('images/slider/small'), $imageName);
        $banner->image = 'images/slider/small/'.$imageName;
        $banner->save();

        return redirect()->back()->with('success-small', 'Banner created successfully');
    }

    // Slider 
    public function slider_edit(Banner $banner){
        $products = Product::all();
        return view('admin.banners.edit.slider-edit', ['banner'=>$banner, 'products'=>$products]);
    }

    public function slider_update(Request $request){
        $values = Arr::except($request->all(), ['data_id', '_token', 'image', 'video_link', 'old_image']);
        $values['type'] = 'slider';

        if($request->image){
            if(file_exists($request->old_image)){
                unlink($request->old_image);
            }

            // if image is uploaded
            $imageName = Str::random(10).'.'.$request->image->extension();
            $request->image->move(public_path('images/slider'), $imageName);
            $values['image'] = 'images/slider/'.$imageName;
            $values['media_type'] = 'image';
        }elseif($request->video_link){
            if(file_exists($request->old_image)){
                unlink($request->old_image);
            }

            // if video is uploaded
            $values['image'] = str_replace("watch?v=", "embed/", $request->video_link);
            $values['media_type'] = 'video';
        }

        Banner::updateOrCreate(['id'=>$request->data_id], $values);

        return redirect()->route('admin.banners.index')->with('success-slider-updated', 'Slider Successfully updated.');
    }

    public function slider_delete(Banner $banner){
        if(file_exists($banner->image)){
            unlink($banner->image);
        }
        $banner->delete();
        
        return redirect()->back()->with('success-slider-deleted', 'Slider Successfully deleted.');
    }

    // middle banner
    public function mid_edit(Banner $banner){
        $products = Product::all();
        
        return view('admin.banners.edit.mid-edit', ['banner'=>$banner, 'products'=>$products]);
    }

    public function mid_update(Request $request){
        
        $banner = Banner::find($request->data_id);

        $banner->type = 'middle';
        $banner->name_uz = $request->name_uz;
        $banner->name_ru = $request->name_ru;
        $banner->name_en = $request->name_en;
        $banner->product_id = $request->product_id;

        // check if image is uploaded
        if($request->image){

            // check if image is exists in public folder
            if(file_exists($request->old_image)){
                // if exists, delete it
                unlink($request->old_image);
            }

            // save image 
            $imageName = Str::random(10).'.'.$request->image->extension();
            $request->image->move(public_path('images/slider/middle'), $imageName);
            $banner->image = 'images/slider/middle/'.$imageName;
            $banner->media_type = 'image';
        }

        $banner->save();

        return redirect()->route('admin.banners.index')->with('success-mid-updated', 'Middle Banner Successfully updated.');
    }

    public function mid_delete(Banner $banner){
        if(file_exists($banner->image)){
            unlink($banner->image);
        }
        $banner->delete();
        
        return redirect()->back()->with('success-mid-deleted', 'Middle Banner Successfully deleted.');
    }

    // bottom small banners
    public function small_1_edit(Banner $banner){
        $products = Product::all();
        
        return view('admin.banners.edit.small-1-edit', ['banner'=>$banner, 'products'=>$products]);
    }

    public function small_1_update(Request $request){
        $banner = Banner::find($request->data_id);
        $banner->type = 'small_1';
        $banner->product_id = $request->product_id;
        
        // check if image is uploaded
        if($request->image){
            // check if image is exists in public folder
            if(file_exists($request->old_image)){
                // if exists, delete it
                unlink($request->old_image);
            }
            
            // save image 
            $imageName = Str::random(10).'.'.$request->image->extension();
            $request->image->move(public_path('images/slider/small'), $imageName);
            $banner->image = 'images/slider/small/'.$imageName;
            $banner->media_type = 'image';
        }
        
        $banner->save();
        
        return redirect()->route('admin.banners.index')->with('success-small-1-updated', 'Small Banner 1 Successfully updated.');
    }

    public function small_1_delete(Banner $banner){
        if(file_exists($banner->image)){
            unlink($banner->image);
        }
        $banner->delete();
        
        return redirect()->back()->with('success-small-1-deleted', 'Small Banner 1 Successfully deleted.');
    }

    // bottom small banners
    public function small_2_edit(Banner $banner){
        $products = Product::all();
        
        return view('admin.banners.edit.small-2-edit', ['banner'=>$banner, 'products'=>$products]);
    }

    public function small_2_update(Request $request){
        $banner = Banner::find($request->data_id);
        $banner->type = 'small_2';
        $banner->product_id = $request->product_id;
        
        // check if image is uploaded
        if($request->image){
            // check if image is exists in public folder
            if(file_exists($request->old_image)){
                // if exists, delete it
                unlink($request->old_image);
            }
            
            // save image 
            $imageName = Str::random(10).'.'.$request->image->extension();
            $request->image->move(public_path('images/slider/small'), $imageName);
            $banner->image = 'images/slider/small/'.$imageName;
            $banner->media_type = 'image';
        }
        
        $banner->save();
        
        return redirect()->route('admin.banners.index')->with('success-small-2-updated', 'Small Banner 2 Successfully updated.');
    }

    public function small_2_delete(Banner $banner){
        if(file_exists($banner->image)){
            unlink($banner->image);
        }
        $banner->delete();
        
        return redirect()->back()->with('success-small-2-deleted', 'Small Banner 2 Successfully deleted.');
    }

}