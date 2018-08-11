@extends('layouts.app')

@section('title', 'OK Event Group | Реклама и продвижение брендов в Беларуси')

@section('keywords', 'ОК, OK, OK Event Group,  OK Group, реклама, продвижение, smm, реклама и продвижение брендов в
Беларуси')

@section('description', 'OK Event Group, Реклама и продвижение брендов в Беларуси')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
@endsection
