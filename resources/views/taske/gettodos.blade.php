@extends('master')
@section('contect')
    <div class="container mt-4" >
        @if(count($data) > 0)
    <div style="overflow-x:auto;">
        @if(Session::has('notdeleted'))
            <div class="alert alert-danger" role="alert">
                {{Session::get('notdeleted')}}
            </div>
        @endif
        @if(Session::has('deleted'))
            <div class="alert alert-success" role="alert">
                {{Session::get('deleted')}}
            </div>
        @endif
    <table class="table table-dark">
        <thead class="">
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{__('listtodo.task')}}</th>
            <th scope="col">{{__('listtodo.date task')}}</th>
            <th scope="col">{{__('listtodo.photo')}}</th>
            <th scope="col">{{__('listtodo.action')}}</th>
        </tr>
        </thead>
        <tbody>
        @endif
        @forelse($data as $_data)
        <tr>
            <th scope="row">{{$_data -> id}}</th>
            <td>{{$_data -> task}}</td>
            <td>{{$_data -> timetask}}</td>
            <td><img src="{{asset('images/taskes/'.$_data -> pic)}}" width="60"> </td>
            <td>
                    <a href=" {{url('taske/edit/'.$_data -> id)}}" class="btn btn-sm bg-success  text-white" type="button">{{__('listtodo.update')}}</a>
                    <a href="{{route('task.delete',$_data -> id)}}" class="btn btn-sm bg-danger  text-white" type="button">{{__('listtodo.delete')}}</a>
            </td>
        </tr>
        @empty
                <div class="alert alert-danger" role="alert">
                    {{__('messages.empty table')}}
                </div>

        @endforelse
        </tbody>
    </table>
    </div>
    </div>
@stop
