<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagesModel extends Model
{
    use HasFactory;
    public $table="packages";
    protected $fillable = [
        'category',
        'name',
        'status',
        'uploaded_by',
        'image',
        'description',
        'day',
        'night',
        'destination',
        'price',
        'discount',
        'contact',
        'start',
        'end',
        'D1',
        'D2',
        'D3',
        'tag_line',
        'include',
        'exclude',
        'terms',
        'need_to_kow',
    ];
    
           

    
}
