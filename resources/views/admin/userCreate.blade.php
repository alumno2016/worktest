
@extends('layouts.app')
@section('content')

<div class="container">

<form action="{{url('/users')}}" method="post" enctype="multipart/form_data">
    @csrf
    @include('form.form', ['type' => 'Create'])
    <label for="">Password:</label>
    @error('password')
    <br/>
    <small>*{{$message}}</small>
    @enderror
    <input type="password" name="password">
    
    <input type="submit" value="Send">
</form>
<a href="{{url('users')}}">Retornar</a>

</div>
@endsection