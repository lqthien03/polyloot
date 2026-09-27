<?php

namespace App\Models\Package;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelExtensionPackage extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'extension_package_id',
        'quantity',
        'amount',
        'started_at',
        'ended_at',
        'model_type',
        'model_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'started_at' => 'datetime',
        'ended_at' => 'datetime',
    ];

    public function extensionPackage(): BelongsTo
    {
        return $this->belongsTo(ExtensionPackage::class);
    }

    public function model(): MorphTo
    {
        return $this->morphTo();
    }
}
