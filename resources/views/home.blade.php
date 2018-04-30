@extends('layouts.app')

@section('title')Home @endsection

@section('content')
    <side-bar :user="{{ Auth::user() }}" :total_tweets="{{ Auth::user()->tweets->count() }}"></side-bar>
@endsection

@section('scripts')
    <script src="{{ asset('js/retweet.js') }}"></script>
@endsection