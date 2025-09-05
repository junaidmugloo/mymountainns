<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopSlider extends Model
{
   
    use HasFactory;

    public $table="topslider";
    protected $fillable = [
        'heading',	
        'offer_line', 
        'price	discount',
        'image',	
        'description',
        'offer_line_color',
        'heading_color',
        'tag_line',
    ];

    
}
