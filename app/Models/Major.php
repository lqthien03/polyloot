<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;

class Major extends Model
{
    use HasFactory;
    use SoftDeletes;
    use NodeTrait;


    protected $fillable = [
        'name',
        'slug',
        'description'
    ];


    public function parent(): BelongsTo
    {
        return $this->belongsTo(Major::class, 'parent_id');
    }


    public function users(): HasManyThrough
    {
        return $this->HasManyThrough(User::class, UserProfile::class, 'id', 'id', 'user_id');
    }
}
