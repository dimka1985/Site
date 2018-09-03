@extends('layouts.app')

@section('title')
    @parent | {{ __('User profile page') }}
@endsection

@section('keywords')
    @parent
@endsection

@section('description')
    @parent
@endsection

@section('content')
    <div id="app" class="mb-4">
        @include('includes.sessions')

    </div>
@endsection
