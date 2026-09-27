<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    use NodeTrait;


    protected $fillable  = [
        'name',
        'cover_img',
        'description',
        'is_active',
    ];
}
