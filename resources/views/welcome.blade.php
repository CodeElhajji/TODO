@extends('master')
@section('contect')
    <div class="container" >
        @if(count($data) > 0)
    <table class="table table-dark ">
        <thead class="">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Task</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @endif
        @forelse($data as $_data)
        <tr>
            <th scope="row">{{$_data -> id}}</th>
            <td>{{$_data -> task}}</td>
            <td>{{$_data -> timetask}}</td>
            <td>
                    <a href="" class="btn btn-sm bg-success  text-white" type="button">Update</a>
                    <a href="" class="btn btn-sm bg-danger  text-white" type="button">Delete</a>
            </td>
        </tr>
        @empty
            <p>Table is empty</p>
        @endforelse
        </tbody>
    </table>
    </div>
@stop
