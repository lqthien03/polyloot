<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;


    protected $fillable =  [
        'price',
        'category_id',
        'is_free',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    
}
