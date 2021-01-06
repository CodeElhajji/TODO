@extends('master')
@section('contect')
    <div class="container  bg-white  p-2" >
            <h1 class="text-center">{{__('formlang.form title add')}}</h1>
        {{--alert success--}}
        @if(Session::has('done'))
        <div class="alert alert-success" role="alert">
            {{Session::get('done')}}
        </div>
        @endif
        <form method="post" action="{{route('taske.taskupdate'.$task->id)}}" >
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">{{__('formlang.task en')}}</label>
                <input type="text" value="{{$task -> task_en}}" name="task_en" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                @error('task_en')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">{{__('formlang.task ar')}}</label>
                <input type="text" value="{{$task -> task_ar}}" name="task_ar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                @error('task_ar')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">{{__('formlang.form date')}}</label>
                <input type="datetime-local" value="{{$task -> timetask}}" name="timetask" class="form-control" id="exampleInputPassword1" >
                @error('timetask')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-danger">{{__('formlang.add todo')}}</button>
        </form>
    </div>
@stop
