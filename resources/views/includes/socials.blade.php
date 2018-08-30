<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <h6 class="text-center" id="socials">{{ __('Authorize with social networks') }}</h6>
        <hr class="my-4">
        @foreach($socialproviders as $socialprovider)
            <a href="{{ url('/auth/' . $socialprovider->provider) }}" class="btn btn-sm
                                    btn-outline-primary mb-1" role="button"><i class="fab fa-{{
                                    $socialprovider->provider }}"></i> {{ ucfirst($socialprovider->provider) }}</a>
        @endforeach
    </div>
</div>
