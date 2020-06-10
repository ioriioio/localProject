<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    protected $fillable =[
        'id',
        'screen_no',
        'start_at',
        'start_time',
        'end_time',
        'movie_id',
    ];

}
