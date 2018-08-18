@extends('layouts.app')

@section('title')
    @parent | Наши фестивали
@endsection

@section('keywords', 'ОК, OK, OK Event Group, OK Group, реклама, продвижение, smm, реклама и продвижение брендов в
Беларуси')

@section('description', 'OK Event Group, Реклама и продвижение брендов в Беларуси')

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
                                            href="{{ route('festivals.festival', ['festival' => $festival->url])
                                            }}">{{ $festival->name }}</a></strong></h5>
                            <hr>
                            <div class="row">
                                <div class="col-lg-4 mb-3">
                                    <a href="{{ route('festivals.festival', ['festival' => $festival->url]) }}"><img
                                                src="{{ asset($festival->image) }}"
                                                class="img-fluid img-thumbnail rounded"
                                                alt="{{ $festival->name }}"></a>
                                </div>
                                <div class="col-lg-8">
                                    <h5><u>{{ __('Name') }}</u>: <strong>{{ $festival->heading }}</strong></h5>
                                    <h5><u>{{ __('Date') }}</u>: <strong>{{ \Carbon\Carbon::parse
                            ($festival->begin_date)->format('d.m.Y') }} @if ($festival->begin_date !=
                            $festival->end_date)
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
                                        <h5>
                                            @include('includes.festival_buttons')
                                        </h5>
                                    @endif
                                    <hr>
                                    {!! str_limit($festival->text, 300, '...') !!}
                                    <br><br>
                                    <a href="{{ route('festivals.festival', ['festival' => $festival->url]) }}">{{
                                    __('Read more') }}</a>
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
