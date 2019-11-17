<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'who',
        'unid',
        'first_name',
        'last_name',
        'email',
        'email_valid',
        'phone_valid',
        'phone',
        'passport',
        'username',
        'address',
        'office',
        'active',
        'password',
        'role_id',
        'seen_last',
        'countdown_pass',
        'reset_toke',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function makeToken($val){
        $token = "";
        $codes = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codes .= "abcdefghijklmnopqrstuvwxyz";
        $codes .= "0123456789";
        $max = strlen($codes);
        for($i=0; $i < $val; $i++){
            $token.= $codes[random_int(0, $max-1)];
        }
        return $token;
    }

    public function names(){
        return $this->first_name . ' ' . $this->last_name;
    }

    public function image(){
        return is_file($this->passport)?url($this->passport):url('img/user.png');
    }
}
