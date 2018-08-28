@extends('layouts.app')

@section('title')
    @parent | {{ $festival->name }} ~ {{ $festival->award }}
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

        section {
            margin-bottom: 2px;
        }

        .header-text {
            font-size: .7rem;
        }

        tr, th, td {
            font-size: .8rem;
        }

        /* col-sm */
        @media (min-width: 576px) {
            .header-text {
                font-size: .9rem;
            }
        }

        /* col-md */
        @media (min-width: 768px) {
            .header-text {
                font-size: 1rem;
            }

            tr, th, td {
                font-size: .9rem;
            }
        }

        /* col-lg */
        @media (min-width: 992px) {
            tr, th, td {
                font-size: 1rem;
            }
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
                                <h2 class="mb-4">{{ __('Award') }} {{ $festival->award }}</h2>
                                <h3>{{ $festival->place }}</h3>
                                <h3>{{ $festival->address }}</h3>
                                <h3>{{ \Carbon\Carbon::parse($festival->award_date)->format('d.m.Y') }}</h3>
                                <h4>{{ $festival->award_time }}</h4>
                                <h3 class="mt-3">
                                    @include('includes.award')
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
                    <h4 class="text-center">Номинации</h4>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 ">
                            <ul>
                                <li>Лучший магазин женской одежды
                                </li>
                                <li>
                                    Лучший магазин вечерних платьев
                                </li>
                                <li>
                                    Лучший дизайнер женской одежды
                                </li>
                                <li>
                                    Лучший магазин мужской одежды
                                </li>
                                <li>
                                    Лучший дизайнер мужской одежды
                                </li>
                                <li>
                                    Лучший магазин женской обуви
                                </li>
                                <li>
                                    Лучший магазин мужской обуви
                                </li>
                                <li>
                                    Лучший салон красоты
                                </li>
                                <li>
                                    Лучший салон красоты премиум-класса
                                </li>
                                <li>
                                    Лучший Barbershop
                                </li>
                                <li>
                                    Лучший Spa-салон премиум-класса
                                </li>
                                <li>
                                    Лучшая Beauty Studio
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <ul>
                                <li>Лучшая студия перманентного макияжа
                                </li>
                                <li>
                                    Лучший Brow Bar
                                </li>
                                <li>
                                    Лучшая Nail Studio
                                </li>
                                <li>
                                    Лучший fitness-центр
                                </li>
                                <li>
                                    Лучшая fitness-студия
                                </li>
                                <li>
                                    Лучший ресторан
                                </li>
                                <li>
                                    Лучшее место для проведения свадеб/банкетов
                                </li>
                                <li>
                                    Лучшее кафе
                                </li>
                                <li>
                                    Лучшая кофейня
                                </li>
                                <li>
                                    Лучшее кафе-мороженое
                                </li>
                                <li>
                                    Лучший торговый центр
                                </li>
                                <li>
                                    Открытие года
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <ul>
                                <li>Persona Instagram
                                </li>
                                <li>
                                    Лучший beauty-Instagram
                                </li>
                                <li>
                                    Лучший стилист по прическам
                                </li>
                                <li>
                                    Лучший визажист
                                </li>
                                <li>
                                    Лучший косметолог
                                </li>
                                <li>
                                    Лучший fitness тренер (мужчина)
                                </li>
                                <li>
                                    Лучший fitness тренер (женщина)
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <ul>
                                <li>Лучшая ведущая
                                </li>
                                <li>
                                    Лучший ведущий
                                </li>
                                <li>
                                    Лучшая музыкальная группа
                                </li>
                                <li>
                                    Лучшее семейное заведение
                                </li>
                                <li>
                                    Лучший Candy Bar
                                </li>
                                <li>
                                    Лучший семейный бизнес
                                </li>
                                <li>
                                    Лучшее клиентоориентированное заведение
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h5 class="text-center">Категория: «MAMA AWARD» специально ко Дню Матери</h5>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <h5>Цели и задачи</h5>
                            <p>Специальная номинация будет организована для поддержки и развития семейных
                                ценностей с целью показать, как много могут достичь женщины, у которых есть
                                дети. Эта премия для мам, которые успевают заниматься своими детьми, являются
                                любящими и заботливыми матерями, и при этом остаются активными женщинами,
                                реализуют свой потенциал в профессии и активно участвуют в культурной, светской
                                и даже политической жизни страны.
                            </p>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h5>Номинации</h5>
                            <ul>
                                <li>Искусство
                                </li>
                                <li>
                                    Политика
                                </li>
                                <li>
                                    Бизнес
                                </li>
                                <li>
                                    Музыка
                                </li>
                                <li>
                                    Туризм и отдых
                                </li>
                                <li>
                                    Медицина
                                </li>
                                <li>
                                    Спорт
                                </li>
                                <li>
                                    Благотворительность
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </main>

            <h3 class="mt-3 text-center">
                @include('includes.award')
            </h3>
        </div>
    </div>
@endsection
