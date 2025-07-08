<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name', 'quantity', 'unit', 'warehouse_id', 'category_id', 'brand_id'
    ];

    public function category() { return $this->belongsTo(Category::class); }
    public function brand() { return $this->belongsTo(Brand::class); }
    public function warehouse() { return $this->belongsTo(Warehouse::class); }
}
