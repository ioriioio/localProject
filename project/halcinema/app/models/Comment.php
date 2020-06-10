<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
      'id',
      'user_id',
      'board_id',
      'comment',
      'report',
      'created_at',
    ];
}
