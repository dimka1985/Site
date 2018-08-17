@extends('layouts.app')

@section('title')
    @parent | Наши мероприятия
@endsection

@section('content')
    <div id="app" class="mb-4">
        @include('includes.sessions')

        <div class="container">
            @if (count($events) > 0)
                <br>
                <h1 class="mt-5 text-center">{{ __('Our events') }}</h1>
                <hr>
                {{ $events->links() }}

                @foreach($events as $event)
                    <div class="jumbotron">
                        <div class="container">
                            <h5 class="text-center"><strong><a
                                            href="{{ route('events.event', ['event' => $event->url]) }}">{{
                            $event->name }}</a></strong></h5>
                            <hr>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <a href="{{ route('events.event', ['event' => $event->url]) }}"><img
                                                src="{{ asset($event->image) }}" class="img-fluid img-thumbnail rounded"
                                                alt="{{ $event->name }}"></a>
                                </div>
                                <div class="col-lg-6">
                                    <h5><strong>{{ $event->heading }}</strong></h5>
                                    <hr>
                                    {!! str_limit($event->text, 300, '...') !!}
                                    <br><br>
                                    <a href="{{ route('events.event', ['event' => $event->url]) }}">{{
                                    __('Read more') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{ $events->links() }}
            @endif
        </div>
    </div>
@endsection
