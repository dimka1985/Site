@extends('layouts.app')

@section('title')
    @parent | {{ __('User profile page') }}
@endsection

@section('keywords', 'ОК, OK, OK Event Group, OK Group, реклама, продвижение, smm, реклама и продвижение брендов в
Беларуси')

@section('description', 'OK Event Group, Реклама и продвижение брендов в Беларуси')

@section('content')
    <div id="app">
        @include('includes.sessions')

    </div>
@endsection
