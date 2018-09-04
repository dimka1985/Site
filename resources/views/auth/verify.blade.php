@extends('layouts.app')

@section('title')
    @parent | {{ __('Registration verification page') }}
@endsection

@section('keywords')
    @parent
@endsection

@section('description')
    @parent
@endsection

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('Verify your E-mail address') }}</div>

                    <div class="card-body">
                        @include('includes.sessions')
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address') }}.
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link') }}.
                        {{ __('If you did not receive the email') }}, <a href="{{
                        route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection
