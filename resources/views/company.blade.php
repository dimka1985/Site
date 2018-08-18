@extends('layouts.app')

@section('title')
    @parent | {{ __('Company page') }}
@endsection

@section('keywords', 'ОК, OK, OK Event Group, OK Group, реклама, продвижение, smm, реклама и продвижение брендов в
Беларуси')

@section('description', 'OK Event Group, Реклама и продвижение брендов в Беларуси')

@section('content')
    <div id="app" class="mb-4">
        @include('includes.sessions')

        <div class="container">
            <br>
            <h1 class="mt-5 text-center">{{ __('About us') }}</h1>
            <hr>

            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h2 class="text-center mt-0">{{ __('Our services') }}</h2>
                    <hr class="my-4">
                    <ul class="jumbotron-list pl-0">
                        <li class="text-primary">
                            <p><a href="#" class="btn btn-sm btn-primary text-uppercase">{{ __('Order now!') }}</a>
                                <i class="far fa-check-circle"></i> {{ Html::linkRoute('advertising', 'Осуществляем
                                разноплановую рекламу Ваших брендов среди широкой целевой аудитории', null, ['class'
                                => 'card-link']) }}
                            </p>
                        </li>
                        <li class="text-primary">
                            <p><a href="#" class="btn btn-sm btn-primary text-uppercase">{{ __('Order now!') }}</a>
                                <i class="far fa-check-circle"></i> {{ Html::linkRoute('promotion', 'Выполняем
                                продвижение Ваших брендов в различных социальных сетях Интернета', null, ['class' =>
                                'card-link']) }}</p>
                        </li>
                        <li class="text-primary">
                            <p><a href="#" class="btn btn-sm btn-primary text-uppercase">{{ __('Order now!') }}</a>
                                <i class="far fa-check-circle"></i> {{ Html::linkRoute('events', 'Осуществляем подготовку, продвижение и проведение Ваших мероприятий', null, ['class' => 'card-link']) }}
                            </p>
                        </li>
                        <li class="text-primary">
                            <p><a href="#" class="btn btn-sm btn-primary text-uppercase">{{ __('Participate!') }}</a>
                                <i class="far fa-check-circle"></i> {{ Html::linkRoute('festivals', 'Проводим крупные
                                 рекламные фестивали с участием разнообразных компаний', null, ['class' => 'card-link']) }}
                            </p>
                        </li>
                    </ul>
                    <hr>
                    <h4 class="text-center">
                        <strong><a href="{{ route('events.all') }}">{{ __('History of our events') }}</a></strong> |
                        <strong><a href="{{ route('festivals.all') }}">{{ __('Our festivals') }}</a></strong>
                    </h4>
                    <hr>
                    <h5 class="text-center">Действуем на основании свидетельства о государственной регистрации от
                        01.06.2018</h5>
                    <div class="row">
                        <div class="offset-3 col-3">
                            <img src="{{ asset('img/license.jpg') }}" alt="{{ config('app.name') }}" class="img-fluid
                             img-thumbnail rounded w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.partnership')
@endsection
