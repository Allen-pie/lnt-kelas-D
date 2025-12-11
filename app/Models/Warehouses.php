<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Warehouses extends Model
{
    /** @use HasFactory<\Database\Factories\WarehousesFactory> */
    use HasFactory;

    protected $fillable = [
        'name', 'location'
    ];

    public function items() : BelongsToMany{
        return $this->belongsToMany(Items::class, 'warehouse_item', 'warehouse_id', 'item_id')->withPivot(['quantity'])->withTimestamps();
    }
}
