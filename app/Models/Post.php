<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable  = [
        'campus_id',
        'product_id',
        'postable_type',
        'postable_id',
        'title',
        'description',
        'expiration_at',
        'status',
    ];


    public function campus(): BelongsTo
    {
        return $this->belongsTo(Campus::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    
}
