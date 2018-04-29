<?php

namespace App\Http\Controllers;

use App\Like;
use App\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function likeTweet($id)
    {
        $tweet = Tweet::find($id);
//        $like = new Like(['tweet_id' => $tweet->id, 'user_id' => Auth::id(), 'like' => 1]);
//        $like->save();
        $like = Like::updateOrCreate(
            ['tweet_id' => $tweet->id, 'user_id' => Auth::id()],
            ['like' => 1]);
        $total_like = $tweet->likes()->where('like', 1)->count();

//        Auth::user()->likes()->associate($tweet->id);

        return response()->json(['message' => 'like', 'total' => $total_like], 201);
    }

    public function unLikeTweet($id)
    {
//        Auth::user()->likes()->detach($tweet->id);

        $tweet = Tweet::find($id);
//        $like = new Like(['tweet_id' => $tweet->id, 'user_id' => Auth::id(), 'like' => 1]);
//        $like->save();
        $like = Like::updateOrCreate(
            ['tweet_id' => $tweet->id, 'user_id' => Auth::id()],
            ['like' => 0]);

        $total_like = $tweet->likes()->where('like', 1)->count();

        return response()->json(['message' => 'like', 'total' => $total_like], 201);
    }

    public function checkLike($id)
    {
        $tweet = Tweet::find($id);
        $total_like = $tweet->likes()->where('like', 1)->count();
        $result = false;
        if (Like::where('user_id', Auth::id())
            ->where('tweet_id', $id)
            ->where('like', 1)->first()
        ) {
            $result = true;
        }

        return response()->json(['result' => $result, 'total' => $total_like], 201);
    }
}
