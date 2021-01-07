<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/') }}">{{__('nav.home')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('taske/create') }}">{{__('nav.add todo')}} <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/taske') }}">{{__('nav.todo list')}} <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <div class="form-inline my-2 my-lg-0">
            <div class="btn-group btn-sm " role="group" aria-label="Basic outlined example">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <button type="button" class="btn btn-sm btn-outline-white">
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </button>
                @endforeach
            </div>
        </div>
    </div>
</nav>
