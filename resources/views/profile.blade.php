@extends('layouts.app')

@section('title')
    @parent | {{ __('User profile page') }}
@endsection

@section('content')
    <div id="app">
        @include('includes.sessions')

    </div>
@endsection
