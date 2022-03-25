@extends('layouts.app')
@section('content')

<div class="container">

    <a href="{{url('users')}}">Rgeresar</a>
    <a href="{{url('task.taskCreate')}}">crear</a>
    <h1>Welcome {{$user->name}} these are your tasks</h1>

    <div class="row">
        <div class="col">
            <form action="{{route('task.store')}}" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{ $user->id}}">
                <label for="">Task name</label>
                @error('task')
                    <span class="alert">{{ $message }}</span>
                @enderror
                <input type="text">
                <label for="">Info</label>
                @error('info')
                    <span class="alert">{{ $message }}</span>
                @enderror
                <input type="text">
                <label for="">Start date</label>
                @error('start_date')
                    <span class="alert">{{ $message }}</span>
                @enderror
                <input type="text">
                <label for="">Close date</label>
                @error('end_date')
                    <span class="alert">{{ $message }}</span>
                @enderror
                <input type="text">

               <button>Guardar</button>
            </form>
        </div>

        <div class="col">    
            <table>
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
                            <td>
                                <button>Edit</button>
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