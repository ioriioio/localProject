<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class MHistory extends Model
{
    //
    protected $fillable = [
        'content',
        'update_at',
        'update_user'

    ];
}
