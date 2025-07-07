<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name', 'quantity', 'unit', 'warehouse_id', 'category_id', 'brand_id'
    ];
}
