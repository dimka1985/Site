@foreach($events as $e => $event)
    @if ($e / 4 == 0)
        <div class="row">
            @endif
            <div class="col-md-6 col-xl-3 mb-5 h-100">
                <h5><strong><a href="{{ route('events.event', ['event' => $event]) }}">{{
                                    $event->name }}</a></strong></h5>
                <a href="{{ route('events.event', ['event' => $event]) }}"><img
                            src="{{ asset($event->image) }}" class="img-fluid img-thumbnail
                                                rounded" alt="{{ $event->name }}"></a>
            </div>

            @if (($e != 0) && ($e / 3 == 0))
        </div>
    @endif
@endforeach
