<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Tweet extends Model
{
    protected $fillable = [
        'tweet',
        'user_id',
        'image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->diffForHumans();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function likers()
    {
        return $this->hasMany(User::class);
    }

    public function liked()
    {
        return (bool)$this::where('user_id', Auth::id())->where('id', $this->id)->first();
    }
}
