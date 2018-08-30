@extends('layouts.app')

@section('title')
    @parent | {{ $festival->name }} ~ {{ $festival->award }} - {{ __('Voting page') }}
@endsection

@section('keywords')
    @parent , {{ $festival->name }} , {{ $festival->award }}
@endsection

@section('description')
    @parent
@endsection

@section('styles')
    @parent

    <style>
        header {
            background: url("{{ asset($festival->award_image) }}") no-repeat fixed top left/cover;
        }

        /* col-sm */
        @media (min-width: 576px) {

        }

        /* col-md */
        @media (min-width: 768px) {

        }

        /* col-lg */
        @media (min-width: 992px) {

        }

        /* col-xl */
        @media (min-width: 1200px) {

        }
    </style>

    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

@section('content')
    <div id="app" class="mb-4">
        @include('includes.sessions')

        <header class="full">
            <div class="overlay-header full">
                <div class="header-text position-absolute text-center text-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h1 class="mb-4">{{ $festival->name }}</h1>
                                <h2 class="mb-4">{{ __('Award') }} {{ $festival->award }} - {{ __('Voting') }}</h2>
                                <h3>{{ $festival->place }}</h3>
                                <h3>{{ $festival->address }}</h3>
                                <h3>{{ \Carbon\Carbon::parse($festival->award_date)->format('d.m.Y') }}</h3>
                                <h4>{{ $festival->award_time }}</h4>
                                <h3 class="mt-3">
                                    @include('includes.award')
                                    {!! Html::linkWithHtml('#voting', '<i class="fas fa-user-check"></i> ' .
                                    __('Vote!'), ['class' => 'btn btn-success text-uppercase mb-1']) !!}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            <main class="my-3">
                {{ Form::open(['route' => ['festivals.festival.award.vote', $festival], 'aria-label' =>
                __('Voting')]) }}

                <h2 class="text-center">{{ $festival->award }}</h2>
                <p>{{ __('Award') }} {{ $festival->award }} - это мероприятие конкурсного типа, основанное на
                    голосовании потребителей. Она определяет общественное признание лучшего товара или услуги с
                    присвоением по итогам отбора звания победителя в соответствии с утвержденными номинациями. 
                    Организация и проведение премии помогает клиентам сориентироваться в многообразии предлагаемых
                    услуг, а также стимулирует игроков рынка к совершенствованию.</p>

                <h3 class="text-center">Цели и задачи</h3>
                <p>Определение лучших представителей индустрии красоты, ведущих свою деятельность на территории
                    Республики Беларусь. Привлечение внимания потенциальных клиентов к участникам и победителям Премии.
                    Популяризация победителей и партнёров Премии.</p>
                <h4 class="text-center" id="voting">{{ __('Voting') }}</h4>
                <p>13 сентября на нашем официальном сайте okgroup.by начнётся голосование за номинантов премии
                    {{ $festival->award }}, которое продлится до 10 октября!!! Только Ваши голоса определят
                    победителей!</p>
                <p>13 октября в Усадьбе Ваньковичей (г.Минск, ул. Филимонова, 24) состоится торжественное
                    награждение по номинациям (в рамках семейного фестиваля {{ $festival->name }})😉 Станьте частью
                    масштабного фестиваля и проведите выходные в семейном кругу!</p>
                <h4 class="text-center">Как проголосовать?</h4>
                <ol>
                    @guest
                        <li><a href="#data">Заполните необходимые для голосования данные</a> или <a
                                    href="{{ route('login') }}">войдите под своей учётной записью на сайте</a> или <a
                                    href="{{ route('login') . '#socials' }}">войдите с помощью соц. сетей</a>;
                        </li>
                    @endguest
                    <li>Нажмите на название номинации;</li>
                    <li>Выберите одного участника, за которого Вы желаете отдать голос, нажав на кнопку
                        "<strong>{{ __('Choose!') }}</strong>";
                    </li>
                    <li>Повторите пункты 2 и 3, чтобы оставить свои голоса во всех желаемых номинациях;</li>
                    <li>Когда проголосуете за нужных Вам кандидатов -> в самом низу страницы нажмите кнопку
                        "<strong>{{ __('Vote') }}</strong>".
                    </li>
                </ol>
                <h5><i>Результаты голосования появятся на данной странице по завершению фестиваля (после 15
                        октября)!</i></h5>
                @auth
                    <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                    <input type="hidden" name="email"
                           value="{{ Auth::user()->email ?? Auth::user()->socialuser_email }}">
                    <input type="hidden" name="code"
                           value="{{ Auth::user()->phone ? substr(Auth::user()->phone, 3, 2) : '25' }}">
                    <input type="hidden" name="phone"
                           value="{{ Auth::user()->phone ? substr(Auth::user()->phone, 5, 7) : '0000000' }}">
                @endauth
                @guest
                    <hr>
                    <h5 class="text-center mb-3" id="data">Заполните необходимые для голосования данные:</h5>
                    <div class="form-group row">
                        {{ Form::label('name', __('Full name') . '*', ['class' => 'col-lg-4 col-form-label
                        text-lg-right']) }}

                        <div class="col-lg-6">
                            <div class="input-group">
                                {{ Form::text('name', old('name'), ['class' => 'form-control' .
                                ((count($errors) > 0) ? ($errors->has('name') ? ' is-invalid' : ' is-valid') :
                                ''), 'placeholder' => __('Enter your name'), 'minlength' => '1', 'maxlength' =>
                                '30', 'required', 'autofocus']) }}

                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        {{ Form::label('phone', __('Phone') . '* +375', ['class' => 'col-lg-4 col-form-label
                        text-lg-right']) }}

                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-3">
                                    {{ Form::text('code', old('code'), ['class' => 'form-control' .
                                    ((count($errors) > 0) ? ($errors->has('code') ? ' is-invalid' :
                                    ' is-valid') : ''), 'placeholder' => __('Code'), 'minlength' =>
                                    '2', 'maxlength' => '2', 'pattern' => '(17)|(25)|(29)|(33)|(44)', 'required']) }}

                                    @if ($errors->has('code'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('code') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="col-lg-9">
                                    <div class="input-group">
                                        {{ Form::text('phone', old('phone'), ['class' => 'form-control' .
                                        ((count($errors) > 0) ? ($errors->has('phone') ? ' is-invalid' :
                                        ' is-valid') : ''), 'placeholder' => __('Enter your phone'), 'minlength' => '7', 'maxlength' => '7', 'pattern' => '[0-9]{7}', 'required']) }}

                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>

                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        {{ Form::label('email', __('E-Mail address') . '*', ['class' => 'col-lg-4 col-form-label
                        text-lg-right']) }}

                        <div class="col-lg-6">
                            <div class="input-group">
                                {{ Form::email('email', old('email'), ['class' => 'form-control' .
                                ((count($errors) > 0) ? ($errors->has('email') ? ' is-invalid' :
                                ' is-valid') : ''), 'placeholder' => __('Enter your E-Mail address'), 'minlength' => '3', 'maxlength' => '255', 'required']) }}

                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endguest
                <hr>
                <h4 class="text-center mb-3">Номинации</h4>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headerAward1">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#award1" aria-expanded="false" aria-controls="award1">
                                    Лучший магазин женской одежды
                                </button>
                            </h5>
                        </div>

                        <div id="award1" class="collapse" aria-labelledby="headerAward1"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward2">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award2" aria-expanded="false" aria-controls="award2">
                                    Лучший магазин вечерних платьев
                                </button>
                            </h5>
                        </div>
                        <div id="award2" class="collapse" aria-labelledby="headerAward2"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward3">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award3" aria-expanded="false" aria-controls="award3">
                                    Лучший дизайнер женской одежды
                                </button>
                            </h5>
                        </div>
                        <div id="award3" class="collapse" aria-labelledby="headerAward3"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward4">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award4" aria-expanded="false" aria-controls="award4">
                                    Лучший магазин мужской одежды
                                </button>
                            </h5>
                        </div>
                        <div id="award4" class="collapse" aria-labelledby="headerAward4"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward5">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award5" aria-expanded="false" aria-controls="award5">
                                    Лучший магазин женской обуви
                                </button>
                            </h5>
                        </div>
                        <div id="award5" class="collapse" aria-labelledby="headerAward5"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward6">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award6" aria-expanded="false" aria-controls="award6">
                                    Лучший магазин мужской обуви
                                </button>
                            </h5>
                        </div>
                        <div id="award6" class="collapse" aria-labelledby="headerAward6"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward7">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award7" aria-expanded="false" aria-controls="award7">
                                    Лучший салон красоты
                                </button>
                            </h5>
                        </div>
                        <div id="award7" class="collapse" aria-labelledby="headerAward7"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward8">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award8" aria-expanded="false" aria-controls="award8">
                                    Лучший салон красоты премиум-класса
                                </button>
                            </h5>
                        </div>
                        <div id="award8" class="collapse" aria-labelledby="headerAward8"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward9">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award9" aria-expanded="false" aria-controls="award9">
                                    Лучший Barbershop
                                </button>
                            </h5>
                        </div>
                        <div id="award9" class="collapse" aria-labelledby="headerAward9"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward10">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award10" aria-expanded="false" aria-controls="award10">
                                    Лучший Spa-салон премиум-класса
                                </button>
                            </h5>
                        </div>
                        <div id="award10" class="collapse" aria-labelledby="headerAward10"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward11">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award11" aria-expanded="false" aria-controls="award11">
                                    Лучшая Beauty Studio
                                </button>
                            </h5>
                        </div>
                        <div id="award11" class="collapse" aria-labelledby="headerAward11"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward12">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award12" aria-expanded="false" aria-controls="award12">
                                    Лучшая студия перманентного макияжа
                                </button>
                            </h5>
                        </div>
                        <div id="award12" class="collapse" aria-labelledby="headerAward12"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward13">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award13" aria-expanded="false" aria-controls="award13">
                                    Лучший Brow Bar
                                </button>
                            </h5>
                        </div>
                        <div id="award13" class="collapse" aria-labelledby="headerAward13"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward14">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award14" aria-expanded="false" aria-controls="award14">
                                    Лучшая Nail Studio
                                </button>
                            </h5>
                        </div>
                        <div id="award14" class="collapse" aria-labelledby="headerAward14"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward15">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award15" aria-expanded="false" aria-controls="award15">
                                    Лучший fitness-центр
                                </button>
                            </h5>
                        </div>
                        <div id="award15" class="collapse" aria-labelledby="headerAward15"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward16">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award16" aria-expanded="false" aria-controls="award16">
                                    Лучшая fitness-студия
                                </button>
                            </h5>
                        </div>
                        <div id="award16" class="collapse" aria-labelledby="headerAward16"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward17">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award17" aria-expanded="false" aria-controls="award17">
                                    Лучший ресторан
                                </button>
                            </h5>
                        </div>
                        <div id="award17" class="collapse" aria-labelledby="headerAward17"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward18">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award18" aria-expanded="false" aria-controls="award18">
                                    Лучшее место для проведения свадеб/банкетов
                                </button>
                            </h5>
                        </div>
                        <div id="award18" class="collapse" aria-labelledby="headerAward18"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward19">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award19" aria-expanded="false" aria-controls="award19">
                                    Лучшее кафе
                                </button>
                            </h5>
                        </div>
                        <div id="award19" class="collapse" aria-labelledby="headerAward19"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward20">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award20" aria-expanded="false" aria-controls="award20">
                                    Лучшая кофейня
                                </button>
                            </h5>
                        </div>
                        <div id="award20" class="collapse" aria-labelledby="headerAward20"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward21">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award21" aria-expanded="false" aria-controls="award21">
                                    Лучшее кафе-мороженое
                                </button>
                            </h5>
                        </div>
                        <div id="award21" class="collapse" aria-labelledby="headerAward21"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward22">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award22" aria-expanded="false" aria-controls="award22">
                                    Лучший торговый центр
                                </button>
                            </h5>
                        </div>
                        <div id="award22" class="collapse" aria-labelledby="headerAward22"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward23">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award23" aria-expanded="false" aria-controls="award23">
                                    Открытие года
                                </button>
                            </h5>
                        </div>
                        <div id="award23" class="collapse" aria-labelledby="headerAward23"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward24">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award24" aria-expanded="false" aria-controls="award24">
                                    Persona Instagram
                                </button>
                            </h5>
                        </div>
                        <div id="award24" class="collapse" aria-labelledby="headerAward24"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward25">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award25" aria-expanded="false" aria-controls="award25">
                                    Лучший beauty-Instagram
                                </button>
                            </h5>
                        </div>
                        <div id="award25" class="collapse" aria-labelledby="headerAward25"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward26">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award26" aria-expanded="false" aria-controls="award26">
                                    Лучший стилист по прическам
                                </button>
                            </h5>
                        </div>
                        <div id="award26" class="collapse" aria-labelledby="headerAward26"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward27">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award27" aria-expanded="false" aria-controls="award27">
                                    Лучший визажист
                                </button>
                            </h5>
                        </div>
                        <div id="award27" class="collapse" aria-labelledby="headerAward27"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward28">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award28" aria-expanded="false" aria-controls="award28">
                                    Лучший косметолог
                                </button>
                            </h5>
                        </div>
                        <div id="award28" class="collapse" aria-labelledby="headerAward28"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward29">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award29" aria-expanded="false" aria-controls="award29">
                                    Лучший fitness тренер (мужчина)
                                </button>
                            </h5>
                        </div>
                        <div id="award29" class="collapse" aria-labelledby="headerAward29"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward30">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award30" aria-expanded="false" aria-controls="award30">
                                    Лучший fitness тренер (женщина)
                                </button>
                            </h5>
                        </div>
                        <div id="award30" class="collapse" aria-labelledby="headerAward30"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward31">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award31" aria-expanded="false" aria-controls="award31">
                                    Лучшая ведущая
                                </button>
                            </h5>
                        </div>
                        <div id="award31" class="collapse" aria-labelledby="headerAward31"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward32">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award32" aria-expanded="false" aria-controls="award32">
                                    Лучший ведущий
                                </button>
                            </h5>
                        </div>
                        <div id="award32" class="collapse" aria-labelledby="headerAward32"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="card-deck">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4 col-xl mb-1">
                                            <div class="card h-100">
                                                <div class="card-header text-center"><a
                                                            href="https://vk.com/bonderovec"
                                                            target="_blank">Андрей<br>Бонд</a>
                                                </div>
                                                <div class="card-body">
                                                    <img src="{{ asset('img/festivals/awards/top_of_belarus_2018/andrei_bond.jpg') }}"
                                                         class="rounded-circle img-thumbnail w-100" alt="Андрей
                                                             Бонд">
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="bestPresenter1"
                                                               name="award_id[32]" class="custom-control-input"
                                                               style="cursor: pointer;" value="1">
                                                        <label class="custom-control-label text-primary"
                                                               for="bestPresenter1" style="cursor: pointer;">
                                                            {{ __('Choose!') }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-1">
                                            <div class="card h-100">
                                                <div class="card-header text-center"><a
                                                            href="https://www.instagram.com/artemrybakin/?hl=ru"
                                                            target="_blank">Артём<br>Рыбакин</a>
                                                </div>
                                                <div class="card-body">
                                                    <img src="{{ asset('img/festivals/awards/top_of_belarus_2018/artem_rybakin.jpg') }}"
                                                         class="rounded-circle img-thumbnail w-100"
                                                         alt="Артём Рыбакин">
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="bestPresenter2"
                                                               name="award_id[32]" class="custom-control-input"
                                                               style="cursor: pointer;" value="2">
                                                        <label class="custom-control-label text-primary"
                                                               for="bestPresenter2" style="cursor: pointer;">
                                                            {{ __('Choose!') }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-1">
                                            <div class="card h-100">
                                                <div class="card-header text-center"><a
                                                            href="https://www.instagram.com/navatsky/?hl=ru"
                                                            target="_blank">Станислав<br>Навацкий</a>
                                                </div>
                                                <div class="card-body">
                                                    <img src="{{ asset('img/festivals/awards/top_of_belarus_2018/stanislav_navatsky.jpg') }}"
                                                         class="rounded-circle img-thumbnail w-100"
                                                         alt="Станислав Навацкий">
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="bestPresenter3"
                                                               name="award_id[32]" class="custom-control-input"
                                                               style="cursor: pointer;" value="3">
                                                        <label class="custom-control-label text-primary"
                                                               for="bestPresenter3" style="cursor: pointer;">
                                                            {{ __('Choose!') }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-1">
                                            <div class="card h-100">
                                                <div class="card-header text-center"><a
                                                            href="https://vk.com/s_lapkovskiy_official"
                                                            target="_blank">Сергей<br>Лапковский</a>
                                                </div>
                                                <div class="card-body">
                                                    <img src="{{ asset('img/festivals/awards/top_of_belarus_2018/serhei_lapkovskiy.jpg') }}"
                                                         class="rounded-circle img-thumbnail w-100"
                                                         alt="Сергей Лапковский">
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="bestPresenter4"
                                                               name="award_id[32]" class="custom-control-input"
                                                               style="cursor: pointer;" value="4">
                                                        <label class="custom-control-label text-primary"
                                                               for="bestPresenter4" style="cursor: pointer;">
                                                            {{ __('Choose!') }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-1">
                                            <div class="card h-100">
                                                <div class="card-header text-center"><a
                                                            href="https://vk.com/astrovlian"
                                                            target="_blank">Артём<br>Астровлян</a>
                                                </div>
                                                <div class="card-body">
                                                    <img src="{{ asset('img/festivals/awards/top_of_belarus_2018/artem_astrovlian.jpg') }}"
                                                         class="rounded-circle img-thumbnail w-100" alt="Артём
                                                             Астровлян">
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="bestPresenter5"
                                                               name="award_id[32]" class="custom-control-input"
                                                               style="cursor: pointer;" value="5">
                                                        <label class="custom-control-label text-primary"
                                                               for="bestPresenter5" style="cursor: pointer;">
                                                            {{ __('Choose!') }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward33">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award33" aria-expanded="false" aria-controls="award33">
                                    Лучшая музыкальная группа
                                </button>
                            </h5>
                        </div>
                        <div id="award33" class="collapse" aria-labelledby="headerAward33"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward34">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award34" aria-expanded="false" aria-controls="award34">
                                    Лучшее семейное заведение
                                </button>
                            </h5>
                        </div>
                        <div id="award34" class="collapse" aria-labelledby="headerAward34"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward35">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award35" aria-expanded="false" aria-controls="award35">
                                    Лучший Candy Bar
                                </button>
                            </h5>
                        </div>
                        <div id="award35" class="collapse" aria-labelledby="headerAward35"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward36">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award36" aria-expanded="false" aria-controls="award36">
                                    Лучший семейный бизнес
                                </button>
                            </h5>
                        </div>
                        <div id="award36" class="collapse" aria-labelledby="headerAward36"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward37">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award37" aria-expanded="false" aria-controls="award37">
                                    Лучшее клиентоориентированное заведение
                                </button>
                            </h5>
                        </div>
                        <div id="award37" class="collapse" aria-labelledby="headerAward37"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward38">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award38" aria-expanded="false" aria-controls="award38">
                                    «MAMA AWARD» - Искусство
                                </button>
                            </h5>
                        </div>
                        <div id="award38" class="collapse" aria-labelledby="headerAward38"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward39">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award39" aria-expanded="false" aria-controls="award39">
                                    «MAMA AWARD» - Политика
                                </button>
                            </h5>
                        </div>
                        <div id="award39" class="collapse" aria-labelledby="headerAward39"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward40">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award40" aria-expanded="false" aria-controls="award40">
                                    «MAMA AWARD» - Бизнес
                                </button>
                            </h5>
                        </div>
                        <div id="award40" class="collapse" aria-labelledby="headerAward40"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward41">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award41" aria-expanded="false" aria-controls="award41">
                                    «MAMA AWARD» - Музыка
                                </button>
                            </h5>
                        </div>
                        <div id="award41" class="collapse" aria-labelledby="headerAward41"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward42">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award42" aria-expanded="false" aria-controls="award42">
                                    «MAMA AWARD» - Туризм и отдых
                                </button>
                            </h5>
                        </div>
                        <div id="award42" class="collapse" aria-labelledby="headerAward42"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward43">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award43" aria-expanded="false" aria-controls="award43">
                                    «MAMA AWARD» - Медицина
                                </button>
                            </h5>
                        </div>
                        <div id="award43" class="collapse" aria-labelledby="headerAward43"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward45">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award45" aria-expanded="false" aria-controls="award45">
                                    «MAMA AWARD» - Благотворительность
                                </button>
                            </h5>
                        </div>
                        <div id="award45" class="collapse" aria-labelledby="headerAward45"
                             data-parent="#accordionExample">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headerAward46">
                            <h5 class="mb-0 text-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#award46" aria-expanded="false" aria-controls="award46">
                                    Самая стильная семейная пара
                                </button>
                            </h5>
                        </div>
                        <div id="award46" class="collapse" aria-labelledby="headerAward46"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="card-deck">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4 col-xl mb-1">
                                            <div class="card h-100">
                                                <div class="card-header text-center"><a
                                                            href="https://vk.com/id64447089"
                                                            target="_blank">Инна<br>Мухина</a>
                                                    <hr class="my-1">
                                                    <a href="https://vk.com/id151435172"
                                                       target="_blank">Дмитрий<br>Мухин</a>
                                                </div>
                                                <div class="card-body">
                                                    <img src="{{ asset
                                                        ('img/festivals/awards/top_of_belarus_2018/family_muhiny.jpg') }}"
                                                         class="rounded-circle img-thumbnail w-100" alt="Андрей
                                                             Бонд">
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="mostStylishCouple1"
                                                               name="award_id[46]" class="custom-control-input"
                                                               style="cursor: pointer;" value="1">
                                                        <label class="custom-control-label text-primary"
                                                               for="mostStylishCouple1" style="cursor: pointer;">
                                                            {{ __('Choose!') }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-1">
                                            <div class="card h-100">
                                                <div class="card-header text-center"><a
                                                            href="https://vk.com/mankovskaya_natasha"
                                                            target="_blank">Наташа<br>Маньковская</a>
                                                    <hr class="my-1">
                                                    <a href="https://vk.com/id6039872"
                                                       target="_blank">Клим<br>Маньковский</a>
                                                </div>
                                                <div class="card-body">
                                                    <img src="{{ asset
                                                        ('img/festivals/awards/top_of_belarus_2018/family_mankovskie.jpg') }}"
                                                         class="rounded-circle img-thumbnail w-100"
                                                         alt="Артём Рыбакин">
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="mostStylishCouple2"
                                                               name="award_id[46]" class="custom-control-input"
                                                               style="cursor: pointer;" value="2">
                                                        <label class="custom-control-label text-primary"
                                                               for="mostStylishCouple2" style="cursor: pointer;">
                                                            {{ __('Choose!') }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-1">
                                            <div class="card h-100">
                                                <div class="card-header text-center"><a
                                                            href="https://vk.com/yanazolotaja"
                                                            target="_blank">Яна<br>Залеская</a>
                                                    <hr class="my-1">
                                                    <a href="https://vk.com/id142470022"
                                                       target="_blank">Алексей<br>Залеский
                                                    </a>
                                                </div>
                                                <div class="card-body">
                                                    <img src="{{ asset
                                                        ('img/festivals/awards/top_of_belarus_2018/family_zaliskie.jpg') }}"
                                                         class="rounded-circle img-thumbnail w-100"
                                                         alt="Станислав Навацкий">
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="mostStylishCouple3"
                                                               name="award_id[46]" class="custom-control-input"
                                                               style="cursor: pointer;" value="3">
                                                        <label class="custom-control-label text-primary"
                                                               for="mostStylishCouple3" style="cursor: pointer;">
                                                            {{ __('Choose!') }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-1">
                                            <div class="card h-100">
                                                <div class="card-header text-center"><a
                                                            href="https://www.instagram.com/svetlgleb/"
                                                            target="_blank">Светлана<br>Глеб</a>
                                                    <hr class="my-1">
                                                    <a href="https://vk.com/id40028587"
                                                       target="_blank">Александр<br>Глеб</a>
                                                </div>
                                                <div class="card-body">
                                                    <img src="{{ asset
                                                        ('img/festivals/awards/top_of_belarus_2018/family_gleb.jpg') }}"
                                                         class="rounded-circle img-thumbnail w-100"
                                                         alt="Сергей Лапковский">
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="mostStylishCouple4"
                                                               name="award_id[46]" class="custom-control-input"
                                                               style="cursor: pointer;" value="4">
                                                        <label class="custom-control-label text-primary"
                                                               for="mostStylishCouple4" style="cursor: pointer;">
                                                            {{ __('Choose!') }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-xl mb-1">
                                            <div class="card h-100">
                                                <div class="card-header text-center"><a
                                                            href="https://vk.com/vikkyvab"
                                                            target="_blank">Виктория<br>Лапковская</a>
                                                    <hr class="my-1">
                                                    <a href="https://vk.com/s_lapkovskiy_official"
                                                       target="_blank">Сергей<br>Лапковский</a>
                                                </div>
                                                <div class="card-body">
                                                    <img src="{{ asset
                                                        ('img/festivals/awards/top_of_belarus_2018/family_lapkovskie.jpg') }}"
                                                         class="rounded-circle img-thumbnail w-100" alt="Артём
                                                             Астровлян">
                                                </div>
                                                <div class="card-footer text-center">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="mostStylishCouple5"
                                                               name="award_id[46]" class="custom-control-input"
                                                               style="cursor: pointer;" value="5">
                                                        <label class="custom-control-label text-primary"
                                                               for="mostStylishCouple5" style="cursor: pointer;">
                                                            {{ __('Choose!') }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="offset-1 offset-sm-3 offset-md-4 offset-lg-5 offset-xl-5">
                        <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.recaptcha_key') }}"></div>

                        @if ($errors->has('g-recaptcha-response'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="text-center">{{ Form::submit(__('Vote'), ['class' => 'btn btn-primary mt-3']) }}</div>

                {{ Form::close() }}
            </main>
        </div>
    </div>
@endsection
