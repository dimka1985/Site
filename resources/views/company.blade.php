@extends('layouts.app')

@section('title')
    @parent | {{ __('Company page') }} {{ config('app.name') }}
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

        <div class="container">
            <br>
            <h1 class="mt-5 text-center">{{ __('About us') }}</h1>
            <hr>

            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h3 class="text-center mt-0">{{ config('app.name') }}</h3>
                    <hr class="my-4">
                    <p><strong>{{ config('app.name') }}</strong> — это команда профессионалов, влюбленных в свое дело.
                        Мы собрались вместе, чтобы создать и воплотить в жизнь Ваши самые смелые идеи.
                        Мы предлагаем своим клиентам расширить возможности рекламы товаров и услуг, максимально охватив
                        целевую аудиторию! В зависимости от поставленных целей и задач наши специалисты всегда подберут
                        оптимальные варианты размещения или создания рекламной информации, помогут оптимизировать
                        бюджеты, добившись максимально высоких показателей отдачи.</p>
                    <div class="row">
                        <div class="col-12 col-sm-6 offset-xl-1 col-xl-4">
                            <h5 class="text-center">{{ __('Catherine') }}</h5>
                            <img src="{{ asset('img/kate.jpg') }}" alt="{{ config('app.name') }}"
                                 class="img-fluid img-thumbnail rounded mb-1"></div>
                        <div class="col-12 col-sm-6 offset-xl-2 col-xl-4">
                            <h5 class="text-center">{{ __('Nikita') }}</h5>
                            <img src="{{ asset('img/nikita.jpg') }}" alt="{{ config('app.name') }}"
                                 class="img-fluid img-thumbnail rounded mb-1"></div>
                    </div>
                    <hr class="my-4">
                    <h3 class="text-center mt-0">{{ __('Our services') }}</h3>
                    <hr class="my-4">
                    <ul class="jumbotron-list pl-0">
                        <li class="text-primary">
                            <p>
                                {{ Html::link('/advertising#bx24_form_inline', __('Order now!'), ['class' => 'btn
                                btn-sm btn-primary text-uppercase']) }}
                                <i class="far fa-check-circle"></i>
                                {{ Html::linkRoute('advertising', __('We carry out complex advertising campaigns, we select the optimal variants of placing your advertisement on any media.'), null,
                                ['class' => 'card-link']) }}
                            </p>
                        </li>
                        <li class="text-primary">
                            <p>
                                {{ Html::link('/promotion#bx24_form_inline', __('Order now!'), ['class' => 'btn
                                btn-sm btn-primary text-uppercase']) }}
                                <i class="far fa-check-circle"></i>
                                {{ Html::linkRoute('promotion', __('We are developing a creative concept for promoting your brand, helping to increase the popularity and loyalty of customers.'), null, ['class' => 'card-link']) }}
                            </p>
                        </li>
                        <li class="text-primary">
                            <p>
                                {{ Html::link('/btl#bx24_form_inline', __('Order now!'), ['class' => 'btn
                                btn-sm btn-primary text-uppercase']) }}
                                <i class="far fa-check-circle"></i>
                                {{ Html::linkRoute('btl', __('We are looking for unique ideas for preparation and implementation memorable event-events in the best European traditions.'), null, ['class' => 'card-link']) }}
                            </p>
                        </li>
                        <li class="text-primary">
                            <p>
                                {{ Html::link('/events#bx24_form_inline', __('Order now!'), ['class' => 'btn
                                btn-sm btn-primary text-uppercase']) }}
                                <i class="far fa-check-circle"></i>
                                {{ Html::linkRoute('events', __('We conduct promotions and event-events in support of your brands in places of mass concentration of your target audience.'), null, ['class' => 'card-link']) }}
                            </p>
                        </li>
                        <li class="text-primary">
                            <p>
                                @if (!empty($festival))
                                    {{ Html::linkRoute('festivals.festival.participate', __('Participate!'),
                                    ['festival' => $festival], ['class' => 'btn btn-sm btn-primary text-uppercase']) }}
                                @else
                                    <button type="button" class="btn btn-sm btn-primary text-uppercase"
                                            disabled>{{ __('Wait for news!') }}
                                    </button>
                                @endif
                                <i class="far fa-check-circle"></i> {{ Html::linkRoute('festivals', __('We spend large advertising festivals'), null, ['class' => 'card-link']) }}
                            </p>
                        </li>
                    </ul>
                    <hr>
                    <h4 class="text-center">
                        <strong><a href="{{ route('events.all') }}">{{ __('History of our events') }}</a></strong> |
                        <strong><a href="{{ route('festivals.all') }}">{{ __('Our festivals') }}</a></strong>
                    </h4>
                    <hr>
                    <h5 class="text-center">{{ __('We act on the basis of the certificate of state registration') }}</h5>
                    <div class="row">
                        <div class="offset-md-4 col-md-4">
                            <img src="{{ asset('img/certificate.jpg') }}" alt="{{ config('app.name') }}"
                                 class="img-fluid img-thumbnail rounded w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.partnership')
@endsection
