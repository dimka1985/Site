@extends('layouts.app')

@section('title')
    @parent | {{ $festival->name }}
@endsection

@section('styles')
    @parent

    <style>
        header {
            background: url("{{ asset($festival->image) }}") no-repeat fixed top left/cover;
        }

        section {
            margin-bottom: 2px;
        }

        .header-text {
            font-size: .6rem;
        }

        /* col-sm */
        @media (min-width: 576px) {
            .header-text {
                font-size: .8rem;
            }
        }

        /* col-md */
        @media (min-width: 768px) {
            .header-text {
                font-size: 1rem;
            }
        }
    </style>
@endsection

@section('content')
    <div id="app">
        @include('includes.sessions')

        <header class="full">
            <div class="overlay-header full">
                <div class="header-text position-absolute text-center text-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h1 class="mb-4">{{ $festival->name }}</h1>
                                <h3>{{ $festival->place }} {{ $festival->address }}</h3>
                                <h3>{{ $festival->time }} {{ \Carbon\Carbon::parse
                            ($festival->begin_date)->format('d.m.Y') }} @if ($festival->begin_date !=
                            $festival->end_date)
                                        - {{ \Carbon\Carbon::parse($festival->end_date)->format('d.m.Y') }} @endif</h3>
                                <h3 class="mt-3"><a href="#"
                                                    class="btn btn-lg btn-primary text-uppercase mb-1">{{ __('Participate!') }}</a>
                                    <a href="#"
                                       class="btn btn-lg btn-success text-uppercase">{{ __('Want to visit!') }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            <section class="slide1">
                <img src="{{ asset('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_1.jpg') }}"
                     alt="{{ $festival->name }}" width="100%">
            </section>

            <section class="slide2 position-relative overlay-header">
                <div class="row no-gutters">
                    <div class="col-4">
                        <img src="{{ asset
                    ('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_4.jpg') }}"
                             alt="{{ $festival->name }}" width="100%" height="100%">
                    </div>
                    <div class="col-8">
                        <div class="row no-gutters">
                            <div class="col-6"><img src="{{ asset
                    ('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_2.jpg') }}"
                                                    alt="{{ $festival->name }}" width="100%" height="100%"></div>
                            <div class="col-6"><img src="{{ asset
                    ('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_3.jpg') }}"
                                                    alt="{{ $festival->name }}" width="100%" height="100%"></div>
                            <div class="w-100"></div>
                            <div class="col-6"><img src="{{ asset
                    ('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_5.jpg') }}"
                                                    alt="{{ $festival->name }}" width="100%" height="100%"></div>
                            <div class="col-6"><img src="{{ asset
                    ('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_6.jpg') }}"
                                                    alt="{{ $festival->name }}" width="100%" height="100%"></div>
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
                     alt="{{ $festival->name }}" width="100%">

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
                     alt="{{ $festival->name }}" width="100%">

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
                     alt="{{ $festival->name }}" width="100%">

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
                     alt="{{ $festival->name }}" width="100%">

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
                     alt="{{ $festival->name }}" width="100%">

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
                     alt="{{ $festival->name }}" width="100%">

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
                     alt="{{ $festival->name }}" width="100%">

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
                     alt="{{ $festival->name }}" width="100%">

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
                     alt="{{ $festival->name }}" width="100%">

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
                     alt="{{ $festival->name }}" width="100%">

                <div class="header-text position-absolute text-white">
                    <div class="row">
                        <div class="col-10 offset-1" style="opacity: .8; background: black;">
                            <h4 class="text-center">Премия «Top of Belarus-2018»</h4>
                            <div class="row">
                                <div class="col-6">
                                    Премия «Top of Belarus-2018» - это мероприятие конкурсного типа, основанное на
                                    голосовании
                                    Потребителей.
                                    Премия «Top of Belarus-2018»
                                    определяет общественное
                                    признание лучшего товара или
                                    услуги с присвоением по итогам отбора
                                    звания победителя в соответствии
                                    с утвержденными номинациями. 
                                    Организация и проведение премии помогает клиентам сориентироваться
                                    в многообразии предлагаемых услуг,
                                    а также стимулирует игроков рынка к совершенствованию.
                                </div>
                                <div class="col-6">
                                    <h6 class="text-center">Цели и задачи</h6>
                                    Определение лучших представителей индустрии красоты, ведущих свою деятельность на
                                    территории Республики Беларусь.
                                    Привлечение внимания потенциальных клиентов к участникам и победителям Премии.
                                    Популяризация победителей и партнёров Премии.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="slide13 overlay-header position-relative">
                <img src="{{ asset('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_15.jpg') }}"
                     alt="{{ $festival->name }}" width="100%">

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
                                            Лучший fitness центр
                                        </li>
                                        <li>
                                            Лучшая fitness студия
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
                <img src="{{ asset('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_15.jpg') }}"
                     alt="{{ $festival->name }}" width="100%">

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
                                            Лучший beauty Instagram
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
                <img src="{{ asset('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_15.jpg') }}"
                     alt="{{ $festival->name }}" width="100%">

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
            </section>

            <section class="slide16 overlay-header position-relative">
                <img src="{{ asset('img/festivals/presentations/grand_fashion_weekend_2018/grand_fashion_weekend_2018_15.jpg') }}"
                     alt="{{ $festival->name }}" width="100%">

                <div class="header-text position-absolute text-white">
                    <div class="row">
                        <div class="col-10 offset-1" style="opacity: .8; background: black;">
                            <h4 class="text-center">Рекламная кампания</h4>
                            <h5 class="text-center">Более 30 информационных партнеров:</h5>
                            <ul>
                                <li>Журнал «Город Женщин», «Женский журнал», журнал «Where Minsk» и др.;
                                </li>
                                <li>
                                    Таргетированная реклама (SMM-продвижение с охватом более 200 000 человек вашей ЦА)
                                </li>
                                <li>
                                    Размещение анонса мероприятия на ведущих порталах нашего города (Relax.by, TUT.by);
                                </li>
                                <li>
                                    Размещение афиш и флаеров в местах прохождения целевой аудитории, а также, у
                                    партнеров и участников мероприятия;
                                </li>
                                <li>
                                    Приглашение на мероприятие специальных гостей, VIP персон, популярных блогеров,
                                    медийных персон
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="slide17 text-uppercase">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr class="table-primary">
                            <th scope="col">Наименование</th>
                            <th scope="col">Условия</th>
                            <th scope="col">Регистрационный взнос (евро)</th>
                            <th scope="col">1 кв м (евро)</th>
                            <th scope="col">Более 2 номинаций (евро)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">Маркет/фудкорт
                            </th>
                            <td>В стоимость входит площадь для торговли, анонсирование в соц.сетях, электричество
                            </td>
                            <td>100</td>
                            <td>30</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">ПАРТНЕР</th>
                            <td>В стоимость входит площадь для торговли, проведения рекламных активностей, возможность
                                выступления представителей компании
                            </td>
                            <td>ОТ 250</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">Генеральный партнер тематической зоны</th>
                            <td>В стоимость входит площадь для торговли, проведения рекламных активностей,
                                возможность выступления представителей компании, разработка индивидуальной рекамной
                                кампании и креативного предложения участия
                            </td>
                            <td>ОТ 600</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">Модный показ</th>
                            <td>Подбор моделей, постановка дефиле, примерка, работа стилиста, визажистов и парикмахеров
                            </td>
                            <td>ОТ 250</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">Участие в премии (номинирование)</th>
                            <td>Ваш бренд/товар/услуга/заведение будет номинирован в выбранной номинации и занесен в
                                список для голосования
                            </td>
                            <td>50</td>
                            <td></td>
                            <td>Каждая-40 *каждая 3 номинация-бесплатно
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </section>

        </div>
    </div>
@endsection
