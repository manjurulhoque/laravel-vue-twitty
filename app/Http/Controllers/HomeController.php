<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function profile($username)
    {
        $user = User::where('username', $username)->first();

        return view('profile', compact('user'));
    }
}
