@extends('layouts.app')

@section('title') Edit Your Profile @endsection

@section('content')

    <user-profile-edit
            :user="{{ $user }}"
            :tweets="{{ $user->tweets->count() }}"
            :followers="{{ $user->followers }}"
            :following="{{ $user->following }}"
            :likes="{{ $user->likes->where('like', 1)-> count() }}"
    >
    </user-profile-edit>

    <div class="in-center">
        <div class="in-center-wrap">
            <!-- HERE WILL BE TWEETS -->
            <user-tweet :tweets="{{ $user->tweets }}" :user="{{ Auth::user() }}"></user-tweet>
        </div>
        <!-- in left wrap-->
        <div class="popupTweet"></div>

    </div>
    <!-- in center end -->

    <div class="in-right">
        <div class="in-right-wrap">
            <!--==WHO TO FOLLOW==-->
            <who-to-follow></who-to-follow>
            <!--==WHO TO FOLLOW==-->

            <!--==TRENDS==-->
            <!-- HERE -->
            <!--==TRENDS==-->
        </div>
        <!-- in left wrap-->
    </div>
    <!-- in right end -->

@endsection