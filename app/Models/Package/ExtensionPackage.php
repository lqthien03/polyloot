<?php

namespace App\Models\Package;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExtensionPackage extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable  = [
        'package_type',
        'from_quantity',
        'to_quantity',
        'price_per_listing',
    ];


    protected $casts = [
        'package_type' => \App\Enums\PackageType::class
    ];

    public function modelExtensionPackages(): HasMany
    {
        return $this->hasMany(ModelExtensionPackage::class);
    }
}
