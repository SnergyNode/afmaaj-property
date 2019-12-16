<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable= [
        'unid',
        'image',
        'name',
        'location',
        'link',
        'active',
        'date',
    ];
}
