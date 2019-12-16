<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'unid',
        'name',
        'price',
        'location',
        'bedroom',
        'toilet',
        'type',
        'info',
        'active',
    ];

    public function pics(){
        return $this->hasMany(Pic::class, 'prop_key', 'unid');
    }

    public function pictures(){
        $pics = Pic::where('prop_key', $this->unid)->get();
        return $pics->count();
    }

    public function located(){
        return $this->hasOne(Location::class, 'unid', 'location');
    }

    public function single_pic(){
        return Pic::where('prop_key', $this->unid)->first()->url;
    }
}
