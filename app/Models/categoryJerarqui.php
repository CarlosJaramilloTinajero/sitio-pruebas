<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryJerarqui extends Model
{
    use HasFactory;

    public function getChilds()
    {
        return $this->hasMany($this, 'relation_id', 'id');
    }

    public function getParent()
    {
        return $this->belongsTo($this, 'relation_id', 'id');
    }
}
