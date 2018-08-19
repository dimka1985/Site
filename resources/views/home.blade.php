@extends('layouts.app')

@section('title')
    @parent | Реклама и продвижение брендов в Беларуси
@endsection

@section('styles')
    @parent

    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('keywords', 'ОК, OK, OK Event Group, OK Group, реклама, продвижение, smm, реклама и продвижение брендов в
Беларуси')

@section('description', 'OK Event Group, Реклама и продвижение брендов в Беларуси')

@section('content')
    <div id="app">
        @include('includes.sessions')

        <header class="full">
            {{--<div class="full position-absolute">
                <video playsinline
                       poster="https://scontent-frt3-1.cdninstagram.com/vp/5a8e3ac631411b349c67b357d22f4e49/5B5A47A0/t51.2885-15/e15/35616370_235228623755377_8120839775759368192_n.jpg"
                       autoplay="autoplay" loop="loop" preload="auto" muted
                       src="https://scontent-frt3-1.cdninstagram.com/vp/8188f5c06cb7a67f3df238a9131fad3d/5B5A3152/t50.2886-16/36650570_193919444623395_779771425920647168_n.mp4"></video>
            </div>--}}

            <div class="full overlay-header">
                <div class="header-text position-absolute text-center text-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h1>{{ config('app.name') }}</h1>
                                <h4 class="mb-5">{{ __('Say yes to your success!') }}</h4>
                                <p class="lead mb-4">{{__('We are engaged in advertising and promotion of brands, we help in organize events for your company and hold big festivals!') }}</p>
                                <a class="btn btn-lg btn-primary" href="{{ route('company') }}" role="button">{{
                                __('Learn more') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h2 class="text-center">{{ __('Why choose us?') }}</h2>
                    <hr class="my-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="lead">{{ __('We are a team of ambitious professionals with extensive experience and an interesting portfolio.') }}</p>
                            <ul class="jumbotron-list pl-0">
                                <li class="text-primary">
                                    <p><i class="far fa-check-circle"></i> {{ __('100% quality guarantee') }}</p>
                                </li>
                                <li class="text-primary">
                                    <p><i class="far fa-check-circle"></i> {{
                                    __('The best specialists are just for You') }}</p>
                                </li>
                                <li class="text-primary">
                                    <p>
                                        <i class="far fa-check-circle"></i> {{ __('Individual approach to each client') }}
                                    </p>
                                </li>
                                <li class="text-primary">
                                    <p>
                                        <i class="far fa-check-circle"></i> {{ __('We will develop a creative concept promoting your brand') }}
                                    </p>
                                </li>
                                <li class="text-primary">
                                    <p>
                                        <i class="far fa-check-circle"></i> {{ __('We will help in realization of your image event') }}
                                    </p>
                                </li>
                                <li class="text-primary">
                                    <p>
                                        <i class="far fa-check-circle"></i> {{ __('We organize festivals unique for our country') }}
                                    </p>
                                </li>
                                <li class="text-primary">
                                    <p><i class="far fa-check-circle"></i> {{ __('And much more') }}</p>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-6">
                            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
                                <ol class="carousel-indicators d-none d-md-flex">
                                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel" data-slide-to="1"></li>
                                    <li data-target="#carousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{ asset('img/slide1.jpg') }}" alt="Слайд">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('img/slide2.jpg') }}" alt="Слайд">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('img/slide3.jpg') }}" alt="Слайд">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <main>
            <div class="container text-center">
                <h2>{{ __('We offer the following services') }}:</h2>
                <hr class="my-4">
                <div class="row">
                    <div class="card-deck">
                        <div class="col-md-6 col-xl-3 mb-3">
                            <div class="card border-primary">
                                <h4 class="card-header bg-light text-primary"><i class="fas fa-certificate"></i></h4>
                                <div class="card-body">
                                    <h4 class="card-title">{{ __('Advertising companies') }}</h4>
                                    <hr class="my-3">
                                    <p class="card-text">{{ __('We carry out complex advertising campaigns, we select the optimal variants of placing your advertisement on any media.') }}</p>
                                </div>
                                <div class="card-footer">
                                    {{ Html::linkRoute('advertising', __('Learn more'), null, ['class' =>
                                    'card-link']) }}
                                    <hr>
                                    {{ Html::link('/advertising#bx24_form_inline', __('Order now!'), ['class' => 'btn
                                     btn-primary text-uppercase']) }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-3">
                            <div class="card border-primary">
                                <h4 class="card-header bg-light text-primary"><i class="fab fa-instagram"></i></h4>
                                <div class="card-body">
                                    <h4 class="card-title">{{ __('SMM-promotion') }}</h4>
                                    <hr class="my-3">
                                    <p class="card-text">{{ __('We are developing a creative concept for promoting your brand, helping to increase the popularity and loyalty of customers.') }}</p>
                                </div>
                                <div class="card-footer">
                                    {{ Html::linkRoute('promotion', __('Learn more'), null, ['class' =>
                                    'card-link']) }}
                                    <hr>
                                    {{ Html::link('/promotion#bx24_form_inline', __('Order now!'), ['class' => 'btn
                                    btn-primary text-uppercase']) }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-3">
                            <div class="card border-primary">
                                <h4 class="card-header bg-light text-primary"><i class="far fa-chart-bar"></i></h4>
                                <div class="card-body">
                                    <h4 class="card-title">{{ __('BTL-advertising and BTL-marketing') }}</h4>
                                    <hr class="my-3">
                                    <p class="card-text">{{ __('We conduct promotions and event-events in support of your brands in places of mass concentration of your target audience.') }}</p>
                                </div>
                                <div class="card-footer">
                                    {{ Html::linkRoute('btl', __('Learn more'), null, ['class' =>
                                    'card-link']) }}
                                    <hr>
                                    {{ Html::link('/btl#bx24_form_inline', __('Order now!'), ['class' => 'btn
                                    btn-primary text-uppercase']) }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-3">
                            <div class="card border-primary">
                                <h4 class="card-header bg-light text-primary"><i class="fas fa-users"></i></h4>
                                <div class="card-body">
                                    <h4 class="card-title">{{ __('Organization of events') }}</h4>
                                    <hr class="my-3">
                                    <p class="card-text">{{ __('We are looking for unique ideas for preparation and implementation memorable event-events in the best European traditions.') }}</p>
                                </div>
                                <div class="card-footer">
                                    {{ Html::linkRoute('events', __('Learn more'), null, ['class' =>
                                    'card-link']) }}
                                    <hr>
                                    {{ Html::link('/events#bx24_form_inline', __('Order now!'), ['class' => 'btn
                                    btn-primary text-uppercase']) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <section>
            <div class="img-galery jumbotron jumbotron-fluid">
                <div class="container text-center">
                    <h2><strong><a href="{{ route('festivals.all') }}">{{ __('Our festivals')
                    }}</a></strong></h2>
                    <hr class="my-4">
                    <div class="row">
                        @foreach($festivals as $festival)
                            <div class="col">
                                <h4><strong><a href="{{ route('festivals.festival', ['festival' => $festival])
                                }}">{{ $festival->name }}</a></strong></h4>
                                <h5>{{ $festival->time }} {{ \Carbon\Carbon::parse($festival->begin_date)
                                            ->format('d.m.Y') }}@if ($festival->begin_date != $festival->end_date)
                                        - {{ \Carbon\Carbon::parse($festival->end_date)->format('d.m.Y') }}@endif
                                </h5>
                                <h5>{{ $festival->place }} {{ $festival->address }}</h5>
                                <h6>{{ __('Cost of visit') }}: {{ $festival->price }}</h6>
                                @if ($festival->passed == false)
                                    <h5>
                                        @include('includes.festival_buttons')
                                    </h5>
                                @endif
                                <a href="{{ route('festivals.festival', ['festival' => $festival]) }}"><img
                                            src="{{ asset($festival->image) }}" class="img-fluid img-thumbnail
                                            rounded w-25"
                                            alt="{{ $festival->name }}"></a>
                                <a href="{{ route('festivals.festival.award', ['festival' => $festival]) }}"><img
                                            src="{{ asset($festival->award_image) }}"
                                            class="img-fluid img-thumbnail rounded w-25"
                                            alt="{{ $festival->award }}"></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="img-galery">
                <div class="container text-center">
                    <h2><strong><a href="{{ route('events.all') }}">{{ __('History of our events') }}</a></strong></h2>
                    <hr class="my-4">
                    @foreach($events as $e => $event)
                        @if ($e / 4 == 0)
                            <div class="row">
                                @endif
                                <div class="col-md-6 col-xl-3 mb-5">
                                    <h5><strong><a href="{{ route('events.event', ['event' => $event]) }}">{{
                                    $event->name }}</a></strong></h5>
                                    <a href="{{ route('events.event', ['event' => $event]) }}"><img
                                                src="{{ asset($event->image) }}" class="img-fluid img-thumbnail
                                                rounded" alt="{{ $event->name }}"></a>
                                </div>

                                @if (($e != 0) && ($e / 3 == 0))
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>

        <section>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h2 class="text-center"><strong><a href="{{ route('news.all') }}">{{ __('Last news')
                    }}</a></strong></h2>
                    <hr class="my-4">
                    <div class="card-group">
                        <div class="row no-gutters">
                            @foreach($news as $tiding)
                                <div class="col-lg">
                                    <div class="card">
                                        <a href="{{ route('news.tiding', ['tiding' => $tiding]) }}"><img
                                                    class="card-img-top img-fit-25" src="{{ asset($tiding->image) }}"
                                                    alt="{{ $tiding->name }}"></a>
                                        <div class="card-body">
                                            <h5 class="card-title"><strong><a
                                                            href="{{ route('news.tiding', ['tiding' => $tiding]) }}">{{ $tiding->name }}</a></strong>
                                            </h5>
                                            <hr>
                                            <p class="card-text">{!! str_limit($tiding->text, 200, '...') !!}</p>
                                            <a href="{{ route('news.tiding', ['tiding' => $tiding]) }}">{{ __('Read more') }}</a>
                                        </div>
                                        <div class="card-footer">
                                            <p class="card-text">
                                                <small class="text-muted">{{ __('Published') }} {{
                                                \Carbon\Carbon::parse($tiding->created_at)->format('d.m.Y в H:i')
                                                }}</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('includes.partnership')
@endsection
