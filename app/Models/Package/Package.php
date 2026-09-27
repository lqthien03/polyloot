<?php

namespace App\Models\Package;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'name',
        'package_type',
        'max_listings',
        'duration_days',
        'price',
        'description',
    ];

    protected $casts = [
        'package_type' => \App\Enums\PackageType::class
    ];


    public function modelPackages()
    {
        return $this->hasMany(ModelPackage::class);
    }
}
