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
                            <a href="/settings/account" class="bold">
                                <div>
                                    Account
                                    <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/settings/password">
                                <div>
                                    Password
                                    <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div><!--LEFTER ENDS-->

        <div class="righter">
            <div class="inner-righter">
                <div class="acc">
                    <div class="acc-heading">
                        <h2>Account</h2>
                        <h3>Change your basic account settings.</h3>
                    </div>
                    <div class="acc-content">
                        <account-setting :user="{{ $user }}"></account-setting>
                    </div>
                </div>
                <div class="content-setting">
                    <div class="content-heading">

                    </div>
                    <div class="content-content">
                        <div class="content-left">

                        </div>
                        <div class="content-right">

                        </div>
                    </div>
                </div>
            </div>
        </div><!--RIGHTER ENDS-->

    </div>

@endsection