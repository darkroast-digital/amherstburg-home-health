<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Type;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        //
    ];

    public function Product() {
        return $this->hasMany(Product::class);
    }

    public function Type() {
        return $this->belongsTo(Type::class);
    }
}
