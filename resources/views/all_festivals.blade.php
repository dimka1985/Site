@extends('layouts.app')

@section('title')
    @parent | Наши фестивали
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

        <div class="container mb-5">
            @if (count($festivals) > 0)
                <br>
                <h1 class="mt-5 text-center">{{ __('Our festivals') }}</h1>
                <hr>
                {{ $festivals->links() }}

                @foreach($festivals as $festival)
                    <div class="jumbotron">
                        <div class="container">
                            <h5 class="text-center"><strong><a
                                        href="{{ route('festivals.festival', ['festival' => $festival])
                                            }}">{{ $festival->name }}</a></strong></h5>
                            <hr>
                            <div class="row">
                                <div class="col-lg-3 mb-3">
                                    <div class="row">
                                        <div class="col-6 col-lg-12 mb-1">
                                            <a href="{{ route('festivals.festival', ['festival' => $festival]) }}"><img
                                                    src="{{ asset($festival->image) }}"
                                                    class="img-fluid img-thumbnail rounded"
                                                    alt="{{ $festival->name }}"></a>
                                        </div>
                                        <div class="col-6 col-lg-12">
                                            <a href="{{ route('festivals.festival.award', ['festival' => $festival]) }}"><img
                                                    src="{{ asset($festival->award_image) }}"
                                                    class="img-fluid img-thumbnail rounded" alt="{{ $festival->award
                                                }}"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <h5><u>{{ __('Name of the festival') }}</u>:
                                        <strong>{{ $festival->heading }}</strong></h5>
                                    <h5><u>{{ __('Official Instagram') }}</u>:
                                        <strong><a href="{{ $festival->instagram }}" target="_blank"><i class="fab
                                        fa-instagram mr-1"></i> {{ __('Instagram') }} {{ $festival->name }}</a></strong>
                                    </h5>
                                    <h5><u>{{ __('Award name') }}</u>: <strong>{{ __('Award') }} {{ $festival->award
                                    }}</strong></h5>
                                    <h5><u>{{ __('Date') }}</u>: <strong>{{ \Carbon\Carbon::parse
                                    ($festival->begin_date)->format('d.m.Y') }} @if ($festival->begin_date != $festival->end_date)
                                                - {{ \Carbon\Carbon::parse($festival->end_date)->format('d.m.Y') }} @endif</strong>
                                    </h5>
                                    <h5><u>{{ __('Time') }}</u>: <strong>{{ $festival->time }}</strong></h5>
                                    <h5>
                                        <u>{{ __('Location') }}</u>: <strong>{{ $festival->place }}</strong>
                                    </h5>
                                    <h5>
                                        <u>{{ __('Address') }}</u>: <strong>{{ $festival->address }}</strong>
                                    </h5>
                                    <h5>
                                        <u>{{ __('Cost of visit') }}</u>: <strong>{{ $festival->price }}</strong>
                                    </h5>
                                    @if ($festival->passed == false)
                                        <h5 class="mt-3">
                                            @include('includes.festival_buttons')
                                        </h5>
                                    @endif
                                    <hr>
                                    {!! str_limit($festival->text, 500, '...') !!}
                                    <br><br>
                                    <a href="{{ route('festivals.festival', ['festival' => $festival]) }}">{{
                                    __('Learn more') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{ $festivals->links() }}
            @endif
        </div>
    </div>
@endsection
