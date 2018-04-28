<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $fillable = [
        'tweet',
        'user_id',
        'image'
    ];
}
