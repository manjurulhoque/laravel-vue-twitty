@extends('layouts.app')

@section('title')Home @endsection

@section('content')
    <side-bar :user="{{ Auth::user() }}"></side-bar>
@endsection
