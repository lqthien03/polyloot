<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'payment_account_id',
        'user_id',
        'payment_code',
        'currency',
        'amount',
        'transaction_id',
        'status',
    ];

    protected $attributes = [
        'status' => \App\Enums\PaymentStatus::PENDING
    ];

    protected $casts = [
        'status' => \App\Enums\PaymentStatus::class
    ];

    public function account(): BelongsTo
    {
        return $this->belongsTo(PaymentAccount::class, 'payment_account_id');
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
