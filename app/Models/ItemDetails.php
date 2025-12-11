<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ItemDetails extends Model
{
    /** @use HasFactory<\Database\Factories\ItemDetailsFactory> */
    use HasFactory;

    protected $fillable = [
        'weight',
        'length',
        'width',
        'height',
        'manufacturer',
        'item_id'
    ];

    public function item(): BelongsTo
    {
        return $this->belongsTo(Items::class);
    }
}
