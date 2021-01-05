@extends('master')
@section('contect')
    <div class="container col-3 bg-white p-2" >
        <h1 class="text-center">ADD YOUR TASK</h1>
        {{--alert success--}}
        @if(Session::has('done'))
        <div class="alert alert-success" role="alert">
            {{Session::get('done')}}
        </div>
        @endif
        <form method="post" action="{{route('taske.store')}}" >
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Taske : </label>
                <input type="text" name="task" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                @error('task')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Date :</label>
                <input type="date" name="timetask" class="form-control" id="exampleInputPassword1" placeholder="">
                @error('timetask')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-danger">Save Task</button>
        </form>
    </div>
@stop
