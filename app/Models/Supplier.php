<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    public function productSuppliers()
    {
        return $this->hasMany(ProductSupplier::class, 'supplier_id');
    }

    public function warehouses()
    {
        return $this->hasMany(Warehouse::class, 'supplier_id');
    }
}
