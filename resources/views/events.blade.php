@extends('layouts.app')

@section('title')
    @parent | {{ __('Organization of events') }}
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
            <h2 class="mt-5 text-center">{{ __('Organization of events') }}</h2>
            <hr>
            <p>Наша компания готова предоставить Вам большой выбор необычных площадок для проведения корпоративных
                мероприятий. Профессионалы из нашей команды предложат самые интересные и креативные варианты и
                проконтролируют всю подготовку мероприятия «от и до», а дизайнеры и оформители разработают декор в
                соответствии с вашими пожеланиями и последними мировыми тенденциями.</p>

            <p>Мы проводим всю предварительную работу по организации, если вы ещё не определились с основными
                элементами мероприятия, мы, совместно с вами:</p>
            <ul>
                <li>разработаем концепцию,</li>
                <li>подберём площадку, свет, звук,</li>
                <li>предложим различные варианты желаемой программы мероприятия,</li>
                <li>если необходимо, то проведём расчет альтернативных вариантов и предложим тот, который подходит
                    именно Вам.
                </li>
            </ul>
            <p>Мы контролируем ход мероприятий до малейших деталей, потому что считаем, что «мелочей» не существует, мы
                заботимся о наших клиентах.</p>

            <h5>Мы предлагаем:</h5>
            <ul>
                <li>Лучшие площадки,</li>
                <li>интересные и запоминающиеся сценарии мероприятий,</li>
                <li>активных ведущих «с именем и аудиторией»,</li>
                <li>талантливых аниматоров и актёров,</li>
                <li>потрясающие световые, звуковые и спецэффекты любого уровня,</li>
                <li>молодой и доброжелательный обслуживающий персонал!</li>
            </ul>
            <hr class="my-4">
            <div class="img-galery">
                <div class="container text-center">
                    <h4 class="text-center mb-4">{{ __('Last events') }}</h4>
                    @include('includes.events')
                </div>
            </div>
        </div>
    </div>

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

          b24form({'id': '15', 'lang': 'ru', 'sec': 'bmlnnh', 'type': 'inline'})
        </script>
    </div>
@endsection
