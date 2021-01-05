<nav class="navbar navbar-light bg-info">
    <form class="form-inline mx-auto">
        <div class="btn-group btn-sm mr-auto" role="group" aria-label="Basic outlined example">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <button type="button" class="btn btn-outline-white">
                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </button>
            @endforeach
        </div>
        <a href="{{ url('taske/create') }}" class="btn bg-success mr-3 text-white" type="button">{{__('nav.add todo')}}</a>
        <a href="{{ url('/taske') }}" class="btn bg-danger mr-3 text-white" type="button">{{__('nav.todo list')}}</a>
    </form>
</nav>
