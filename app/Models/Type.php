<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        //
    ];

    public function Category() {
        return $this->hasMany(Category::class);
    }
}
