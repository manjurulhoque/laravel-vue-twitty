<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'screen_name', 'profile_image', 'profile_cover',
        'following', 'followers', 'bio', 'country', 'website'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tweets()
    {
        return $this->hasMany(Tweet::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function followings()
    {
        $users = array();
        $followings = Follow::where('user_id', $this->id)->get();
        foreach ($followings as $following){
            $user = User::find($following->whom_follow);
            array_push($users, $user);
        }
        return $users;
    }

    public function followers()
    {
        $users = array();
        $followings = Follow::where('whom_follow', $this->id)->get();
        foreach ($followings as $following){
            $user = User::find($following->user_id);
            array_push($users, $user);
        }
        return $users;
    }
}
