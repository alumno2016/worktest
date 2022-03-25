@extends('layouts.app')
@section('content')

<div class="container">

    <a class="btn btn-secondary" href="{{url('users')}}">Rgeresar</a>
    <a class="btn btn-success" href="{{url('task.taskCreate')}}">crear</a>
    <h1>Welcome {{$user->name}} these are your tasks</h1>

    <div class="row">
        <div class="col">
            <form action="{{route('task.store')}}" method="post">
                @csrf
                <input class="form-control" type="hidden" name="user_id" value="{{ $user->id}}">
                <label for="">Task name:</label>
                @error('task')
                    <span class="alert">{{ $message }}</span>
                @enderror
                <input class="form-control" type="text">
                <label for="">Info:</label>
                @error('info')
                    <span class="alert">{{ $message }}</span>
                @enderror
                <input class="form-control" type="text">
                <label for="">Start date:</label>
                @error('start_date')
                    <span class="alert">{{ $message }}</span>
                @enderror
                <input class="form-control" type="text">
                <label for="">Close date:</label>
                @error('end_date')
                    <span class="alert">{{ $message }}</span>
                @enderror
                <input class="form-control" type="text">

                <br/>
                <div class="d-grid gap-2">
               <button class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>

        <div class="col">    
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Number</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>State</th>
                        <th>Start</th>
                        <th>End</th>
                        <th></th>
                    </tr>
                    <tbody>
                        @foreach($user->tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->task}}</td>
                            <td>{{$task->info}}</td>
                            <td>{{$task->state}}</td>
                            <td>{{$task->date_start}}</td>
                            <td>{{$task->date_end}}</td>
                            <td class="d-inline-flex">
                                <button class="btn btn-primary me-1">Edit</button>
                                <br/>
                                <button class="btn btn-danger ms-1">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
        </div>
    </div>

</div>
@endsection