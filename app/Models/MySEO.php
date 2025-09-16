<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MySEO extends Model
{
    use HasFactory;

    protected $table = 'myseo';

    protected $fillable = [
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_image',
    ];
}
