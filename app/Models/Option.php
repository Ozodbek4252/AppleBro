<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductOption;

class Option extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function product_options()
    {
        return $this->hasMany(ProductOption::class);
    }
}
