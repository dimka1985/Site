@extends('layouts.app')

@section('title')
    @parent

    Реклама и продвижение брендов в Беларуси
@endsection

@section('styles')
    @parent

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
@endsection

@section('keywords', 'ОК, OK, OK Event Group,  OK Group, реклама, продвижение, smm, реклама и продвижение брендов в
Беларуси')

@section('description', 'OK Event Group, Реклама и продвижение брендов в Беларуси')

@section('content')
    <header class="full">
        <div class="header-video full position-absolute">
            {{--<video playsinline
                   poster="https://scontent-frt3-1.cdninstagram.com/vp/5a8e3ac631411b349c67b357d22f4e49/5B5A47A0/t51.2885-15/e15/35616370_235228623755377_8120839775759368192_n.jpg"
                   autoplay="autoplay" loop="loop" preload="auto" muted
                   src="https://scontent-frt3-1.cdninstagram.com/vp/8188f5c06cb7a67f3df238a9131fad3d/5B5A3152/t50.2886-16/36650570_193919444623395_779771425920647168_n.mp4"></video>--}}
        </div>

        <div class="overlay-header full">
            <div class="header-text position-absolute text-center text-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <h1 class="mb-5">{{ config('app.name') }}</h1>
                            <p class="lead mb-4">Мы занимаемся рекламой и продвижением брендов, помогаем в
                                организации мероприятий для вашей компании и проводим крупные фестивали!</p>
                            <a class="btn btn-lg btn-primary" href="company.html" role="button">Узнать больше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="text-center">{{ __('Why choose us?') }}</h1>
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
                                <p><i class="far fa-check-circle"></i> Проводим крупнейшие мероприятия</p>
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
            <h1 class="my-4">Мы предлагаем следующие услуги:</h1>
            <hr class="my-4">
            <div class="row">
                <div class="card-deck">
                    <div class="col-md-6 col-xl-3 mb-3">
                        <div class="card border-primary">
                            <h4 class="card-header bg-light text-primary"><i class="fas fa-certificate"></i></h4>
                            <div class="card-body">
                                <h4 class="card-title">Реклама компаний</h4>
                                <hr class="my-3">
                                <p class="card-text">Осуществляем разноплановую рекламу Ваших брендов среди широкой
                                    целевой аудитории.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="card-link">Узнать больше</a>
                                <hr>
                                <a href="#" class="btn btn-primary text-uppercase">Заказать!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-3">
                        <div class="card border-primary">
                            <h4 class="card-header bg-light text-primary"><i class="fab fa-instagram"></i></h4>
                            <div class="card-body">
                                <h4 class="card-title">SMM продвижение</h4>
                                <hr class="my-3">
                                <p class="card-text">Выполняем продвижение Ваших брендов в различных социальных сетях
                                    Интернета.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="card-link">Узнать больше</a>
                                <hr>
                                <a href="#" class="btn btn-primary text-uppercase">Заказать!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-3">
                        <div class="card border-primary">
                            <h4 class="card-header bg-light text-primary"><i class="fas fa-users"></i></h4>
                            <div class="card-body">
                                <h4 class="card-title">Продвижение мероприятий</h4>
                                <hr class="my-3">
                                <p class="card-text">Осуществляем подготовку и продвижение Ваших рекламных
                                    мероприятий.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="card-link">Узнать больше</a>
                                <hr>
                                <a href="#" class="btn btn-primary text-uppercase">Заказать!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-3">
                        <div class="card border-primary">
                            <h4 class="card-header bg-light text-primary"><i class="fas fa-globe"></i></h4>
                            <div class="card-body">
                                <h4 class="card-title">Крупные фестивали</h4>
                                <hr class="my-3">
                                <p class="card-text">Проводим крупные рекламные мероприятия с участием разнообразных
                                    компаний.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="card-link">Узнать больше</a>
                                <hr>
                                <a href="#" class="btn btn-primary text-uppercase">Заказать!</a>
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
                <h1>{{ __('Our festivals') }}</h1>
                <hr class="my-4">
                <div class="row">
                    <div class="col">
                        <h5>GRAND FASHION WEEKEND (13-14 октября 2018г.)</h5>
                        <a href="#"><img src="{{ asset('img/grand_fashion_weekend_afisha.png') }}" class="img-fluid
                        img-thumbnail rounded" alt="Наши мероприятия"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="img-galery">
            <div class="container text-center">
                <h1>{{ __('History of our events') }}</h1>
                <hr class="my-4">
                <div class="row">
                    <div class="col-md-6 col-xl-3 mb-5">
                        <h5>Dana Fashion Day в «Dana Mall» (2017)</h5>
                        <a href="#"><img src="{{ asset('img/dana_fashion_day.jpg') }}" class="img-fluid img-thumbnail
                        rounded" alt="Наши мероприятия"></a>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-5">
                        <h5>Шопинг в стиле «Карнавал» в «Galileo Mall»</h5>
                        <a href="#"><img src="{{ asset('img/karnaval.jpg') }}" class="img-fluid img-thumbnail
                        rounded" alt="Карнавал"></a>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-5">
                        <h5>Queen of beauty by RUSHKA (2 сезон)</h5>
                        <a href="#"><img src="{{ asset('img/rushka.jpg') }}" alt="Rushka" class="img-fluid
                        img-thumbnail rounded"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="my-4 text-center">{{ __('Last news') }}:</h1>
                <hr class="my-4">
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/karnaval.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Имиджевое мероприятие Dana Fashion Day в «Dana Mall»</strong>
                            </h5>
                            <hr>
                            <p class="card-text">23 декабря состоялось имиджевое мероприятие для ТРЦ Galileo Mall.
                                Гостям мы предложили окунуться в самое сердце fashion-индустрии: освоить актуальные
                                модные
                                тенденции, развлечься и получить море новых впечатлений в яркой творческой атмосфере!
                            </p>
                            <a href="#" class="card-link">Читать полностью</a>
                        </div>
                        <div class="card-footer">
                            <p class="card-text">
                                <small class="text-muted">Опубликовано 2 дня назад</small>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/rushka.jpg') }}" alt="Rushka">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Успехи на Queen of beauty by RUSHKA (2 сезон)</strong></h5>
                            <hr>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional
                                content. This content is a little bit longer.</p>
                            <a href="#" class="card-link">Читать полностью</a>
                        </div>
                        <div class="card-footer">
                            <p class="card-text">
                                <small class="text-muted">Опубликовано 2 дня назад</small>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/dana_fashion_day.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Сумасшедший успех Шопинга в стиле «Карнавал»</strong></h5>
                            <hr>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional
                                content. This card has even longer content than the first to show that equal height
                                action.</p>
                            <a href="#" class="card-link">{{ __('Read more') }}</a>
                        </div>
                        <div class="card-footer">
                            <p class="card-text">
                                <small class="text-muted">{{ __('Published') }} 2 дня назад</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
