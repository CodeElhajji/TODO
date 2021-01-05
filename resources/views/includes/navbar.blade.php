<nav class="navbar navbar-light bg-info">
    <form class="form-inline mx-auto">
        <a href="{{ url('taske/create') }}" class="btn bg-success mr-3 text-white" type="button">{{__('nav.add todo')}}</a>
        <a href="{{ url('/taske') }}" class="btn bg-danger mr-3 text-white" type="button">{{__('nav.todo list')}}</a>
    </form>
</nav>
