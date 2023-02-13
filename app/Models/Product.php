<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->BelongsTo(Categories::class, 'category_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(subcategories::class, 'subcategory_id');
    }

    public function productSuppliers()
    {
        return $this->hasMany(ProductSupplier::class, 'product_id');
    }

    public function minPrice()
    {
        $productSuppliers = [];
        foreach ($this->productSuppliers()->get() as $productSupplier) {
            switch ($productSupplier->currency) {
                case 'USD':
                    $productSupplier->price = $productSupplier->price * 18.88;
                    break;
            }
            $productSuppliers[] = $productSupplier;
        }
        // Asi se hace Carlossssssssssssssssssssssssss
        // dd((collect($productSuppliers)->sortBy('price')->first())->toArray());
        return collect($productSuppliers)->sortBy('price')->first();
    }
}
