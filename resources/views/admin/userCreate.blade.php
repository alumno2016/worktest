@extends('layouts.app')
@section('content')

<div class="container">

<form action="{{url('/users')}}" method="post" enctype="multipart/form_data">
    @csrf
    @include('form.form', ['type' => 'Create'])
    <label class="form-label" for="">Password:</label>
    @error('password')
    <br/>
    <small>*{{$message}}</small>
    @enderror
    <input class="form-control" type="password" name="password" minlength="6">
    <br/>
    <div class="d-grid gap-2">
    <input class="btn btn-success" type="submit" value="Send">
    </div>
</form>
<br/>
<a class="btn btn-primary" href="{{url('users')}}">Return</a>

</div>
@endsection