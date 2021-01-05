<nav class="navbar navbar-light bg-info">
    <form class="form-inline ">
        <div class="btn-group btn-sm " role="group" aria-label="Basic outlined example">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <button type="button" class="btn btn-sm btn-outline-white">
                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </button>
            @endforeach
        </div>
        <a href="{{ url('taske/create') }}" class="btn btn-sm bg-success  text-white" type="button">{{__('nav.add todo')}}</a>
        <a href="{{ url('/taske') }}" class="btn bg-danger btn-sm  text-white" type="button">{{__('nav.todo list')}}</a>
    </form>
</nav>
