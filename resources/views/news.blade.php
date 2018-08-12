@extends('layouts.app')

@section('title')
    {{ $event->name }}
@endsection

@section('content')
    {{ $event->text }}
@endsection
