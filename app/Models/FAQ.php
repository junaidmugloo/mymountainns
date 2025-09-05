<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;
    public $table="f_a_q_s";

    protected $fillable=[
        'title',
        'description'
    ];
}
