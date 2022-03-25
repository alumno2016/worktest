@extends('layouts.app')
@section('content')

<div class="container">

<form action="{{url('users/' .$data->id)}}" method="post" enctype="multipart/form_data">
@csrf
{{method_field('PATCH')}}
@include('form.form', ['type' => 'Edit']);
<input type="submit" value="Send">
</form>
<a href="{{url('users/')}}">Ver listado</a>

</div>
@endsection