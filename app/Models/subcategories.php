<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcategories extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Categories::class,  'category_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'subcategory_id');
    }
}
