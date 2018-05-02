<?php

namespace App\Http\Controllers;

use App\Follow;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile($username)
    {
        if (\request()->is('users/*/following')) {
            $user = User::where('username', $username)->first();
            $followings = array();
            $followingss = Follow::where('user_id', $user->id)->get();
            foreach ($followingss as $following) {
                $u = User::find($following->whom_follow);
                array_push($followings, $u);
            }
            return view('profile', compact(['user', 'followings']));
        } elseif (\request()->is('users/*/followers')) {
            $user = User::where('username', $username)->first();
            $followers = array();
            $followings = Follow::where('whom_follow', $user->id)->get();
            foreach ($followings as $following) {
                $u = User::find($following->user_id);
                array_push($followers, $u);
            }
            return view('profile', compact(['user', 'followers']));
        }
        $user = User::where('username', $username)->first();

        return view('profile', compact('user'));
    }

    public function followings($username)
    {
        $user = User::where('username', $username)->first();
        return response()->json($user->followings(), 201);
    }

    public function edit($username)
    {
        if (Auth::user()->username == $username) {
            $user = User::where('username', $username)->first();
            return view('profiles.profile-edit', compact('user'));
        } else {
            return redirect()->back();
        }
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->website = $request->website;
        $user->bio = $request->bio;
        $user->screen_name = $request->screenName;
        $user->country = $request->country;
        $user->update();

        return response()->json($user, 201);
    }
}
