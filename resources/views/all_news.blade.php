@extends('layouts.app')

@section('title')
    @parent | Наши новости
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

        <div class="container">
            @if (count($news) > 0)
                <br>
                <h1 class="mt-5 text-center">{{ __('Our news') }}</h1>
                <hr>
                {{ $news->links() }}

                @foreach($news as $tiding)
                    <div class="jumbotron">
                        <div class="container">
                            <h5 class="text-center"><strong><a
                                            href="{{ route('news.tiding', ['tiding' => $tiding])
                                            }}">{{ $tiding->name }}</a></strong></h5>
                            <hr>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <a href="{{ route('news.tiding', ['tiding' => $tiding]) }}"><img
                                                src="{{ asset($tiding->image) }}"
                                                class="img-fluid img-thumbnail rounded"
                                                alt="{{ $tiding->name }}"></a>
                                </div>
                                <div class="col-lg-6">
                                    <h5><strong>{!! $tiding->heading !!}</strong></h5>
                                    <hr>
                                    {!! str_limit($tiding->text, 300, '...') !!}
                                    <br><br>
                                    <a href="{{ route('news.tiding', ['tiding' => $tiding]) }}">{{
                                    __('Read more') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{ $news->links() }}
            @endif
        </div>
    </div>
@endsection
