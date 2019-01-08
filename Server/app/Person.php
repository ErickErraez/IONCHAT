<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Person extends Model 
{
    use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname','gender','birthdate',
    ];

  
}
