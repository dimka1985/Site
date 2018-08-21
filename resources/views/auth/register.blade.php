@extends('layouts.app')

@section('title')
    @parent | {{ __('Register page') }}
@endsection

@section('content')
    <div class="container my-5">
        <br>
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('Register') }}</div>

                    <div class="card-body">
                        @include('includes.sessions')

                        {{ Form::open(['route' => 'register', 'aria-label' => __('Register'), 'files' => true]) }}

                        <div class="row">
                            <div class="offset-lg-2 col-lg-8 mb-3">
                                <i>* {{ __('Asterisk marked the required fields') }}</i>
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('name', __('Full name') . '*', ['class' => 'col-lg-4 col-form-label
                            text-lg-right']) }}

                            <div class="col-lg-6">
                                <div class="input-group">
                                    {{ Form::text('name', old('name'), ['class' => 'form-control' .
                                    ((count($errors) > 0) ? ($errors->has('name') ? ' is-invalid' : ' is-valid') :
                                    ''), 'placeholder' => __('Enter your name'), 'minlength' => '1', 'maxlength' =>
                                    '30', 'required', 'autofocus']) }}

                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('company', __('Company'), ['class' => 'col-lg-4 col-form-label
                            text-lg-right']) }}

                            <div class="col-lg-6">
                                <div class="input-group">
                                    {{ Form::text('company', old('company'), ['class' => 'form-control' .
                                    ((count($errors) > 0) ? ($errors->has('company') ? ' is-invalid' :
                                    ' is-valid') : ''), 'placeholder' => __('Enter your company'), 'minlength' =>
                                    '2', 'maxlength' => '50']) }}

                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-building"></i></span>
                                    </div>

                                    @if ($errors->has('company'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('company') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('phone', __('Phone') . ' +375', ['class' => 'col-lg-4 col-form-label
                            text-lg-right']) }}

                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-3">
                                        {{ Form::text('code', old('code'), ['class' => 'form-control' .
                                        ((count($errors) > 0) ? ($errors->has('code') ? ' is-invalid' :
                                        ' is-valid') : ''), 'placeholder' => __('Code'), 'minlength' =>
                                        '2', 'maxlength' => '2', 'pattern' => '(17)|(25)|(29)|(33)|(44)']) }}

                                        @if ($errors->has('code'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('code') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            {{ Form::text('phone', old('phone'), ['class' => 'form-control' .
                                            ((count($errors) > 0) ? ($errors->has('phone') ? ' is-invalid' :
                                            ' is-valid') : ''), 'placeholder' => __('Enter your phone'), 'minlength' => '7', 'maxlength' => '7', 'pattern' => '[0-9]{7}']) }}

                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>

                                            @if ($errors->has('phone'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('email', __('E-Mail address') . '*', ['class' => 'col-lg-4 col-form-label
                            text-lg-right']) }}

                            <div class="col-lg-6">
                                <div class="input-group">
                                    {{ Form::email('email', old('email'), ['class' => 'form-control' .
                                    ((count($errors) > 0) ? ($errors->has('email') ? ' is-invalid' :
                                    ' is-valid') : ''), 'placeholder' => __('Enter your E-Mail address'), 'minlength' => '3', 'maxlength' => '255', 'required']) }}

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
                            {{ Form::label('password', __('Password') . '*', ['class' => 'col-lg-4 col-form-label
                            text-lg-right']) }}

                            <div class="col-lg-6">
                                <div class="input-group">
                                    {{ Form::password('password', ['class' => 'form-control' . ((count($errors) > 0) ? ($errors->has('password') ? ' is-invalid' : ' is-valid') : ''),
                                     'placeholder' => __('Enter your password'), 'minlength' => '6', 'maxlength' => '30', 'required']) }}

                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-key"></i></span>
                                    </div>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('password_confirmation', __('Confirm password') . '*', ['class' =>
                            'col-lg-4 col-form-label text-lg-right']) }}

                            <div class="col-lg-6">
                                <div class="input-group">
                                    {{ Form::password('password_confirmation', ['class' => 'form-control' .
                                    ((count($errors) > 0) ? ($errors->has('password_confirmation') ?
                                    ' is-invalid' : ' is-valid') : ''), 'placeholder' =>
                                    __('Confirm your password'), 'minlength' => '6', 'maxlength' => '30', 'required']) }}

                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-key"></i></span>
                                    </div>

                                    @if ($errors->has('password_confirmation'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('avatar', __('Avatar'), ['class' => 'col-lg-4 col-form-label
                            text-lg-right']) }}

                            <div class="col-lg-6">
                                <div class="custom-file">
                                    {{ Form::file('avatar', ['class' => 'custom-file-input' .
                                    ((count($errors) > 0) ? ($errors->has('avatar') ? ' is-invalid' :
                                    ' is-valid') : '')]) }}

                                    {{ Form::label('avatar', __('Choose file'), ['class' => 'custom-file-label',
                                    'lang' => 'ru']) }}

                                    @if ($errors->has('avatar'))
                                        <span class="invalid-feedback pt-2" role="alert">
                                            <strong>{{ $errors->first('avatar') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-6 offset-lg-4">
                                <div class="checkbox">
                                    <div class="custom-control custom-checkbox">
                                        {{ Form::checkbox('terms', null, (old('terms') ? true : false),
                                        ['class' => 'custom-control-input' . ((count($errors) > 0) ?
                                        ($errors->has('terms') ? ' is-invalid' : ' is-valid') : ''), 'id' =>
                                        'terms', 'required']) }}

                                        {!! Form::label('terms', __('I agree with'), ['class' =>
                                        'custom-control-label']) !!}
                                        {{ Html::linkRoute('terms', __('terms'), null, ['target' => '_blank'])
                                        }}*

                                        @if ($errors->has('terms'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('terms') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-6 offset-lg-4">
                                {{ Form::submit(__('Register'), ['class' => 'btn btn-primary']) }}
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <h6 class="text-center">{{ __('Authorize with social networks') }}</h6>
                                <hr class="my-4">
                                @foreach($socialproviders as $socialprovider)
                                    <a href="{{ url('/auth/' . $socialprovider->provider) }}" class="btn btn-sm
                                    btn-outline-primary mb-1" role="button"><i class="fab fa-{{
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
