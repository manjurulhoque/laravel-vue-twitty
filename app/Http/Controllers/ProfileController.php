<?php

namespace App\Http\Controllers;

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

}
