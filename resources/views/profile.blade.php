@extends('layouts.app')

@section('title'){{ $user->username }} Profile @endsection

@section('content')
    <!--Profile cover-->
    <div class="profile-cover-wrap">
        <div class="profile-cover-inner">
            <div class="profile-cover-img">
                <!-- PROFILE-COVER -->
                <img src="{{ asset($user->profile_cover) }}"/>
            </div>
        </div>
        <div class="profile-nav">
            <div class="profile-navigation">
                <ul style="margin-left: 20%;">
                    <li>
                        <div class="n-head">
                            TWEETS
                        </div>
                        <div class="n-bottom">
                            {{ $user->tweets->count() }}
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo $user->username; ?>/following">
                            <div class="n-head">
                                <a href="<?php echo $user->username; ?>/following">FOLLOWING</a>
                            </div>
                            <div class="n-bottom">
                                <span class="count-following">{{ $user->following }}</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $user->username }}/followers">
                            <div class="n-head">
                                FOLLOWERS
                            </div>
                            <div class="n-bottom">
                                <span class="count-followers">{{ $user->followers }}</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="n-head">
                                LIKES
                            </div>
                            <div class="n-bottom">
                                0
                            </div>
                        </a>
                    </li>
                </ul>
                @if(Auth::id() !== $user->id)
                    <div class="edit-button">
                    <span>
                        <button class="f-btn follow-btn" data-follow="user_id" data-user="user_id">
                            <i class="fa fa-user-plus"></i> Follow
                        </button>
                    </span>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!---Inner wrapper-->
    <div class="in-wrapper">
        <div class="in-full-wrap">
            <div class="in-left">
                <div class="in-left-wrap">
                    <!--PROFILE INFO WRAPPER END-->
                    <div class="profile-info-wrap">
                        <div class="profile-info-inner">
                            <!-- PROFILE-IMAGE -->
                            <div class="profile-img">
                                <img src="{{ asset($user->profile_image) }}"/>
                            </div>

                            <div class="profile-name-wrap">
                                <div class="profile-name">
                                    <a href="PROFILE-LINK">{{ $user->screen_name }}</a>
                                </div>
                                <div class="profile-tname">
                                    @<span class="username">{{ $user->username }}</span>
                                </div>
                            </div>

                            <div class="profile-bio-wrap">
                                <div class="profile-bio-inner">
                                    {{ $user->bio }}
                                </div>
                            </div>

                            <div class="profile-extra-info">
                                <div class="profile-extra-inner">
                                    <ul>
                                        <li>
                                            <div class="profile-ex-location-i">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            </div>
                                            <div class="profile-ex-location">
                                                {{ $user->country }}
                                            </div>
                                        </li>

                                        <li>
                                            <div class="profile-ex-location-i">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                            </div>
                                            <div class="profile-ex-location">
                                                <a href="#">
                                                    {{ $user->website }}
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="profile-ex-location-i">
                                                <!-- <i class="fa fa-calendar-o" aria-hidden="true"></i> -->
                                            </div>
                                            <div class="profile-ex-location">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="profile-ex-location-i">
                                                <!-- <i class="fa fa-tint" aria-hidden="true"></i> -->
                                            </div>
                                            <div class="profile-ex-location">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="profile-extra-footer">
                                <div class="profile-extra-footer-head">
                                    <div class="profile-extra-info">
                                        <ul>
                                            <li>
                                                <div class="profile-ex-location-i">
                                                    <i class="fa fa-camera" aria-hidden="true"></i>
                                                </div>
                                                <div class="profile-ex-location">
                                                    <a href="#">0 Photos and videos </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="profile-extra-footer-body">
                                    <ul>
                                        <!-- <li><img src="#"/></li> -->
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <!--PROFILE INFO INNER END-->

                    </div>
                    <!--PROFILE INFO WRAPPER END-->

                </div>
                <!-- in left wrap-->

            </div>
            <!-- in left end-->

            <div class="in-center">
                <div class="in-center-wrap">
                    <!--Tweet SHOW WRAPER-->
                    <!--Tweet SHOW WRAPER END-->
                </div><!-- in left wrap-->
                <div class="popupTweet"></div>
            </div>
            <!-- in center end -->

            <div class="in-right">
                <div class="in-right-wrap">

                    <!--==WHO TO FOLLOW==-->
                    <!--who to follow-->
                    <!--==WHO TO FOLLOW==-->

                    <!--==TRENDS==-->
                    <!--Trends-->
                    <!--==TRENDS==-->

                </div><!-- in right wrap-->
            </div>
            <!-- in right end -->

        </div>
        <!--in full wrap end-->
    </div>
    <!-- in wrappper ends-->
@endsection