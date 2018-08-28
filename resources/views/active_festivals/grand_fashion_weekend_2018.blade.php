@extends('layouts.app')

@section('title')
    @parent | {{ $festival->name }}
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
            background: url("{{ asset($festival->bg) }}") no-repeat fixed top left/cover;
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
                                <h3>{{ $festival->place }}</h3>
                                <h3>{{ $festival->address }}</h3>
                                <h3>{{ \Carbon\Carbon::parse
                            ($festival->begin_date)->format('d.m.Y') }} @if ($festival->begin_date !=
                            $festival->end_date)
                                        - {{ \Carbon\Carbon::parse($festival->end_date)->format('d.m.Y') }} @endif</h3>
                                <h4>{{ $festival->time }}</h4>
                                <h4 class="mt-3">{{ __('Cost of visit') }}: {{ $festival->price }}</h4>
                                <h3 class="mt-3">
                                    @include('includes.festival_buttons')
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            <main class="my-3">
                <div class="row">
                    <div class="col-12 col-lg-3 col-xl-2">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-lg-12 mb-3">
                                <a href="{{ route('festivals.festival', ['festival' => $festival]) }}"><img
                                            src="{{ asset($festival->image) }}"
                                            class="img-fluid img-thumbnail rounded"
                                            alt="{{ $festival->name }}"></a>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-12 mb-3">
                                <a href="{{ route('festivals.festival.award', ['festival' => $festival]) }}"><img
                                            src="{{ asset($festival->award_image) }}"
                                            class="img-fluid img-thumbnail rounded" alt="{{ $festival->award
                                                }}"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 col-xl-10">
                        <h5><u>{{ __('Official Instagram') }}</u>:
                            <strong><a href="{{ $festival->instagram }}" target="_blank"><i class="fab fa-instagram
                                        mr-1"></i> {{ __('Instagram') }} {{ $festival->name }}</a></strong></h5>
                        {!! $festival->text !!}
                    </div>
                </div>
            </main>

            <section class="slide1">
                <img src="{{ asset('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_1.jpg') }}"
                     alt="{{ $festival->name }}" class="full">
            </section>

            <section class="slide2 position-relative overlay-header">
                <div class="row no-gutters">
                    <div class="col-4">
                        <img src="{{ asset
                    ('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_4.jpg') }}"
                             alt="{{ $festival->name }}" class="w-100" style="height: 100%;">
                    </div>
                    <div class="col-8">
                        <div class="row no-gutters">
                            <div class="col-6"><img src="{{ asset
                    ('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_2.jpg') }}"
                                                    alt="{{ $festival->name }}" class="w-100" style="height: 100%;">
                            </div>
                            <div class="col-6"><img src="{{ asset
                    ('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_3.jpg') }}"
                                                    alt="{{ $festival->name }}" class="w-100" style="height: 100%;">
                            </div>
                            <div class="w-100"></div>
                            <div class="col-6"><img src="{{ asset
                    ('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_5.jpg') }}"
                                                    alt="{{ $festival->name }}" class="w-100" style="height: 100%;">
                            </div>
                            <div class="col-6"><img src="{{ asset
                    ('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_6.jpg') }}"
                                                    alt="{{ $festival->name }}" class="w-100" style="height: 100%;">
                            </div>
                        </div>
                    </div>

                    <div class="header-text position-absolute text-center text-white">
                        <div class="container">
                            <div class="row">
                                <div class="col-10 offset-1"
                                     style="opacity: .8; background: black;">
                                    <p>Ресторан «Усадьба» – это уникальная площадка в центре города для
                                        проведения массовых мероприятий. Абсолютное новшество и полноправная гордость
                                        ресторана кроется в его художественной составляющей: интерьер воспроизводит
                                        убранство ресторации середины ХIХ века. Это благородная роскошь, просторные
                                        залы, наполненные воздухом и светом, изысканный декор стен, сверкающие люстры,
                                        тихо тлеющий камин. Шик в каждой детали...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="slide3 overlay-header position-relative">
                <img src="{{ asset('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_7.jpg') }}"
                     alt="{{ $festival->name }}" class="full">

                <div class="header-text position-absolute text-white">
                    <div class="row">
                        <div class="col-10 offset-1" style="opacity: .8; background: black;">
                            <ul>
                                <li>Это новый формат проведения
                                    выходных в
                                    атмосфере, где царит красота, сплоченность и семейный уют (в предверии всемирного
                                    дня
                                    матери)
                                </li>
                                <li>
                                    Площадка, где представлены лучшие проекты для красоты, развития, независимости,
                                    счастья
                                    и успеха
                                </li>
                                <li>
                                    Это уникальная возможность представить свой бренд/услугу на фестивале, где будет
                                    сконцентрирована ваша целевая аудитория
                                </li>
                                <li>
                                    Это стильное городское мероприятие, посвященное развитию бизнеса, целевой аудиторией
                                    которого
                                    является современная семья
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="slide4 overlay-header position-relative">
                <img src="{{ asset('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_5.jpg') }}"
                     alt="{{ $festival->name }}" class="full">

                <div class="header-text position-absolute text-white">
                    <div class="row">
                        <div class="col-10 offset-1" style="opacity: .8; background: black;">
                            <h4 class="text-center">Целевая аудитория</h4>
                            <ul>
                                <li>Наш фестиваль станет отличным вариантом семейных выходных: большая зона для женщин,
                                    интересные активности для мужчин и уютная детская зона с занимательными
                                    мастер-классами
                                </li>
                                <li>
                                    Минчане, гости столицы, иностранные туристы
                                </li>
                                <li>
                                    Женщины и мужчины с активной жизненной позицией, которые ценят комфорт и престиж, а
                                    также отдают предпочтение качественным товарам.
                                </li>
                                <li>
                                    Это стильное городское мероприятие, посвященное развитию бизнеса, целевой аудиторией
                                    которого
                                    является современная семья
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="slide5 overlay-header position-relative">
                <img src="{{ asset('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_8.jpg') }}"
                     alt="{{ $festival->name }}" class="full">

                <div class="header-text position-absolute text-white">
                    <div class="row">
                        <div class="col-10 offset-1" style="opacity: .8; background: black;">
                            <h4 class="text-center">Beauty &Wellness for women</h4>
                            <h6 class="text-center">Бренды в сфере красоты и здоровья представят свои:</h6>
                            <ul>
                                <li>Мастер-классы по макияжу от популярных визажистов и бьюти-блогеров
                                </li>
                                <li>
                                    Косметические продукты и услуги
                                </li>
                                <li>
                                    Интерактивные презентации своего продукта
                                </li>
                                <li>
                                    Спа-шоурум с презентацией программ: «LADY SECRET», «BODY PERFECT», «REAL THAI»
                                </li>
                                <li>
                                    Презентации средств по уходу за лицом и телом
                                </li>
                                <li>
                                    Мастер-классы по фитнесу, выступления известных девушек- спортсменок,
                                    fitness-блогеров
                                </li>
                                <li>
                                    Бесплатные консультации диетологов и фитнесс-тренеров, пробные и демонстрационные
                                    занятия
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="slide6 overlay-header position-relative">
                <img src="{{ asset('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_9.jpg') }}"
                     alt="{{ $festival->name }}" class="full">

                <div class="header-text position-absolute text-white">
                    <div class="row">
                        <div class="col-10 offset-1" style="opacity: .8; background: black;">
                            <h4 class="text-center">Fashion for women</h4>
                            <ul>
                                <li>Все, что нужно современной женщине по системе ALL IN ONE
                                </li>
                                <li>
                                    Шоурум с модными дизайнерами и брендами
                                </li>
                                <li>
                                    Профессиональные модные показы новых коллекций
                                </li>
                                <li>
                                    Скидки, акции, конкурсы и призы от партнеров
                                </li>
                                <li>
                                    Выступления приглашенных спикеров и стилистов на тему женского стиля и подбора
                                    рационального гардероба
                                </li>
                                <li>
                                    Мастер-классы от брендов, представленных в зоне FASHION
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="slide7 overlay-header position-relative">
                <img src="{{ asset('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_10.jpg') }}"
                     alt="{{ $festival->name }}" class="full">

                <div class="header-text position-absolute text-white">
                    <div class="row">
                        <div class="col-10 offset-1" style="opacity: .8; background: black;">
                            <h4 class="text-center">Business for women</h4>
                            <h6 class="text-center">Конференция, в рамках которой выступят лидеры</h6>
                            <ul>
                                <li>Выступление спикеров-женщин, успешных в своей сфере жизни: семья, бизнес, профессия,
                                    творчество, спорт
                                </li>
                                <li>
                                    Привлечение женщин из необычных профессий
                                </li>
                                <li>
                                    Участие женских сообществ
                                </li>
                                <li>
                                    Презентации конкурсов и образовательных курсов для женщин
                                </li>
                                <li>
                                    Самореализация женщин
                                </li>
                                <li>
                                    Участие психологов, популярных тренеров
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="slide8 overlay-header position-relative">
                <img src="{{ asset('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_11.jpg') }}"
                     alt="{{ $festival->name }}" class="full">

                <div class="header-text position-absolute text-white">
                    <div class="row">
                        <div class="col-10 offset-1" style="opacity: .8; background: black;">
                            <h4 class="text-center">Beauty &Wellness for men</h4>
                            <h6 class="text-center">Бренды в сфере красоты и здоровья представят свои:</h6>
                            <ul>
                                <li>Мастер-классы по подбору уходовых средств для мужчин
                                </li>
                                <li>
                                    Интерактивные презентации своего продукта
                                </li>
                                <li>
                                    Акции, скидки, интересные розыгрыши призов, подарки от партнеров
                                </li>
                                <li>
                                    Спа-шоурум с презентацией программ: «SPORT LIFE», «GENTLEMAN ONLY», «REAL THAI»
                                </li>
                                <li>
                                    Мастер-классы по фитнесу, выступления белорусских спортсменов
                                </li>
                                <li>
                                    Презентации проектов здорового питания, дегустации, подарки
                                </li>
                                <li>
                                    Бесплатные консультации диетологов и фитнесс-тренеров, пробные и демонстрационные
                                    занятия
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="slide9 overlay-header position-relative">
                <img src="{{ asset('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_12.jpg') }}"
                     alt="{{ $festival->name }}" class="full">

                <div class="header-text position-absolute text-white">
                    <div class="row">
                        <div class="col-10 offset-1" style="opacity: .8; background: black;">
                            <h4 class="text-center">Fashion for men
                            </h4>
                            <ul>
                                <li>Все, что нужно современному мужчине по системе ALL IN ONE
                                </li>
                                <li>
                                    Шоурум с модными дизайнерами и брендами
                                </li>
                                <li>
                                    Профессиональные модные показы новых коллекций
                                </li>
                                <li>
                                    Скидки, акции, конкурсы и призы от партнеров
                                </li>
                                <li>
                                    Выступления приглашенных спикеров и стилистов на тему мужского стиля и подбора
                                    рационального гардероба
                                </li>
                                <li>
                                    Мастер-классы от брендов, представленных в зоне FASHION
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="slide10 overlay-header position-relative">
                <img src="{{ asset('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_13.jpg') }}"
                     alt="{{ $festival->name }}" class="full">

                <div class="header-text position-absolute text-white">
                    <div class="row">
                        <div class="col-10 offset-1" style="opacity: .8; background: black;">
                            <h4 class="text-center">Business for men</h4>
                            <h6 class="text-center">Конференция, которая поможет поддержать темы мужского лидерства и
                                развития предпринимательства</h6>
                            <ul>
                                <li>Выступления спикеров, успешных в своей сфере жизни: бизнес, творчество, спорт
                                </li>
                                <li>
                                    Привлечение мужчин из необычных профессий
                                </li>
                                <li>
                                    Самореализация мужчин
                                </li>
                                <li>
                                    Тест-драйв автомобилей, гаджетов
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="slide11 overlay-header position-relative">
                <img src="{{ asset('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_14.jpg') }}"
                     alt="{{ $festival->name }}" class="full">

                <div class="header-text position-absolute text-white">
                    <div class="row">
                        <div class="col-10 offset-1" style="opacity: .8; background: black;">
                            <h4 class="text-center">Food &Drinks for everybody</h4>
                            <ul>
                                <li>Заведения, которые не оставят равнодушными всех гостей фестиваля
                                </li>
                                <li>
                                    В эти дни можно будет все: начнем выходные со смузи, а завершим вкусным коктейлем
                                </li>
                                <li>
                                    Бренды, представляющие здоровое питание, детокс
                                </li>
                                <li>
                                    Мастер-классы от фуд-блогеров по приготовлению модных вкусных и красивых блюд
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="slide12 overlay-header position-relative">
                <img src="{{ asset('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_15.jpg') }}"
                     alt="{{ $festival->name }}" class="full">

                <div class="header-text position-absolute text-white">
                    <div class="row">
                        <div class="col-10 offset-1" style="opacity: .8; background: black;">
                            <h4 class="text-center">
                                {{ Html::linkRoute('festivals.festival.award', __('Award') . $festival->award,
                                ['festival' => $festival], ['class' => 'card-link']) }}
                            </h4>
                            <div class="row">
                                <div class="col-6">
                                    <p>Премия «Top of Belarus-2018» - это мероприятие конкурсного типа, основанное на
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
                                </div>
                                <div class="col-6">
                                    <h6 class="text-center">Цели и задачи</h6>
                                    <p>Определение лучших представителей индустрии красоты, ведущих свою деятельность на
                                        территории Республики Беларусь.
                                        Привлечение внимания потенциальных клиентов к участникам и победителям Премии.
                                        Популяризация победителей и партнёров Премии.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{--            <section class="slide13 overlay-header position-relative">
                            <img src="{{ asset('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_top_small.jpg') }}"
                                 alt="{{ $festival->name }}" class="full">

                            <div class="header-text position-absolute text-white">
                                <div class="row">
                                    <div class="col-10 offset-1" style="opacity: .8; background: black;">
                                        <h4 class="text-center">Премия «Top of Belarus-2018»</h4>
                                        <h6 class="text-center">Номинации</h6>
                                        <div class="row">
                                            <div class="col-6">
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
                                            <div class="col-6">
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
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="slide14 overlay-header position-relative">
                            <img src="{{ asset('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_top_small.jpg') }}"
                                 alt="{{ $festival->name }}" class="full">

                            <div class="header-text position-absolute text-white">
                                <div class="row">
                                    <div class="col-10 offset-1" style="opacity: .8; background: black;">
                                        <h4 class="text-center">Премия «Top of Belarus-2018»</h4>
                                        <h6 class="text-center">Номинации</h6>
                                        <div class="row">
                                            <div class="col-6">
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
                                            <div class="col-6">
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
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="slide15 overlay-header position-relative">
                            <img src="{{ asset('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_top_small.jpg') }}"
                                 alt="{{ $festival->name }}" class="full">

                            <div class="header-text position-absolute text-white">
                                <div class="row">
                                    <div class="col-10 offset-1" style="opacity: .8; background: black;">
                                        <h4 class="text-center">Премия «Top of Belarus-2018»</h4>
                                        <h5 class="text-center">Категория: «MAMA AWARD» специально ко Дню Матери</h5>
                                        <h6 class="text-center">Номинации</h6>
                                        <div class="row">
                                            <div class="col-6">
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
                                            <div class="col-6">
                                                <p>Специальная номинация будет организована для поддержки и развития семейных
                                                    ценностей с целью показать, как много могут достичь женщины, у которых есть
                                                    дети. Эта премия для мам, которые успевают заниматься своими детьми, являются
                                                    любящими и заботливыми матерями, и при этом остаются активными женщинами,
                                                    реализуют свой потенциал в профессии и активно участвуют в культурной, светской
                                                    и даже политической жизни страны.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>--}}

            {{--<section class="slide17 text-uppercase">
                <h1 class="text-center my-3">Стоимость участия для юр. лиц:</h1>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr class="table-primary">
                            <th scope="col">Наименование</th>
                            <th scope="col">Условия</th>
                            <th scope="col">Регистрационный взнос (евро)</th>
                            <th scope="col">1 м<sup>2</sup> (евро)</th>
                            <th scope="col">Более 2-х номинаций (евро)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row" class="table-success">Маркет/фудкорт
                            </th>
                            <td>В стоимость входит площадь для торговли, анонсирование в соц.сетях, электричество
                            </td>
                            <td class="text-primary"><strong>100</strong></td>
                            <td class="text-primary"><strong>30</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row" class="table-success">ПАРТНЕР</th>
                            <td>В стоимость входит площадь для торговли, проведения рекламных активностей, возможность
                                выступления представителей компании
                            </td>
                            <td class="text-primary"><strong>ОТ 250</strong></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row" class="table-success">Генеральный партнер тематической зоны</th>
                            <td>В стоимость входит площадь для торговли, проведения рекламных активностей,
                                возможность выступления представителей компании, разработка индивидуальной рекамной
                                кампании и креативного предложения участия
                            </td>
                            <td class="text-primary"><strong>ОТ 600</strong></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row" class="table-success">Модный показ</th>
                            <td>Подбор моделей, постановка дефиле, примерка, работа стилиста, визажистов и парикмахеров
                            </td>
                            <td class="text-primary"><strong>ОТ 250</strong></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row" class="table-success">Участие в премии (номинирование)</th>
                            <td>Ваш бренд/товар/услуга/заведение будет номинирован в выбранной номинации и занесен в
                                список для голосования
                            </td>
                            <td class="text-primary"><strong>50</strong></td>
                            <td></td>
                            <td class="text-primary"><strong>Каждая-40 *каждая 3-я номинация-бесплатно</strong></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </section>--}}

            <h3 class="mt-3 text-center">
                @include('includes.festival_buttons')
            </h3>
            {{--<h5 class="mt-3 d-none d-lg-block">
                <a href="{{ asset('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_afisha.png') }}"
                   target="_blank">Посмотреть афишу фестиваля</a> | <a
                        href="{{ asset
                        ('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_top.jpg') }}"
                        target="_blank">Посмотреть афишу премии</a></h5>--}}
        </div>
    </div>
@endsection
