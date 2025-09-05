<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    use HasFactory;
    public $table="hotel";

    protected $fillable=[
        'name',
        'stars',
        'off_season_rate',
        'single_room',
        'double_room',
        'extra_bed',
        'extra_child',
        'infant',
        'MAP',
        'CP',
        'EP',
        'address'
       

    ];
}
