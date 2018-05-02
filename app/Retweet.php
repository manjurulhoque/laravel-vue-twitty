<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Retweet extends Model
{
    public $fillable = ['message', 'user_id', 'tweet_id', 'image'];

    public function tweet()
    {
        return $this->belongsTo(Tweet::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
