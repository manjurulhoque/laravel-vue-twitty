<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Like extends Model
{
    protected $fillable = ['tweet_id', 'user_id', 'like'];

    public function liked()
    {
        return (bool)Like::where('user_id', Auth::id())
            ->where('tweet_id', $this->id)
            ->first();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
