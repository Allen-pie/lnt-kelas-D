<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ItemCategories extends Model
{
    /** @use HasFactory<\Database\Factories\ItemCategoriesFactory> */
    use HasFactory;

    protected $fillable = [
        'category'
    ];

    public function items(): HasMany
    {
        // defaultnya anggap ada kolom item_categories_id 
        return $this->hasMany(Items::class, 'category_id');
    }
}
