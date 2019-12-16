<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'name',
        'unid',
        'pic',
        'active',
    ];

    public function property(){
        return $this->hasMany(Property::class, 'location', 'unid');
    }

    public function picture(){

        return $this->pic;
    }
}
