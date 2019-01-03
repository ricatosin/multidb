<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Category extends Authenticatable
{
    protected $connection = 'mysql2';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

}
