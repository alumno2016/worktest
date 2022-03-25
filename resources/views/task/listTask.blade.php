@extends('layouts.app')
@section('content')

<div class="container">

    
    <a href="">Create tasks</a>
    <h1>Welcome {{$user->name}} these are your tasks</h1>

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
@endsection