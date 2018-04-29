<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;
use Validator;
use Auth;

class TweetController extends Controller
{
    public function index()
    {
        // lazy loading
        $tweets = Tweet::with('user')->where('user_id', Auth::id())->get();

        return response()->json($tweets, 201);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tweet' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $tweet = new Tweet;

        $tweet->tweet = $request->tweet;
        $tweet->user_id = Auth::id();

        $tweet->save();
        return response()->json($tweet, 201);
    }
}
