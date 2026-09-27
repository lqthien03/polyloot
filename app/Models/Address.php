<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'addressable_type',
        'addressable_id',
        'country',
        'street',
        'ward',
        'district',
        'city',
        'zip_code',
    ];


    public function user() : MorphTo
    {
        return $this->morphTo(User::class, 'addressable');
    }

    public function shop() : MorphTo
    {
        return $this->morphTo(Shop::class, 'addressable');
    }

}
