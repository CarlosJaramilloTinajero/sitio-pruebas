<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

    public function productSuppliers()
    {
        return $this->belongsToMany(ProductSupplier::class, 'inventories', 'warehouse_id', 'product_supplier_id')->withPivot('stock');
    }
}
