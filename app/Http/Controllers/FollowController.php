<?php

namespace App\Http\Controllers;

use App\Follow;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function checkFollow($whom)
    {
        $result = (bool)Follow::where('user_id', Auth::id())
            ->where('whom_follow', $whom)->first();

        return response()->json($result, 201);
    }

    public function follow($whom)
    {
        $follow = new Follow;
        $follow->user_id = Auth::id();
        $follow->whom_follow = $whom;
        $follow->save();

        $user = User::find(Auth::id());
        $user->following = $user->following + 1;
        $user->save();

        $user = User::find($whom);
        $user->followers = $user->followers + 1;
        $user->save();

        return response()->json(['message' => 'following'], 201);
    }


    public function unfollow($whom)
    {
        $follow = Follow::where('user_id', Auth::id())->where('whom_follow', $whom)->first();
        $follow->delete();

        $user = User::find(Auth::id());
        $user->following = $user->following - 1;
        $user->save();

        $user = User::find($whom);
        $user->followers = $user->followers - 1;
        $user->save();

        return response()->json(['message' => 'unfollowing'], 201);
    }
}
