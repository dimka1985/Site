@extends('layouts.app')

@section('title')
    @parent | {{ __('Terms') }}
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
            <h2 class="mt-5 text-center">{{ __('Terms') }}</h2>
            <hr>
            <h5>Администрация сайта обязуется:</h5>
            <ul>
                <li>Не использовать авторизационные данные пользователей в незаконных целях</li>
                <li>Не передавать авторизационные данные пользователей третьим лицам</li>
            </ul>
            <h5>Администрация имеет право:</h5>
            <ul>
                <li>Рассылать рекламную или новостную информацию на электронную почту пользователей</li>
            </ul>
            <h5>Пользователь обязуется:</h5>
            <ul>
                <li>Соблюдать законодательство Республики Беларусь</li>
                <li>Соблюдать международные нормы права</li>
                <li>Не использовать информацию с сайта без указания ссылок на источник</li>
            </ul>
        </div>
    </div>
@endsection
