@extends('layouts.app')

@section('title')
    @parent | {{ $tiding->name }}
@endsection

@section('keywords', 'ОК, OK, OK Event Group, OK Group, реклама, продвижение, smm, реклама и продвижение брендов в
Беларуси')

@section('description', 'OK Event Group, Реклама и продвижение брендов в Беларуси')

@section('content')
    <div id="app" class="mb-4">
        @include('includes.sessions')

        <header class="full">
            @if (count($images) > 0)
                <div id="carousel" class="carousel slide carousel-fade position-absolute full"
                     data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($images as $i => $image)
                            <div class="carousel-item @if ($i == 0) active @endif">
                                <img class="full" src="{{ asset('img/news/' . $tiding->url . '/' . $image) }}"
                                     alt="{{ $tiding->name }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <div class="overlay-header full">
                <div class="header-text position-absolute text-center text-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h1 class="mb-4">{{ $tiding->name }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            <h1 class="my-3 text-center">{{ $tiding->heading }}</h1>
            <hr class="my-4">

            {!! $tiding->text !!}
        </div>
    </div>
@endsection
