@extends('layouts.app')

@section('title') Account Settings @endsection

@section('content')

    <div class="container-wrap" style="margin-top: 0">

        <div class="lefter">
            <div class="inner-lefter">

                <div class="acc-info-wrap">
                    <div class="acc-info-bg">
                        <!-- PROFILE-COVER -->
                        <img src="{{ asset($user->profile_cover) }}"/>
                    </div>
                    <div class="acc-info-img">
                        <!-- PROFILE-IMAGE -->
                        <img src="{{ asset($user->profile_image) }}"/>
                    </div>
                    <div class="acc-info-name">
                        <h3>{{ $user->screen_name }}</h3>
                        <span>
                            <a href="PROFILE-LINK">@ {{ $user->username  }}</a>
                        </span>
                    </div>
                </div><!--Acc info wrap end-->

                <div class="option-box">
                    <ul>
                        <li>
                            <a href="/settings/account" class="{!! request()->is('settings/account') ? "bold": "" !!}">
                                <div>
                                    Account
                                    <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/settings/password" class="{!! request()->is('settings/password') ? "bold": "" !!}">
                                <div>
                                    Password
                                    <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @if(request()->is('settings/account'))
            <account-setting :user="{{ $user }}"></account-setting>
        @elseif(request()->is('settings/password'))
            <account-password :user="{{ $user }}"></account-password>
        @endif

    </div>

@endsection