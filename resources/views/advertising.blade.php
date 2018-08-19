@extends('layouts.app')

@section('title')
    @parent | {{ __('Advertising companies') }}
@endsection

@section('keywords', 'ОК, OK, OK Event Group, OK Group, реклама, продвижение, smm, реклама и продвижение брендов в
Беларуси')

@section('description', 'OK Event Group, Реклама и продвижение брендов в Беларуси')

@section('content')
    <div id="app mb-4">
        @include('includes.sessions')

        <div class="container">
            <br>
            <h2 class="mt-5 text-center">{{ __('Advertising companies') }}</h2>
            <hr>
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

          b24form({'id': '11', 'lang': 'ru', 'sec': '1wy6el', 'type': 'inline'})
        </script>
    </div>
@endsection
