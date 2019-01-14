<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Login extends Model 
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
    function enter(){
        return $this->hasOne('App\Person');
    }
}
