<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    //
    protected $fillable = [
        'id',
        'name',
        'employee_number',
        'password',
    ];
}
