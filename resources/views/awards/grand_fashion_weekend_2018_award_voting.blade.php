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
                                    {!! Html::linkWithHtml('#accordionExample', '<i class="fas fa-user-check"></i> ' . __('Vote!'), ['class' => 'btn btn-success text-uppercase mb-1']) !!}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            <main class="my-3">
                <div>
                    <h2 class="text-center">{{ $festival->award }}</h2>
                    <p>{{ __('Award') }} {{ $festival->award }} - это мероприятие конкурсного типа,
                        основанное на
                        голосовании
                        Потребителей.
                        Она
                        определяет общественное
                        признание лучшего товара или
                        услуги с присвоением по итогам отбора
                        звания победителя в соответствии
                        с утвержденными номинациями. 
                        Организация и проведение премии помогает клиентам сориентироваться
                        в многообразии предлагаемых услуг,
                        а также стимулирует игроков рынка к совершенствованию.</p>

                    <h3 class="text-center">Цели и задачи</h3>
                    <p>Определение лучших представителей индустрии красоты, ведущих свою деятельность на
                        территории Республики Беларусь.
                        Привлечение внимания потенциальных клиентов к участникам и победителям Премии.
                        Популяризация победителей и партнёров Премии.</p>
                    <h4 class="text-center">{{ __('Voting') }}</h4>
                    <p>13 сентября на нашем официальном сайте okgroup.by начнётся голосование за номинантов премии
                        «Top of Belarus-2018», которое продлится до 10 октября!!! Только Ваши голоса определят
                        победителей!</p>
                    <p>13 октября в Усадьбе Ваньковичей (г.Минск, ул. Филимонова, 24) состоится торжественное
                        награждение по номинациям (в рамках семейного фестиваля Grand Fashion Weekend)😉 Станьте частью
                        масштабного фестиваля и проведите выходные в семейном кругу!</p>
                    <h4 class="text-center">Как проголосовать?</h4>
                    <h5>Для того чтобы проголосовать:</h5>
                    <ol>
                        <li>Заполните регистрационные данные;</li>
                        <li>Выберите категории, в которых Вы желаете проголосовать;</li>
                        <li>Выберите участника в каждой категории, за которого Вы желаете отдать голос, нажав на его
                            изображение;
                        </li>
                        <li>В самом низу страницы нажмите кнопку "Голосовать!".</li>
                    </ol>
                    <h4 class="text-center">Номинации</h4>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                            data-target="#award1" aria-expanded="false" aria-controls="award1">
                                        Лучший магазин женской одежды
                                    </button>
                                </h5>
                            </div>

                            <div id="award1" class="collapse" aria-labelledby="award1"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award2">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award2" aria-expanded="false" aria-controls="award2">
                                        Лучший магазин вечерних платьев
                                    </button>
                                </h5>
                            </div>
                            <div id="award2" class="collapse" aria-labelledby="award2"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award3">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award3" aria-expanded="false" aria-controls="award3">
                                        Лучший дизайнер женской одежды
                                    </button>
                                </h5>
                            </div>
                            <div id="award3" class="collapse" aria-labelledby="award3"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award4">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award4" aria-expanded="false" aria-controls="award4">
                                        Лучший магазин мужской одежды
                                    </button>
                                </h5>
                            </div>
                            <div id="award4" class="collapse" aria-labelledby="award4"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award5">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award5" aria-expanded="false" aria-controls="award5">
                                        Лучший магазин женской обуви
                                    </button>
                                </h5>
                            </div>
                            <div id="award5" class="collapse" aria-labelledby="award5"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award6">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award6" aria-expanded="false" aria-controls="award6">
                                        Лучший магазин мужской обуви
                                    </button>
                                </h5>
                            </div>
                            <div id="award6" class="collapse" aria-labelledby="award6"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award7">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award7" aria-expanded="false" aria-controls="award7">
                                        Лучший салон красоты
                                    </button>
                                </h5>
                            </div>
                            <div id="award7" class="collapse" aria-labelledby="award7"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award8">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award8" aria-expanded="false" aria-controls="award8">
                                        Лучший салон красоты премиум-класса
                                    </button>
                                </h5>
                            </div>
                            <div id="award8" class="collapse" aria-labelledby="award8"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award9">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award9" aria-expanded="false" aria-controls="award9">
                                        Лучший Barbershop
                                    </button>
                                </h5>
                            </div>
                            <div id="award9" class="collapse" aria-labelledby="award9"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award10">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award10" aria-expanded="false" aria-controls="award10">
                                        Лучший Spa-салон премиум-класса
                                    </button>
                                </h5>
                            </div>
                            <div id="award10" class="collapse" aria-labelledby="award10"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award11">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award11" aria-expanded="false" aria-controls="award11">
                                        Лучшая Beauty Studio
                                    </button>
                                </h5>
                            </div>
                            <div id="award11" class="collapse" aria-labelledby="award11"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award12">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award12" aria-expanded="false" aria-controls="award12">
                                        Лучшая студия перманентного макияжа
                                    </button>
                                </h5>
                            </div>
                            <div id="award12" class="collapse" aria-labelledby="award12"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award13">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award13" aria-expanded="false" aria-controls="award13">
                                        Лучший Brow Bar
                                    </button>
                                </h5>
                            </div>
                            <div id="award13" class="collapse" aria-labelledby="award13"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award14">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award14" aria-expanded="false" aria-controls="award14">
                                        Лучшая Nail Studio
                                    </button>
                                </h5>
                            </div>
                            <div id="award14" class="collapse" aria-labelledby="award14"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award15">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award15" aria-expanded="false" aria-controls="award15">
                                        Лучший fitness-центр
                                    </button>
                                </h5>
                            </div>
                            <div id="award15" class="collapse" aria-labelledby="award15"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award16">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award16" aria-expanded="false" aria-controls="award16">
                                        Лучшая fitness-студия
                                    </button>
                                </h5>
                            </div>
                            <div id="award16" class="collapse" aria-labelledby="award16"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award17">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award17" aria-expanded="false" aria-controls="award17">
                                        Лучший ресторан
                                    </button>
                                </h5>
                            </div>
                            <div id="award17" class="collapse" aria-labelledby="award17"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award18">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award18" aria-expanded="false" aria-controls="award18">
                                        Лучшее место для проведения свадеб/банкетов
                                    </button>
                                </h5>
                            </div>
                            <div id="award18" class="collapse" aria-labelledby="award18"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award19">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award19" aria-expanded="false" aria-controls="award19">
                                        Лучшее кафе
                                    </button>
                                </h5>
                            </div>
                            <div id="award19" class="collapse" aria-labelledby="award19"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award20">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award20" aria-expanded="false" aria-controls="award20">
                                        Лучшая кофейня
                                    </button>
                                </h5>
                            </div>
                            <div id="award20" class="collapse" aria-labelledby="award20"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award21">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award21" aria-expanded="false" aria-controls="award21">
                                        Лучшее кафе-мороженое
                                    </button>
                                </h5>
                            </div>
                            <div id="award21" class="collapse" aria-labelledby="award21"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award22">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award22" aria-expanded="false" aria-controls="award22">
                                        Лучший торговый центр
                                    </button>
                                </h5>
                            </div>
                            <div id="award22" class="collapse" aria-labelledby="award22"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award23">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award23" aria-expanded="false" aria-controls="award23">
                                        Открытие года
                                    </button>
                                </h5>
                            </div>
                            <div id="award23" class="collapse" aria-labelledby="award23"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award24">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award24" aria-expanded="false" aria-controls="award24">
                                        Persona Instagram
                                    </button>
                                </h5>
                            </div>
                            <div id="award24" class="collapse" aria-labelledby="award24"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award25">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award25" aria-expanded="false" aria-controls="award25">
                                        Лучший beauty-Instagram
                                    </button>
                                </h5>
                            </div>
                            <div id="award25" class="collapse" aria-labelledby="award25"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award26">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award26" aria-expanded="false" aria-controls="award26">
                                        Лучший стилист по прическам
                                    </button>
                                </h5>
                            </div>
                            <div id="award26" class="collapse" aria-labelledby="award26"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award27">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award27" aria-expanded="false" aria-controls="award27">
                                        Лучший визажист
                                    </button>
                                </h5>
                            </div>
                            <div id="award27" class="collapse" aria-labelledby="award27"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award28">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award28" aria-expanded="false" aria-controls="award28">
                                        Лучший косметолог
                                    </button>
                                </h5>
                            </div>
                            <div id="award28" class="collapse" aria-labelledby="award28"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award29">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award29" aria-expanded="false" aria-controls="award29">
                                        Лучший fitness тренер (мужчина)
                                    </button>
                                </h5>
                            </div>
                            <div id="award29" class="collapse" aria-labelledby="award29"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award30">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award30" aria-expanded="false" aria-controls="award30">
                                        Лучший fitness тренер (женщина)
                                    </button>
                                </h5>
                            </div>
                            <div id="award30" class="collapse" aria-labelledby="award30"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award31">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award31" aria-expanded="false" aria-controls="award31">
                                        Лучшая ведущая
                                    </button>
                                </h5>
                            </div>
                            <div id="award31" class="collapse" aria-labelledby="award31"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award32">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award32" aria-expanded="false" aria-controls="award32">
                                        Лучший ведущий
                                    </button>
                                </h5>
                            </div>
                            <div id="award32" class="collapse" aria-labelledby="award32"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="card-deck">
                                        <div class="card">
                                            <img src="{{ asset('img/festivals/awards/top_of_belarus_2018/andrei_bond.jpg') }}"
                                                 class="rounded-circle img-thumbnail" alt="Андрей Бонд">
                                            <div class="card-body">
                                                <h5 class="card-title">Андрей Бонд</h5>
                                                <p class="card-text">https://vk.com/bonderovec</p>
                                                <p class="card-text">
                                                    <small class="text-muted">Last updated 3 mins ago</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="{{ asset('img/festivals/awards/top_of_belarus_2018/artem_rybakin.jpg') }}"
                                                 class="rounded-circle img-thumbnail" alt="Артём Рыбакин">
                                            <div class="card-body">
                                                <h5 class="card-title">Артём Рыбакин</h5>
                                                <p class="card-text">https://www.instagram.com/artemrybakin/?hl=ru</p>
                                                <p class="card-text">
                                                    <small class="text-muted">Last updated 3 mins ago</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="{{ asset('img/festivals/awards/top_of_belarus_2018/stanislav_navatsky.jpg') }}"
                                                 class="rounded-circle img-thumbnail" alt="Станислав Навацкий">
                                            <div class="card-body">
                                                <h5 class="card-title">Станислав Навацкий</h5>
                                                <p class="card-text">https://www.instagram.com/navatsky/?hl=ru</p>
                                                <p class="card-text">
                                                    <small class="text-muted">Last updated 3 mins ago</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="{{ asset('img/festivals/awards/top_of_belarus_2018/serhei_lapkovskiy.jpg') }}"
                                                 class="rounded-circle img-thumbnail" alt="Сергей Лапковский">
                                            <div class="card-body">
                                                <h5 class="card-title">Сергей Лапковский</h5>
                                                <p class="card-text">https://vk.com/s_lapkovskiy_official</p>
                                                <p class="card-text">
                                                    <small class="text-muted">Last updated 3 mins ago</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <img src="{{ asset('img/festivals/awards/top_of_belarus_2018/artem_astrovlian.jpg') }}"
                                                 class="rounded-circle img-thumbnail" alt="Артём Астровлян">
                                            <div class="card-body">
                                                <h5 class="card-title">Артём Астровлян</h5>
                                                <p class="card-text">https://vk.com/astrovlian</p>
                                                <p class="card-text">
                                                    <small class="text-muted">Last updated 3 mins ago</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award33">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award33" aria-expanded="false" aria-controls="award33">
                                        Лучшая музыкальная группа
                                    </button>
                                </h5>
                            </div>
                            <div id="award33" class="collapse" aria-labelledby="award33"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award34">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award34" aria-expanded="false" aria-controls="award34">
                                        Лучшее семейное заведение
                                    </button>
                                </h5>
                            </div>
                            <div id="award34" class="collapse" aria-labelledby="award34"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award35">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award35" aria-expanded="false" aria-controls="award35">
                                        Лучший Candy Bar
                                    </button>
                                </h5>
                            </div>
                            <div id="award35" class="collapse" aria-labelledby="award35"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award36">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award36" aria-expanded="false" aria-controls="award36">
                                        Лучший семейный бизнес
                                    </button>
                                </h5>
                            </div>
                            <div id="award36" class="collapse" aria-labelledby="award36"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award37">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award37" aria-expanded="false" aria-controls="award37">
                                        Лучшее клиентоориентированное заведение
                                    </button>
                                </h5>
                            </div>
                            <div id="award37" class="collapse" aria-labelledby="award37"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award38">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award38" aria-expanded="false" aria-controls="award38">
                                        «MAMA AWARD» - Искусство
                                    </button>
                                </h5>
                            </div>
                            <div id="award38" class="collapse" aria-labelledby="award38"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award39">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award39" aria-expanded="false" aria-controls="award39">
                                        «MAMA AWARD» - Политика
                                    </button>
                                </h5>
                            </div>
                            <div id="award39" class="collapse" aria-labelledby="award39"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award40">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award40" aria-expanded="false" aria-controls="award40">
                                        «MAMA AWARD» - Бизнес
                                    </button>
                                </h5>
                            </div>
                            <div id="award40" class="collapse" aria-labelledby="award40"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award41">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award41" aria-expanded="false" aria-controls="award41">
                                        «MAMA AWARD» - Музыка
                                    </button>
                                </h5>
                            </div>
                            <div id="award41" class="collapse" aria-labelledby="award41"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award42">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award42" aria-expanded="false" aria-controls="award42">
                                        «MAMA AWARD» - Туризм и отдых
                                    </button>
                                </h5>
                            </div>
                            <div id="award42" class="collapse" aria-labelledby="award42"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award43">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award43" aria-expanded="false" aria-controls="award43">
                                        «MAMA AWARD» - Медицина
                                    </button>
                                </h5>
                            </div>
                            <div id="award43" class="collapse" aria-labelledby="award43"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="award45">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#award45" aria-expanded="false" aria-controls="award45">
                                        «MAMA AWARD» - Благотворительность
                                    </button>
                                </h5>
                            </div>
                            <div id="award45" class="collapse" aria-labelledby="award45"
                                 data-parent="#accordionExample">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
