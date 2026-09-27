<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Shop extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;
    use InteractsWithMedia;

    protected $fillable  = [
        'user_id',
        'slug',
        'name',
        'phone',
        'cover',
        'description',
        'street',
        'ward',
        'district',
        'city',
        'zip_code',
        'status',
    ];


    protected $attributes =  [
        'status' => \App\Enums\AccountStatus::PENDING,
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => \App\Enums\AccountStatus::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function modelPackages(): MorphMany
    {
        return $this->morphMany(ModelPackage::class, 'model');
    }
}
