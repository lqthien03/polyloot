<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentMethod extends Model
{
    use HasFactory;
    use SoftDeletes;



    protected $fillable = [
        'type',
        'name',
        'description',
        'is_active',
    ];

    protected $casts = [
        'type' => \App\Enums\PaymentMethodType::class
    ];


    public function accounts(): HasMany
    {
        return $this->hasMany(PaymentAccount::class, 'payment_method_id');
    }
}
