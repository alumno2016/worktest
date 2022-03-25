@extends('layouts.app')
@section('content')

<div class="container">

    <a href="{{url('users/create')}}">Crear usuario</a>

    @if(Session::has('message'))
        {{ Session::get('message')}}
    @endif

    <table class="">
        <thead class="">
            <tr>
                <th></th>
                <th>User name</th>
                <th>Full name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
           @foreach($data as $data)
            <tr>
                <td><a href="{{url('/users/'.$data->id. '/edit')}}">Edit</a></td>
                <td>{{$data->user}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->address}}</td>
                <td>
                    <form action="{{url('/users/'.$data->id)}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" onclick="return confirm('Are you sure')" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach    
        </tbody>
    </table>

</div>
@endsection
