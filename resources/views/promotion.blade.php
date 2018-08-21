@extends('layouts.app')

@section('title')
    @parent | {{ __('SMM-promotion') }}
@endsection

@section('keywords', 'ОК, OK, OK Event Group, OK Group, реклама, продвижение, smm, реклама и продвижение брендов в
Беларуси')

@section('description', 'OK Event Group, Реклама и продвижение брендов в Беларуси')

@section('content')
    <div id="app mb-4">
        @include('includes.sessions')

        <div class="container">
            <br>
            <h2 class="mt-5 text-center">{{ __('SMM-promotion') }}</h2>
            <hr>
            <p>Для рекламодателей социальные сети предоставляют уникальные возможности непосредственного контакта с
                потребителями. Ежедневно миллионы пользователей ведут беседы о компаниях, их товарах и услугах,
                делясь своим мнением и впечатлениями.</p>
            <h5>Преимущества SMM-продвижения:</h5>
            <ul>
                <li>увеличение Вашей клиентской базы;</li>
                <li>повышение лояльности клиентов;</li>
                <li>увеличение количества продаж;</li>
                <li>уменьшение расходов на рекламу;</li>
                <li>снижение конкуренции;</li>
                <li>увеличение прибыли.</li>
            </ul>
            <p>Продвижение Вашей компании в социальных сетях поможет выйти на новый уровень отношений с Вашей целевой
                аудиторией. «Маленький шаг для интернета – большой шаг для Вашей компании!»</p>
            <h5>Наша компания оказывает следующие услуги:</h5>
            <ul>
                <li>созданием, модерацией и управлением сообществом;</li>
                <li>созданием и публикацией образовательного и развлекательного контента;</li>
                <li>созданием и публикацией образовательного и развлекательного контента;</li>
                <li>поддержкой лояльных пользователей;</li>
                <li>организацией конкурсов и акций.</li>
            </ul>
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

          b24form({'id': '13', 'lang': 'ru', 'sec': 'u74i68', 'type': 'inline'})
        </script>
    </div>
@endsection
