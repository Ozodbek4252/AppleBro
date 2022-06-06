<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\ProductPhoto;
use App\Models\ProductOption;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function product_photos()
    {
        return $this->hasMany(ProductPhoto::class);
    }

    public function product_options()
    {
        return $this->hasMany(ProductOption::class);
    }
}
