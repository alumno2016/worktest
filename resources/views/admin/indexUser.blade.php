@extends('layouts.app')
@section('content')

<div class="container">

    <a class="btn btn-success" href="{{url('users/create')}}">Create user</a>


        @if(Session::has('message'))
            {{ Session::get('message')}}
        @endif


    <table class="table table-hover">
        <thead class="">
            <tr>
                <th></th>
                <th>User name</th>
                <th>Full name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Email</th>
                <th>Tasks</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
           @foreach($data as $datas)
            <tr>
                <td><a class="btn btn-primary" href="{{url('/users/'.$datas->id. '/edit')}}">Edit</a></td>
                <td>{{$datas->user}}</td>
                <td>{{$datas->name}}</td>
                <td>{{$datas->email}}</td>
                <td>{{$datas->phone}}</td>
                <td>{{$datas->address}}</td>
                <td><a class="btn btn-secondary" href="/task/{{$datas->id}}">MyTasks</a></td>
                <td>
                    <form action="{{url('/users/'.$datas->id)}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <input class="btn btn-danger" type="submit" onclick="return confirm('Are you sure')" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach    
        </tbody>
    </table>

    {{ $data->links() }}

</div>
@endsection
