<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">

    <!-- Favicons -->
    <link href="{{ asset('apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180">
    <link href="{{ asset('favicon-32x32.png') }}" rel="icon" sizes="32x32" type="image/png">
    <link href="{{ asset('favicon-16x16.png') }}" rel="icon" sizes="16x16" type="image/png">
    <link href="{{ asset('site.webmanifest') }}" rel="manifest">
    <link href="{{ asset('safari-pinned-tab.svg') }}" rel="mask-icon" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.gstatic.com" rel="dns-prefetch">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=cyrillic" rel="stylesheet"
          type="text/css">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @yield('content')
    <header class="full">
        <div class="header-video full position-absolute">
            <video playsinline
                   poster="https://scontent-frt3-1.cdninstagram.com/vp/5a8e3ac631411b349c67b357d22f4e49/5B5A47A0/t51.2885-15/e15/35616370_235228623755377_8120839775759368192_n.jpg"
                   autoplay="autoplay" loop="loop" preload="auto" muted
                   src="https://scontent-frt3-1.cdninstagram.com/vp/8188f5c06cb7a67f3df238a9131fad3d/5B5A3152/t50.2886-16/36650570_193919444623395_779771425920647168_n.mp4"></video>
        </div>

        <div class="overlay-header full">
            <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('img/okgroup-logo.jpg') }}" width="40" class="d-inline-block align-top"
                             alt="Логотип компании OK Group"> OK Group
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                            aria-controls="navbar" aria-expanded="false" aria-label="Переключение навигации">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse text-uppercase" id="navbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">
                                    <i class="fas fa-home"></i> Главная <span class="sr-only">(текущая)</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="services.html" id="servicesDropdown"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-shopping-cart"></i> Услуги
                                </a>
                                <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-star"></i> Реклама
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-thumbs-up"></i> Продвижение
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-calendar-alt"></i> Мероприятия
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="news.html">
                                    <i class="fas fa-newspaper"></i> Новости
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="company.html">
                                    <i class="fas fa-building"></i> О нас
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contacts">
                                    <i class="fas fa-phone"></i> Контакты
                                </a>
                            </li>
                        </ul>
                        @if (Route::has('login'))
                            <ul class="navbar-nav ml-auto">
                                @auth
                                    <li class="nav-item dropdown">
                                        <a id="userDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">
                                            <i class="fas fa-sign-in-alt"></i> {{ __('Login') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">
                                            <i class="fas fa-user"></i> {{ __('Register') }}
                                        </a>
                                    </li>
                                @endauth
                            </ul>
                        @endif
                    </div>
                </div>
            </nav>

            <div class="header-text position-absolute text-center text-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <h1 class="mb-4">OK Event Group</h1>
                            <p class="lead mb-4">Занимаемся рекламой и продвижением брендов, помогаем в организации
                                мероприятий для вашей компании и проводим крупные фестивали!</p>
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
                <h1 class="text-center">Почему выбрать нас?</h1>
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
                                <div class="price text-center">
                                    <strong>300 руб. / месяц</strong>
                                </div>
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
                                <div class="price text-center">
                                    <strong>300 руб. / месяц</strong>
                                </div>
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
                                <div class="price text-center">
                                    <strong>300 руб. / месяц</strong>
                                </div>
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
                                <div class="price text-center">
                                    <strong>300 руб. / месяц</strong>
                                </div>
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
                <h1>История наших мероприятий</h1>
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
        <div class="container ">
            <h1 class="my-4 text-center">Последние новости:</h1>
            <hr class="my-4">
            <div class="card-group">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('img/karnaval.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Имиджевое мероприятие Dana Fashion Day в «Dana Mall»</strong>
                        </h5>
                        <hr>
                        <p class="card-text">23 декабря состоялось имиджевое мероприятие для ТРЦ Galileo Mall.
                            Гостям мы предложили окунуться в самое сердце fashion-индустрии: освоить актуальные модные
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
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
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
                        <a href="#" class="card-link">Читать полностью</a>
                    </div>
                    <div class="card-footer">
                        <p class="card-text">
                            <small class="text-muted">Опубликовано 2 дня назад</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="mt-5">

    <script id="bx24_form_inline" data-skip-moving="true">
      (function (w, d, u, b) {
        w['Bitrix24FormObject'] = b
        w[b] = w[b] || function () {
          arguments[0].ref = u;
          (w[b].forms = w[b].forms || []).push(arguments[0])
        }
        if (w[b]['forms']) {
          return
        }
        let s = d.createElement('script')
        s.async = 1
        s.src = u + '?' + (1 * new Date())
        let h = d.getElementsByTagName('script')[0]
        h.parentNode.insertBefore(s, h)
      })(window, document, 'https://ipnkuksar.bitrix24.by/bitrix/js/crm/form_loader.js', 'b24form')

      b24form({'id': '4', 'lang': 'ru', 'sec': 'den8dk', 'type': 'inline'})
    </script>

    <footer id="contacts">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Наши контакты:</h5>
                        <hr>
                        <ul class="jumbotron-list pl-0">
                            <li><i class="fas fa-phone mr-1"></i> +375 25 555 55 55</li>
                            <li><i class="fas fa-envelope mr-1"></i> <a
                                        href="mailto:info@okgroup.by">info@okgroup.by</a>
                            </li>
                            <li><i class="fab fa-instagram mr-1"></i> <a href="https://www.instagram
                            .com/o_k_group/">OK Event Group Instagram</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5>Наши услуги:</h5>
                        <hr>
                        <ul class="jumbotron-list pl-0">
                            <li><i class="fas fa-star"></i> <a href="#">
                                    Реклама</a>
                            </li>
                            <li><i class="fas fa-thumbs-up"></i> <a href="#">
                                    Продвижение
                                </a></li>
                            <li><i class="fas fa-calendar-alt"></i> <a href="#">
                                    Мероприятия
                                </a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5>Подпишитесь на рассылку:</h5>
                        <hr>

                    </div>
                </div>
                <hr>
                <p class="text-center">Copyright © 2018. Все права защищены. Дизайн <a
                            href="mailto:dmitrytsibylskiy@gmail.com">okgroup.by dmitry</a></p>
            </div>
        </div>
    </footer>

    <script data-skip-moving="true">
      (function (w, d, u) {
        let s = d.createElement('script')
        s.async = 1
        s.src = u + '?' + (Date.now() / 60000 | 0)
        let h = d.getElementsByTagName('script')[0]
        h.parentNode.insertBefore(s, h)
      })(window, document, 'https://cdn.bitrix24.by/b7454297/crm/site_button/loader_1_6n1kz7.js')
    </script>

</div>
</body>
</html>
