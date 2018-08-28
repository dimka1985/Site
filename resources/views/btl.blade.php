@extends('layouts.app')

@section('title')
    @parent | {{ __('BTL-advertising and BTL-marketing') }}
@endsection

@section('keywords')
    @parent
@endsection

@section('description')
    @parent
@endsection

@section('content')
    <div id="app mb-4">
        @include('includes.sessions')

        <div class="container">
            <br>
            <h2 class="mt-5 text-center">{{ __('BTL-advertising and BTL-marketing') }}</h2>
            <hr>
            <p>BTL-маркетинг является достаточно перспективным направлением. BTL-акции особенно эффективны, ведь они
                проводятся там, где принимается итоговое решение о покупке.</p>
            <p>Promo-услуги — это сильная сторона деятельности OK Event Group.
                Опыт проектов {{ config('app.name') }} - это широкие возможности в организации и проведении эффективных
                рекламных
                мероприятий «под ключ».</p>
            <h5>BTL-реклама состоит из:</h5>
            <ul>
                <li>Consumer Promotion - это один из наиболее эффективных методов по продвижению товаров на рынках. В
                    него входят раздача приглашений и листовок, розыгрыши призов и различные промо-акции.
                </li>
                <li>Event Marketing - OK Event Group использует набор мероприятий, которые направлены на раскрутку
                    бренда, его продвижение с помощью необычных и, главное, запоминающихся событий. Это, так называемый,
                    событийный маркетинг, состоящий из проведения презентаций и выставок, праздников, фестивалей и
                    ярморок.
                </li>
            </ul>

            <h5>В зависимости от задач, агентство OK Event Group предлагает своим клиентам следующие формы
                BTL-активности:</h5>
            <ul>
                <li>партнерские проекты;</li>
                <li>программы по продвижению продукта/услуги/мероприятия;</li>
                <li>промо-программы для мелкого и среднего опта;</li>
                <li>промоушен для дистрибьюторов.</li>
            </ul>
            <p>Мы сделаем Вашу рекламную кампанию интересной, запоминающейся и прибыльной!</p>
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

          b24form({'id': '17', 'lang': 'ru', 'sec': 'er6v9j', 'type': 'inline'})
        </script>
    </div>
@endsection
