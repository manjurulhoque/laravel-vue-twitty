<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function passwordUpdate(Request $request)
    {
        if (!(Hash::check($request->currentPassword, Auth::user()->password))) {
            return response()->json(['error' => 'Your current password does not match with the password you provided. Please try again.'], 200);
        }

        if (strcmp($request->currentPassword, $request->newPassword) == 0) {
            return response()->json(['error' => 'New Password cannot be same as your current password.'], 200);
        }

        if (strcmp($request->newPassword, $request->verifyPassword) != 0) {
            return response()->json(['error' => "Password doesn't match"], 200);
        }

        $user = Auth::user();
        $user->password = bcrypt($request->newPassword);
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
