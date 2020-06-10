<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $fillable = [
        'name',
        'password',
        'email'
    ];
}
