<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function account()
    {
        $user = Auth::user();
        return view('settings.account', compact('user'));
    }

    public function accountupdate(Request $request)
    {
        $user = Auth::user();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->save();

        return response()->json($user, 201);
    }

    public function checkusername($username)
    {
        $user = User::where('username', $username)->pluck('username')->first();
        if (!$user) {
            return response()->json(['status' => 0], 201);
        }
        return response()->json($user, 201);
    }
}
