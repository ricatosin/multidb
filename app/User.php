<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $connection = 'mysql';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'telefone', 'password'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
}
