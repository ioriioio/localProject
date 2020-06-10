<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $fillable = [
        'id',
        'title',
        'screening_time',
        'make_time',
        'director_name',
        'main_actor',
        'movie_image',
        'movie_information'
    ];
}
