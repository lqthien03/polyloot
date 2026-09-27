<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserProfile extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'campus_id',
        'major_id',
        'student_code',
        'street',
        'ward',
        'district',
        'city',
        'zip_code',
        'bio',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function campus(): BelongsTo
    {
        return $this->belongsTo(Campus::class, 'campus_id');
    }


    public function major(): BelongsTo
    {
        return $this->belongsTo(Major::class, 'major_id');
    }
}
