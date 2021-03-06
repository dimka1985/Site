@extends('layouts.app')

@section('title')
    @parent | {{ __('Reset password request page') }}
@endsection

@section('keywords')
    @parent
@endsection

@section('description')
    @parent
@endsection

@section('content')
    <div class="container my-5">
        <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center mb-3">{{ __('Reset password request') }}</div>

                    <div class="card-body">
                        @include('includes.sessions')

                        {{ Form::open(['route' => 'password.email']) }}

                        <div class="form-group row">
                            {{ Form::label('email', __('E-Mail address'), ['class' => 'col-lg-4 col-form-label text-lg-right']) }}

                            <div class="col-lg-6">
                                <div class="input-group">
                                    {{ Form::email('email', old('email'), ['class' => 'form-control' .
                                    ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' =>
                                    __('Enter your E-Mail address'), 'minlength' => '3', 'maxlength' => '255', 'required', 'autofocus']) }}

                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-6 offset-lg-4">
                                {{ Form::submit(__('Send password reset link'), ['class' => 'btn btn-primary']) }}
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <h6 class="text-center">{{ __('Authorize with social networks') }}</h6>
                                <hr class="my-4">
                                @foreach($socialproviders as $socialprovider)
                                    <a href="{{ url('/auth/' . $socialprovider->provider) }}"
                                       class="btn btn-sm btn-outline-primary mb-1" role="button"><i class="fab fa-{{
                                    $socialprovider->provider }}"></i> {{ ucfirst($socialprovider->provider) }}</a>
                                @endforeach
                            </div>
                        </div>

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection
