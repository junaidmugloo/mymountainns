<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageDays extends Model
{
    use HasFactory;
    protected $table = 'package_days';
    protected $fillable = [
        'package_id',
        'day_index',
        'days', 
        'title',

    ];
}
