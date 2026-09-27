<?php

namespace App\Models;

use App\Enums\ListingStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listing extends Model
{
    use HasFactory;
    use SoftDeletes;



    protected $fillable = [
        'product_id',
        'listingable_type',
        'listingable_id',
        'title',
        'description',
        'is_featured',
        'expiration_at',
        'status',
    ];


    protected $attributes = [
        'status' => ListingStatus::PENDING
    ];

    protected $casts = [
        'status' => ListingStatus::class,
        'expiration_at' => 'datetime'
    ];


    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function listingable(): MorphTo
    {
        return $this->morphTo();
    }
}
