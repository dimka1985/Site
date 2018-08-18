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
                                <h1 class="mb-5">{{ config('app.name') }}</h1>
                                <p class="lead mb-4">Мы занимаемся рекламой и продвижением брендов, помогаем в
                                    организации мероприятий для вашей компании и проводим крупные фестивали!</p>
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
                            <p class="lead">Мы молодой целеустремлённый коллектив, который тратит все свои силы для
                                достижения поставленных целей.</p>
                            <ul class="jumbotron-list pl-0">
                                <li class="text-primary">
                                    <p><i class="far fa-check-circle"></i> 100% гарантия качества</p>
                                </li>
                                <li class="text-primary">
                                    <p><i class="far fa-check-circle"></i> Лучшие специалисты только для Вас</p>
                                </li>
                                <li class="text-primary">
                                    <p><i class="far fa-check-circle"></i> Рассмотрим любые варианты
                                        рекламы и продвижения</p>
                                </li>
                                <li class="text-primary">
                                    <p><i class="far fa-check-circle"></i> Поможем подготовить и провести Ваше
                                        мероприятие</p>
                                </li>
                                <li class="text-primary">
                                    <p><i class="far fa-check-circle"></i> Проводим крупнейшие фестивали</p>
                                </li>
                                <li class="text-primary">
                                    <p><i class="far fa-check-circle"></i> И многое другое</p>
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
                                    <h4 class="card-title">Реклама компаний</h4>
                                    <hr class="my-3">
                                    <p class="card-text">Осуществляем разноплановую рекламу Ваших брендов среди
                                        широкой целевой аудитории.</p>
                                </div>
                                <div class="card-footer">
                                    {{ Html::linkRoute('advertising', __('Learn more'), null, ['class' =>
                                    'card-link']) }}
                                    <hr>
                                    <a href="#" class="btn btn-primary text-uppercase">{{ __('Order now!') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-3">
                            <div class="card border-primary">
                                <h4 class="card-header bg-light text-primary"><i class="fab fa-instagram"></i></h4>
                                <div class="card-body">
                                    <h4 class="card-title">SMM продвижение</h4>
                                    <hr class="my-3">
                                    <p class="card-text">Выполняем продвижение Ваших брендов в различных социальных
                                        сетях Интернета.</p>
                                </div>
                                <div class="card-footer">
                                    {{ Html::linkRoute('promotion', __('Learn more'), null, ['class' =>
                                    'card-link']) }}
                                    <hr>
                                    <a href="#" class="btn btn-primary text-uppercase">{{ __('Order now!') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-3">
                            <div class="card border-primary">
                                <h4 class="card-header bg-light text-primary"><i class="fas fa-users"></i></h4>
                                <div class="card-body">
                                    <h4 class="card-title">Организация мероприятий</h4>
                                    <hr class="my-3">
                                    <p class="card-text">Осуществляем подготовку, продвижение и проведение Ваших
                                        мероприятий.</p>
                                </div>
                                <div class="card-footer">
                                    {{ Html::linkRoute('events', __('Learn more'), null, ['class' =>
                                    'card-link']) }}
                                    <hr>
                                    <a href="#" class="btn btn-primary text-uppercase">{{ __('Order now!') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-3">
                            <div class="card border-primary">
                                <h4 class="card-header bg-light text-primary"><i class="fas fa-globe"></i></h4>
                                <div class="card-body">
                                    <h4 class="card-title">Крупные фестивали</h4>
                                    <hr class="my-3">
                                    <p class="card-text">Проводим крупные рекламные фестивали с участием
                                        разнообразных компаний.</p>
                                </div>
                                <div class="card-footer">
                                    {{ Html::linkRoute('festivals', __('Learn more'), null, ['class' =>
                                    'card-link']) }}
                                    <hr>
                                    <a href="#" class="btn btn-primary text-uppercase">{{ __('Participate!') }}</a>
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
                                <h5><strong><a href="{{ route('festivals.festival', ['festival' => $festival->url])
                                }}">{{ $festival->name }}
                                            ({{ $festival->time }} {{ \Carbon\Carbon::parse($festival->begin_date)
                                            ->format('d.m.Y') }}@if ($festival->begin_date != $festival->end_date)
                                                - {{ \Carbon\Carbon::parse($festival->end_date)->format('d.m.Y') }}@endif)
                                        </a></strong></h5>
                                <h5>{{ $festival->place }} {{ $festival->address }}</h5>
                                <h6>{{ __('Cost of visit') }}: {{ $festival->price }}</h6>
                                @if ($festival->passed == false)
                                    <h5>
                                        @include('includes.festival_buttons')
                                    </h5>
                                @endif
                                <a href="{{ route('festivals.festival', ['festival' => $festival->url]) }}"><img
                                            src="{{ asset($festival->image) }}" class="img-fluid img-thumbnail rounded"
                                            alt="{{ $festival->name }}" width="30%"></a>
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
                                    <h5><strong><a href="{{ route('events.event', ['event' => $event->url]) }}">{{
                                    $event->name }}</a></strong></h5>
                                    <a href="{{ route('events.event', ['event' => $event->url]) }}"><img
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
                                        <a href="{{ route('news.tiding', ['tiding' => $tiding->url]) }}"><img
                                                    class="card-img-top img-fit-25" src="{{ asset($tiding->image) }}"
                                                    alt="{{ $tiding->name }}"></a>
                                        <div class="card-body">
                                            <h5 class="card-title"><strong><a href="{{ route('news.tiding', ['tiding' =>
                                    $tiding->url]) }}">{{ $tiding->name }}</a></strong>
                                            </h5>
                                            <hr>
                                            <p class="card-text">{!! str_limit($tiding->text, 200, '...') !!}</p>
                                            <a href="{{ route('news.tiding', ['tiding' => $tiding->url]) }}">{{ __('Read more') }}</a>
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
