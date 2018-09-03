@extends('layouts.app')

@section('title')
    @parent | {{ $festival->name }} - {{ __('Speakers page') }}
@endsection

@section('keywords')
    @parent , {{ $festival->name }}, {{ $festival->award }}
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
                                <h3>{{ $festival->place }}</h3>
                                <h3>{{ $festival->address }}</h3>
                                <h3>{{ \Carbon\Carbon::parse($festival->begin_date)->format('d.m.Y') }} @if($festival->begin_date != $festival->end_date)
                                        - {{ \Carbon\Carbon::parse($festival->end_date)->format('d.m.Y') }} @endif</h3>
                                <h4>{{ $festival->time }}</h4>
                                <h4 class="mt-3">{{ __('Cost of visit') }}: {{ $festival->price }}</h4>
                                <h3 class="mt-3">
                                    @include('includes.festival_buttons')
                                </h3>
                                <h3>
                                    {{ Html::link('#speakers', __('Sign up for speakers speech'), ['class' => 'btn btn-primary text-uppercase mb-1']) }}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            <h4 class="text-center mt-3">Как записаться на выступления?</h4>
            <ol>
                <li>Выберите спикеров, которых Вы желаете посетить, нажав на кнопки
                    "<strong>{{ __('Sign up!') }}</strong>" под каждым из них (или поставьте нужные галочки под каждым
                    спикером при заполнении <a href="#bx24_form_inline">анкеты</a> внизу страницы);
                </li>
                <li>Когда выберите нужных Вам кандидатов -> в самом низу страницы заполните <a
                            href="#bx24_form_inline">анкету</a> и нажмите кнопку "<strong>{{ __('Send') }}</strong>";
                </li>
                <li>Данные, которые Вы указали при заполнении анкеты, будут использоваться Вами для посещения спикеров
                    на самом фестивале (указывайте настоящие данные)!
                </li>
            </ol>

            <main class="my-3">
                <div class="card">
                    <div class="card-header" id="headerAward32">
                        <h3 class="mb-0 text-center" id="speakers">
                            {{ __('Speakers') }}
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="card-deck">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 mb-1">
                                    <div class="card h-100">
                                        <div class="card-header text-center">Елена<br>Горчакова</div>
                                        <div class="card-body">
                                            <h5 class="card-title
                                            text-center">Мастер-класс<br>"<strong>Семья - Твой
                                                    личный маркетинговый проект</strong>"</h5>
                                            <img src="{{ asset
                                            ('img/festivals/speakers/grand_fashion_weekend_2018/helena_gorchakova.jpg') }}"
                                                 class="img-thumbnail w-100 mb-3" alt="Елена Горчакова">
                                            <div class="text-center">
                                                <button class="btn btn-sm btn-primary mb-1" type="button"
                                                        data-toggle="collapse"
                                                        data-target="#aboutSpeaker1"
                                                        aria-expanded="false"
                                                        aria-controls="aboutSpeaker1">
                                                    {{ __('About speaker') }}
                                                </button>
                                                <button class="btn btn-sm btn-primary mb-1" type="button"
                                                        data-toggle="collapse"
                                                        data-target="#speaker1"
                                                        aria-expanded="false"
                                                        aria-controls="speaker1">
                                                    {{ __('View announcement') }}
                                                </button>
                                            </div>
                                            <div class="collapse mt-2" id="aboutSpeaker1">
                                                <p class="card-text small">
                                                    - Руководитель направления корпоративного медицинского страхования
                                                    ООО "Страховой брокер Эксинс";<br>
                                                    - Руководитель проекта Компьютерная бизнес-симуляция Delta;<br>
                                                    - Замужем, мама троих детей.
                                                </p>
                                                <hr>
                                            </div>
                                            <div class="collapse mt-2" id="speaker1">
                                                <p class="card-text small">Большинство людей посвящают много времени
                                                    стратегии
                                                    своего бизнеса или карьеры, чем планированию стратегии семьи.
                                                    Надеясь, что в семье всё и так сложится, что жить мы будем
                                                    вечно.</p>

                                                <p class="card-text small">Семья - это Твой личный маркетинговый
                                                    проект с
                                                    внутренними и внешними клиентами, целями, бюджетами, ресурсами,
                                                    процессами, репутацией. И это особенный проект, т.к. он связан с
                                                    чувствами, убеждениями, собственными взглядами, воспитанием! Как его
                                                    реализовать, чтобы сохранить любовь и уважение к супругу(е), детям,
                                                    родителям на долгие годы; сохранить и улучшить здоровье; вырастить
                                                    успешных и счастливых детей и как быть самой(ому) счастливой(ым)
                                                    каждый день узнаете на мастер-классе Елены Горчаковой.</p>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <button class="btn btn-success mb-1"
                                                    type="button" onclick="checked();">{{ __('Sign up!')
                                                    }}</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 mb-1">
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
                                <div class="col-md-6 col-lg-4 mb-1">
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
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    @if ($festival->passed == false)
        <div>
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

              b24form({'id': '19', 'lang': 'ru', 'sec': 'ega147', 'type': 'inline'})
            </script>
        </div>

        <script>
          function checked () {
            let frame = document.getElementById('bx_form_iframe_19')
            frame.contentWindow.document.getElementById('LEAD_UF_CRM_1535984488_0').checked = true
          }
        </script>
    @endif
@endsection
