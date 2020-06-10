<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    //
    protected $fillable = [
      'id',
      'title',
      'category',
      'post_period',
    ];
}
