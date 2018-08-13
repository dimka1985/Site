<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @section('title')
            {{ config('app.name') }}
        @show
    </title>

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
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=cyrillic" rel="stylesheet"
          type="text/css">

    <!-- Styles -->
    @section('styles')
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    @show
</head>
<body>
<nav class="navbar fixed-top navbar-expand-xl navbar-light bg-light">
    <div class="container">
        {!! Html::linkWithHtml(route('home'), '<img src="' . asset('img/okgroup-logo.jpg') . '"
        width="40" class="d-inline-block align-top" alt="' . config('app.name') . '"> ' .
        config('app.name'), ['class' => 'navbar-brand']) !!}

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto text-uppercase">
                @if (Route::currentRouteName() == 'home')
                    <li class="nav-item active">
                        {!! Html::linkWithHtml(route('home'), '<i class="fas fa-home"></i> ' . __('Home') . '
                         <span class="sr-only">(' . __('Current') . ')</span>', ['class' => 'nav-link']) !!}
                    </li>
                @else
                    <li class="nav-item">
                        {!! Html::linkWithHtml(route('home'), '<i class="fas fa-home"></i> ' . __('Home'), ['class' => 'nav-link']) !!}
                    </li>
                @endif

                <li class="nav-item dropdown">
                    @if (Route::currentRouteName() == 'services')
                        {!! Html::linkWithHtml('#', '<i class="fas fa-shopping-cart"></i> '
                        . __('Services') . ' <span class="sr-only">(' . __('Current') . ')</span>', ['class' =>
                        'nav-link dropdown-toggle active', 'id' => 'servicesDropdown', 'role' => 'button', 'data-toggle' => 'dropdown', 'aria-haspopup' => 'true', 'aria-expanded' => 'false']) !!}
                    @else
                        {!! Html::linkWithHtml('#', '<i class="fas fa-shopping-cart"></i> '
                        . __('Services'), ['class' => 'nav-link dropdown-toggle', 'id' => 'servicesDropdown', 'role'
                        => 'button', 'data-toggle' => 'dropdown', 'aria-haspopup' => 'true', 'aria-expanded' => 'false']) !!}
                    @endif

                    <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                        @if (Route::currentRouteName() == 'advertising')
                            {!! Html::linkWithHtml('#', '<i class="fas fa-star"></i> ' . __('Advertising') . '
                            <span class="sr-only">(' . __('Current') . ')</span>', ['class' => 'dropdown-item active']) !!}
                        @else
                            {!! Html::linkWithHtml('#', '<i class="fas fa-star"></i> ' . __('Advertising'),
                            ['class' => 'dropdown-item']) !!}
                        @endif

                        @if (Route::currentRouteName() == 'promotion')
                            {!! Html::linkWithHtml('#', '<i class="fas fa-thumbs-up"></i> '
                            . __('Promotion') . ' <span class="sr-only">(' . __('Current') . ')</span>', ['class' =>
                            'dropdown-item active']) !!}
                        @else
                            {!! Html::linkWithHtml('#', '<i class="fas fa-thumbs-up"></i> '
                            . __('Promotion'), ['class' => 'dropdown-item']) !!}
                        @endif

                        <div class="dropdown-divider"></div>
                        @if (Route::currentRouteName() == 'events')
                            {!! Html::linkWithHtml('#', '<i class="fas fa-calendar-alt"></i> '
                            . __('Events') . ' <span class="sr-only">(' . __('Current') . ')</span>', ['class' => 'dropdown-item active']) !!}
                        @else
                            {!! Html::linkWithHtml('#', '<i class="fas fa-calendar-alt"></i> '
                            . __('Events'), ['class' => 'dropdown-item']) !!}
                        @endif

                        @if (Route::currentRouteName() == 'festivals')
                                {!! Html::linkWithHtml('#', '<i class="fas fa-globe"></i> '
                                . __('Festivals') . ' <span class="sr-only">(' . __('Current') . ')</span>', ['class' =>
                                'dropdown-item active']) !!}
                        @else
                                {!! Html::linkWithHtml('#', '<i class="fas fa-globe"></i> '
                                . __('Festivals'), ['class' => 'dropdown-item']) !!}
                        @endif
                    </div>
                </li>
                @if (Route::currentRouteName() == 'news')
                    <li class="nav-item active">
                        {!! Html::linkWithHtml('news.html', '<i class="fas fa-newspaper"></i> '
                        . __('News') . ' <span class="sr-only">(' . __('Current') . ')</span>', ['class' =>
                        'nav-link']) !!}
                    </li>
                @else
                    <li class="nav-item">
                        {!! Html::linkWithHtml('news.html', '<i class="fas fa-newspaper"></i> '
                        . __('News'), ['class' => 'nav-link']) !!}
                    </li>
                @endif
                @if (Route::currentRouteName() == 'company')
                    <li class="nav-item active">
                        {!! Html::linkWithHtml('company.html', '<i class="fas fa-building"></i> '
                        . __('About us') . ' <span class="sr-only">(' . __('Current') . ')</span>', ['class' => 'nav-link']) !!}
                    </li>
                @else
                    <li class="nav-item">
                        {!! Html::linkWithHtml('company.html', '<i class="fas fa-building"></i> '
                        . __('About us'), ['class' => 'nav-link']) !!}
                    </li>
                @endif
                <li class="nav-item">
                    {!! Html::linkWithHtml('#contacts', '<i class="fas fa-phone"></i> '
                    . __('Contacts'), ['class' => 'nav-link']) !!}
                </li>
            </ul>
            @if (Route::has('login'))
                <ul class="navbar-nav ml-auto">
                    @auth
                        <li class="nav-item dropdown">
                            {!! Html::linkWithHtml('#', Auth::user()->name . ' <span class="caret"></span>', ['class' => 'nav-link dropdown-toggle', 'id' => 'userDropdown', 'role' => 'button', 'data-toggle' => 'dropdown', 'aria-haspopup' => 'true', 'aria-expanded' => 'false', 'v-pre']) !!}

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                {{ Html::linkRoute('logout', __('Logout'), null, ['class' =>
                                'dropdown-item', 'onclick' => 'event.preventDefault();
                                document.getElementById("logout-form").submit();']) }}

                                {{ Form::open(['route' => 'logout', 'id' => 'logout-form', 'style' => 'display: none;']) }}
                                {{ Form::close() }}
                            </div>
                        </li>
                    @else
                        @if (Route::currentRouteName() == 'login')
                            <li class="nav-item active">
                                {!! Html::linkWithHtml(route('login'), '<i class="fas fa-sign-in-alt"></i> '
                                . __('Login') . ' <span class="sr-only">(' . __('Current') . ')</span>', ['class' => 'nav-link']) !!}
                            </li>
                        @else
                            <li class="nav-item">
                                {!! Html::linkWithHtml(route('login'), '<i class="fas fa-sign-in-alt"></i> '
                                . __('Login'), ['class' => 'nav-link']) !!}
                            </li>
                        @endif
                        @if (Route::currentRouteName() == 'register')
                            <li class="nav-item active">
                                {!! Html::linkWithHtml(route('register'), '<i class="fas fa-user"></i> '
                                . __('Register') . ' <span class="sr-only">(' . __('Current') . ')</span>', ['class' => 'nav-link']) !!}
                            </li>
                        @else
                            <li class="nav-item">
                                {!! Html::linkWithHtml(route('register'), '<i class="fas fa-user"></i> '
                                . __('Register'), ['class' => 'nav-link']) !!}
                            </li>
                        @endif
                    @endauth
                </ul>
            @endif
        </div>
    </div>
</nav>

<div id="app">
    @yield('content')
</div>

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
                    <h5>{{ __('Our contacts') }}:</h5>
                    <hr>
                    <ul class="jumbotron-list pl-0">
                        <li><i class="fas fa-phone mr-1"></i> <a href="tel:375445287251">+375 44 528 72 51</a>
                            Никита
                        </li>
                        <li><i class="fas fa-phone mr-1"></i> <a href="tel:375445287252">+375 44 528 72 52</a>
                            Дмитрий
                        </li>
                        <li><i class="fas fa-phone mr-1"></i> <a href="tel:375445287253">+375 44 528 72 53</a>
                            Екатерина
                        </li>
                        <li><i class="fas fa-envelope mr-1"></i> <a
                                    href="mailto:okgroup@mail.ru">okgroup@mail.ru</a>
                        </li>
                        <li><i class="fab fa-instagram mr-1"></i> <a href="https://www.instagram
                            .com/o_k_group/">OK Event Group Instagram</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>{{ __('Our services') }}:</h5>
                    <hr>
                    <ul class="jumbotron-list pl-0">
                        <li><i class="fas fa-star"></i> <a href="#">
                                {{ __('Advertising') }}</a>
                        </li>
                        <li><i class="fas fa-thumbs-up"></i> <a href="#">
                                {{ __('Promotion') }}
                            </a></li>
                        <li><i class="fas fa-calendar-alt"></i> <a href="#">
                                {{ __('Events') }}
                            </a></li>
                        <li><i class="fas fa-globe"></i> <a href="#">
                                {{ __('Festivals') }}
                            </a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Подпишитесь на рассылку:</h5>
                    <hr>

                </div>
            </div>
            <hr>
            @php
                date('Y') != 2018 ? $text = ' - ' . date('Y') : $text = ''
            @endphp
            <p class="text-center">Copyright © 2018{{ $text }}. {{ __('All rights reserved') }}. {{ __('Design') }} <a
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

</body>
</html>
