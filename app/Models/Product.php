<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        //
    ];

    public function Category() {
        return $this->belongsTo(Category::class);
    }
}
